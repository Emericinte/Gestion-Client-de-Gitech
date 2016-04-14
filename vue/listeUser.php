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
							<a href="index.php">gestion Utilisateurs</a> <span class="divider">/</span>	
						</li>
						<li class="active">Liste des Utilisateurs</li>
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
                                <div class="muted pull-left">Liste des Utilisateurs</div>
                            </div>
                            
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         <a href="AjoutUser.php"><button class="btn btn-success">nouveau <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <?php
											$liste = Utilisateur::getAllUtilisateur($base);
                                        ?>
                                        <thead>
                                            <tr>
                                                <th>Numéro</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
												while($donnees=$liste->fetch()){
											?>
                                            <tr class="gradeX">
                                                <td><?php echo $donnees["id"];?></td>
                                                <td><?php echo $donnees["nom"];?></td>
                                                <td><?php echo $donnees["prenom"];?></td>
                                                <td class="center"> <?php echo $donnees["mail"];?></td>
                                                <td class="center">
													<a class="btn btn-success" href="#" title="afficher">
														<i class="icon-zoom-in icon-white"></i>  
													</a>
													<a class="btn btn-info" href="ModifUser.php?numero=<?php echo $donnees['id'];?>" title="modifier">
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


