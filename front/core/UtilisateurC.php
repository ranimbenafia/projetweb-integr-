<?php
include "../config.php";
include "../entities/client.php";
	class UtilisateurC
	{
		public function verifierLogin($login,$password)
		{
			$db = config::getConnexion();
			$sql = 'SELECT COUNT(*) AS count,login,password,role FROM utilisateur WHERE login = :login AND password = :password LIMIT 1';
			$req = $db->prepare($sql);
			$req->bindValue(':login',$login);
			$req->bindValue(':password',$password);
			$req->execute();
			$result = $req->fetch(PDO::FETCH_OBJ);
			return $result;
		}

		public function verifierLoginFront($login,$password)
		{
			$db = config::getConnexion();
			$sql = 'SELECT COUNT(*) AS count,login,password,role,etat,idUtilisateur,nom,prenom,email FROM utilisateur WHERE login = :login AND password = :password LIMIT 1';
			$req = $db->prepare($sql);
			$req->bindValue(':login',$login);
			$req->bindValue(':password',$password);
			$req->execute();
			$result = $req->fetch(PDO::FETCH_OBJ);
			return $result;
		}



	}

		


 ?>