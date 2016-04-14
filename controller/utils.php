<?php


 class Utilisateur {
		
		private $base;
		private $nom;
		private $prenom;
		private $mail;
		private $adresse;
		private $mdp;
		private $telephone;
		private $login;
		
		function __construct($base){
			$this->base=$base;
		}
		
		function create($nom, $prenom, $mail, $telephone){
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->mail=$mail;
			$this->telephone=$telephone;
			//$this->adresse=$adresse;
			$this->createUser();
		}
		
		private function createUser(){
			$creation=$this->base->prepare("insert into utilisateur (nom, prenom, pseudo, password, telephone, mail) values(:nom, :prenom, :pseudo, :password, :telephone, :mail)");
			$creation->execute(array(
				':nom' => $this->nom,
				':prenom' => $this->prenom,
				':pseudo' => $this->genererPseudo(),
				':password' =>  crypt($this->genererMDP(), "passer"),
				':telephone' => $this->telephone,
				':mail' => $this->mail
			));
		}
		
		private function genererPseudo(){
			return $this->nom[1].mt_rand(1, 1000).$this->prenom[1];
		}
		
		private function genererMDP(){
			return $this->prenom[1].mt_rand(1, 9999).$this->nom[1];
		}
		
		public static function checkLogin($base, $login){
			$check=$base->prepare("select count(*) from utilisateur where pseudo=:login");
			$check->execute(array(':login' => $login));
			$checkLogin = $check->fetch();
			return $checkLogin[0] == 1;
		}
		
		public static function checkUser($base, $login, $pass){
			if(checkLogin($base, $login)){
				$check=$base->prepare("select password from utilisateur where pseudo=:login");
				$check->execute(array(
					':login' => $login
				));
				$checkpass = $check->fetch()[0];
				return $checkpass == crypt($pass, "passer");
			}else return false;
		}
		
		function getPassword(){
			return $this->mdp;
		}
		
		function getLogin(){
			return $this->login;
		}
		
		function getInfosUtilisateur($id){
			$check=$this->base->prepare("select * from utilisateur where id=:id");
				$check->execute(array(
					':id' => $id
				));
				return $check;
		}
		
		public static function getAllUtilisateur($base){
			$check=$base->query("select * from utilisateur");
			return	$check;
		}

		function setLogin($login){
			$this->login = $login;
		}
		
		function setPasswotd($pass){
			$this->mdp = $pass;
		}
		
		function modifierUtilisateur($id, $nom, $prenom, $telephone, $mail){
			$req=$this->base->prepare("UPDATE utilisateur SET nom=:n2, prenom=:n3, telephone=:n4, mail=:n6 where id=:n1");
			$req->execute(array(
			 ':n1'=>$id,
			 ':n2'=>$nom,
			 ':n3'=>$prenom,
			 ':n4'=>$telephone,
			 ':n6'=>$mail
			 ));
		}
		function modifierLogin($id, $login, $mdp){
			$req=$this->base->prepare("UPDATE utilisateur SET pseudo=:n2, mdp=:n3 where id=:n1");
			$req->execute(array(
			 ':n1'=>$id,
			 ':n2'=>$login,
			 ':n3'=>crypt($mdp, "passer")
			 ));
		}
		
		function SupprimerUtilisateur($id){
			$req=$this->base->prepare("delete from utilisateur where id=:n1");
			$req->execute(array(':n1'=>$id));
		}
		
	}




	class Client {
		private $base;
		private $etablissement;
		private $adresse; 
		private $mail; 
		private $telephone; 
		private $nomContact;
		private $fonctionContact; 
		private $status;
		private $detail;
		
		public function __construct($base){
			$this->base=$base;
		}
		public function createClient($etablissement, $adresse, $mail, $telephone, $nomContact, $fonctionContact, $status, $detail){
			$creation=$this->base->prepare("insert into client (etablissement, adresse, mail, telephone, nomContact, fonctionContact, status, detail) values(:n1, :n2, :n3, :n4, :n5, :n6, :n7, :n8)");
			$creation->execute(array(
				':n1' => $etablissement,
				':n2' => $adresse,
				':n3' => $mail,
				':n4' => $telephone,
				':n5' => $nomContact,
				':n6' => $fonctionContact, 
				':n7' => $status, 
				':n8' => $detail 
			));
		}
		public function getInfosClient($id){
			$check=$this->base->prepare("select * from client where numero=:id");
				$check->execute(array(':id' => $id));
				return $check;
		}
		public function getAllClient(){
			$check=$this->base->query("select * from client");
			return	$check;
		}
		
		public function editClient($id, $etablissement, $adresse, $mail, $telephone, $nomContact, $fonctionContact, $status, $detail){
			$req=$this->base->prepare("UPDATE client SET 
				etablissement=:n1, 
				adresse=:n2, 
				mail=:n3, 
				telephone=:n4, 
				nomContact=:n5, 
				fonctionContact=:n6,  
				status=:n7, 
				detail=:n8 
				where numero=:n0");
			$req->execute(array(
			':n0' => $id,
			':n1' => $etablissement,
			':n2' => $adresse,
			':n3' => $mail,
			':n4' => $telephone,
			':n5' => $nomContact,
			':n6' => $fonctionContact, 
			':n7' => $status, 
			':n8' => $detail 
			 ));
		}
		
		function SupprimerClient($id){
			$req=$this->base->prepare("delete from client where numero=:n1");
			$req->execute(array(':n1'=>$id));
		}
	}
?>
