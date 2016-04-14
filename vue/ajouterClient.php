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
							<a href="index.php">gestion Clients</a> <span class="divider">/</span>	
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
                                <div class="muted pull-left">Nouveau Client </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="../controller/traitementAjoutClient.php" id="form_sample_1" class="form-horizontal" method="POST">
						<fieldset>
  							<div class="control-group">
  								<label class="control-label">Nom de l'établissement<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="nom" data-required="1" class="span6 m-wrap" required />
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Adresse<span class="required">*</span></label>
  								<div class="controls">
  									<input name="adresse" type="text" class="span6 m-wrap" required />
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Email<span class="required">*</span></label>
  								<div class="controls">
  									<input name="email" type="text" class="span6 m-wrap" required />
  									<span class="help-block">exemple@gitech.sn</span>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Téléphone<span class="required">*</span></label>
  								<div class="controls">
  									<input name="telephone" type="text" class="span6 m-wrap" required />
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Nom du contact </span></label>
  								<div class="controls">
  									<input name="contact" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Fonction du Contact </span></label>
  								<div class="controls">
  									<input name="fonction" type="text" class="span6 m-wrap" />
  								</div>
  							</div>
  							
  							<div class="control-group">
  								<label class="control-label">Status<span class="required">*</span></label>
  								<div class="controls">
  									<select class="span6 m-wrap" name="status" required >
  										<option value="cible">Cible</option>
  										<option value="reticent">reticent</option>
  										<option value="interesse">interesse</option>
  										<option value="potentiel">potentiel</option>
  										<option value="acquis">acquis</option>
  									</select>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">details</label>
  								<div class="controls">
  								<textarea class="span6 m-wrap" rows=10 name="detail"></textarea>
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
                     <!-- /validation -->

<?php
	include("footer.php");
?>

