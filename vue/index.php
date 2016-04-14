<?php
	include("../controller/connexion.php");
	include("../controller/utils.php");
	include("header.php");
	include("navbar.php");
	include("menu.php");
?>
<div class="span9" id="content">
	<div class="row-fluid">
		<div class="navbar">
				<div class="navbar-inner">
					<ul class="breadcrumb">
						<i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
						<i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
						<li>
							<a href="index.php">Accueil</a> <span class="divider">/</span>	
						</li>
						<li>
							<a href="index.php">gestion Clients</a> <span class="divider">/</span>	
						</li>
						<li class="active">Liste des clients</li>
					</ul>
				</div>
		</div>
	</div>
</div>

<div class="span9" id="content">
     <div class="row-fluid">
                        <!-- block -->
                        
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Liste des Clients</div>
                            </div>
                            
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="ajouterClient.php"><button class="btn btn-success">nouveau <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">outils<span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">imprimer</a></li>
                                            <li><a href="#">Exporter en PDF</a></li>
                                            <li><a href="#">Exporter en Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <?php
											$client = new Client($base);
											$liste = $client->getAllClient();
                                        ?>
                                        <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>Etablissement</th>
                                                <th>Status</th>
                                                <th>Details</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												while($donnees=$liste->fetch()){
													if($donnees["status"] == "cible")  $vue="label label-info";
													else if($donnees["status"] == "reticent") $vue="label label-important";
													else if($donnees["status"] == "interesse") $vue="label label-warning";
													else if($donnees["status"] == "potentiel") $vue="label";
													else if($donnees["status"] == "acquis") $vue="label label-success";
											?>
                                            <tr class="gradeX">
                                                <td><?php echo $donnees["numero"];?></td>
                                                <td><?php echo $donnees["etablissement"];?></td>
                                                <td><span class="<?php echo $vue;?>"><?php echo $donnees["status"];?></span></td>
                                                <td class="center"> <?php echo $donnees["detail"];?></td>
                                                <td class="center">
													<a class="btn btn-success" href="#" title="afficher">
														<i class="icon-zoom-in icon-white"></i>  
													</a>
													<a class="btn btn-info" href="modifierClient.php?numero=<?php echo $donnees['numero'];?>" title="modifier">
														<i class="icon-edit icon-white"></i>
													</a>
													<a class="btn btn-danger" href="#" title="supprimer">
														<i class="icon-trash icon-white"></i>
													</a>
                                                </td>
                                            </tr>
                                            <?php
												}
											?>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                       </div>
                


<?php
	include("footer.php");
?>

