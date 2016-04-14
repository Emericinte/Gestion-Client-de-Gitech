<?php
	include('header.php');
	include('../controller/connexion.php');
	include('../controller/utils.php');
	if (!empty($POST['login']))
	{
		if (Utilisateur::checkUser($base, $POST['login'], $POST['password'])){
			header("index.php");
		}
		else{
		?>
		<center>
		<div class="alert alert-error alert-block">
			<a class="close" href="#" data-dismiss="alert">*</a>
			<h4 class="alert-heading">Erreur</h4>
			Veuillez vérifier le login ou le mot de passe
		</div>
		</center>
<?php	
		}
	}
?>
	 <div id="login">
	 <div class="container">
      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Gitech Admin</h2>
        <input type="text" class="input-block-level" placeholder="votre login" name="login" required>
        <input type="password" class="input-block-level" placeholder="votre mot de passe" name="password" required>
        <center><button class="btn btn-large btn-primary" type="submit">connexion</button></center>
      </form>
    </div> 
	</div> 
<?php
	include('footer.php');
?>
