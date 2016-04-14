 <?php
	include("connexion.php");
	include("utils.php");
	
	$user = new Utilisateur($base);
	if(isset($_POST) and !empty($_POST['nom'])){
		$user->modifierUtilisateur($_POST['numero'],$_POST['nom'],$_POST['prenom'], $_POST['telephone'], $_POST['email']);
		header("Location: ../vue/listeUser.php");
	}
?>

