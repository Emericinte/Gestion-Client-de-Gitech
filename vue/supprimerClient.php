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
							<a href="index.php">gestion Client</a> <span class="divider">/</span>	
						</li>
						<li class="active">Suppression</li>
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
					<div class="muted pull-left">Suppression du client</div>
				</div>


                <div class="block-content collapse in">
                <div class="span12">	
					<!-- BEGIN FORM-->
					<form action="index.php" id="form_sample_1" class="form-horizontal" method="post">
						<fieldset>
 							<div class="control-group">
  								<label class="control-label">numero</label>
  								<div class="controls">
  								<input type="text" name="id" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="form-actions">
  								<button type="submit" class="btn btn-primary">Valider</button>
  								<button type="button" class="btn">Annuler</button>
  							</div>
						</fieldset>
					</form>
<?php
	
	include("footer.php");
?>


