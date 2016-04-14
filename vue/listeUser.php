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

<?php
	if(isset($_POST) and !empty($_POST['id'])){
		$user=new Utilisateur($base);
		$user->SupprimerUtilisateur($_POST['id']);
        ?>
     
    <div class="span9">
		<div class="alert alert-success">
			<button class="close" data-dismiss="alert">&times;</button>
			<strong>Success!</strong> Utilisateur supprimé avec succès.
		</div>
	</div>
 <?php
	}
 ?>

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
														<i class="icon-zoom-in icon-white"></i> détails 
													</a>
													<a class="btn btn-info" href="ModifUser.php?numero=<?php echo $donnees['id'];?>" title="modifier">
														<i class="icon-edit icon-white"></i>modifier
													</a>
														<button type="button" title="supprimer" class="btn btn-danger" data-toggle="modal" data-target="#supp<?php echo $donnees['id'];?>"><i class="icon-trash icon-white"></i>Supprimer</button>
													<!-- Modal -->
														<div id="supp<?php echo $donnees['id'];?>" class="modal fade" role="dialog">
														  <div class="modal-dialog">
															<!-- Modal content-->
															<div class="modal-content">
															  <div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">Supression</h4>
															  </div>
															  <div class="modal-body">
																<p>Voulez vous vraiement supprimer le client numéro: <?php echo $donnees['id'];?></p>
															  </div>
															  <div class="modal-footer">
																<form method="post">
																<input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
																<button type="submit" class="btn btn-info">oui</button>
																<button type="button" class="btn btn-default" data-dismiss="modal">non</button>
																</form>
															  </div>
															</div>

														  </div>
														</div>
                                                
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


