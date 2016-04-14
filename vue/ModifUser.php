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
						<li class="active">Modification</li>
					</ul>
				</div>
		</div>
	</div>
</div>

<div class="span9" id="content">
     <div class="row-fluid">
 <!-- validation -->
			 <!-- block -->
			<div class="block">
				<div class="navbar navbar-inner block-header">
					<div class="muted pull-left">Modification de l'Utilisateur</div>
				</div>


                <div class="block-content collapse in">
                <div class="span12">
<?php
	if(isset($_GET) and !empty($_GET['numero'])){
		$numero=$_GET['numero'];
		$user=new Utilisateur($base);
		$infos=$user->getInfosUtilisateur($numero);
		$liste=$infos->fetch();
?>

<form action="../controller/traitementModifUser.php" id="form_sample_1" class="form-horizontal" method="POST">
						<fieldset>
  							<div class="control-group">
  								<label class="control-label">Nom:<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="nom" data-required="1" class="span6 m-wrap" value="<?php echo $liste["nom"];?>" />
  								</div>
  							</div>
							<div class="control-group">
  								<label class="control-label">Prenom:<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="prenom" data-required="1" class="span6 m-wrap" value="<?php echo $liste["prenom"];?>" />
  								</div>
  							</div>

  							<div class="control-group">
  								<label class="control-label">Email<span class="required">*</span></label>
  								<div class="controls">
  									<input name="email" type="text" class="span6 m-wrap" value="<?php echo $liste["mail"];?>" />
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Num&eacutero T&eacutel&eacutephone<span class="required">*</span></label>
  								<div class="controls">
  									<input name="telephone" type="text" class="span6 m-wrap" value="<?php echo $liste["telephone"];?>" />
									<input type="hidden" name="numero" data-required="1" class="span6 m-wrap" value="<?php echo $liste["id"];?>" />
								</div>
  							</div>
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Valider</button>
  								<button type="button" class="btn">Annuler</button>
  							</div>
						</fieldset>
					</form>




					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
  


<?php
	}
	else{
	?>
		
					<!-- BEGIN FORM-->
					<form action="#" id="form_sample_1" class="form-horizontal" method="GET">
						<fieldset>
 							<div class="control-group">
  								<label class="control-label">numero</label>
  								<div class="controls">
  								<input type="text" name="numero" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Valider</button>
  								<button type="button" class="btn">Annuler</button>
  							</div>
						</fieldset>
					</form>
<?php
	}
	include("footer.php");
?>

