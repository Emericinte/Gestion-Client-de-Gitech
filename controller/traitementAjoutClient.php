<?php
	include("connexion.php");
	include("utils.php");
	
	$client = new Client($base);
	if(isset($_POST) and !empty($_POST['nom'])){
		$client->createClient($_POST['nom'], $_POST['adresse'], $_POST['email'], $_POST['telephone'], $_POST['contact'], $_POST['fonction'], $_POST['status'], $_POST['detail']);
		header("Location: ../vue/index.php");
	}
?>
