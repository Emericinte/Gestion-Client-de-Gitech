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
							<a href="index.php">home</a> <span class="divider">/</span>	
						</li>
						<li>
							<a href="index.php">gestion Utilisateurs</a> <span class="divider">/</span>	
						</li>
						<li class="active">Ajout</li>
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
                                <div class="muted pull-left">Nouveau Utilisateur</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="AjoutUser.php" method="post" id="form_sample_1" class="form-horizontal">
						<fieldset>
							<div class="alert alert-error hide">
								<button class="close" data-dismiss="alert"></button>
								You have some form errors. Please check below.
							</div>
							<div class="alert alert-success hide">
								<button class="close" data-dismiss="alert"></button>
								Your form validation is successful!
							</div>
  							<div class="control-group">
  								<label class="control-label">Nom:<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="nom" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
							<div class="control-group">
  								<label class="control-label">Prenom:<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="prenom" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>

  							<div class="control-group">
  								<label class="control-label">Email<span class="required">*</span></label>
  								<div class="controls">
  									<input name="email" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Num&eacutero T&eacutel&eacutephone<span class="required">*</span></label>
  								<div class="controls">
  									<input name="telephone" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Adresse<span class="required">*</span></label>
  								<div class="controls">
  									<input name="adresse" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Validate</button>
  								<button type="button" class="btn">Cancel</button>
  							</div>
						</fieldset>
					</form>
					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
                     <!-- /validation -->

<?php
	include("footer.php");
	if(isset($_POST["nom"])){
	$nom=$_POST["nom"];$prenom=$_POST["prenom"];$email=$_POST["email"];$telephone=$_POST["telephone"];$adresse=$_POST["adresse"];
	$user = new Utilisateur($base);
	$user->create($nom,$prenom,$email,$telephone);
	}

?>

