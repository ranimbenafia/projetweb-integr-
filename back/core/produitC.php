<?PHP
include "../config.php";
require_once("../entities/produit.php");
class ProduitC {
function afficherProduit1 ($produits){
	    echo "pho: ".$produits->getpho()."<br>";
	    echo "code: ".$produits->getcode()."<br>";
		echo "designation: ".$produits->getdesignation()."<br>";
		echo "ttva ".$produits->getttva()."<br>";
		echo "qte: ".$produits->getqte()."<br>";
		echo "prix_unit: ".$produits->getprix_unit()."<br>";
		echo "remis: ".$produits->getremis()."<br>";
		echo "couleur: ".$produits->getcouleur()."<br>";
		echo "idc: ".$produits->getidc()."<br>";
	}

	function ajouterProduit($produits){
		$sql="insert into produits (pho,code,designation,ttva,qte,prix_unit,remis,couleur,idc) values (:pho,:code,:designation,:ttva,:qte,:prix_unit,:remis,:couleur:idc)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$pho=$produits->getpho();
		$code=$produits->getcode();
        $designation=$produits->getdesignation();
        $ttva=$produits->getttva();
        $qte=$produits->getqte();
		$prix_unit=$produits->getprix_unit();
		$remis=$produits->getremis();
		$couleur=$produits->getcouleur();
		$idc=$produits->getidc();



		$req->bindValue(':pho',$pho);
		$req->bindValue(':code',$code);
		$req->bindValue(':designation',$designation);
		$req->bindValue(':ttva',$ttva);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':prix_unit',$prix_unit);
		$req->bindValue(':remis',$remis);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':idc',$idc);
        $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}

	function afficherProduit(){
		
		$sql="SElECT * From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function orderprix(){
		
		$sql="SElECT * From produits ORDER BY(prix_unit) DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function orderprix1(){
		
		$sql="SElECT * From produits ORDER BY(prix_unit) ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function orderqte(){
		
		$sql="SElECT * From produits ORDER BY(qte) DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function orderqte1(){
		
		$sql="SElECT * From produits ORDER BY(qte) ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimerProduit($code){
		$sql="DELETE FROM produits where code = :code";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':code',$code);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierProduit($produits){
		$sql="UPDATE produits SET pho=:pho,code=:code,designation=:designation,ttva=:ttva,qte=:qte,prix_unit=:prix_unit,remis=:remis,couleur=:couleur,idc=:idc WHERE code=:code";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
		$req=$db->prepare($sql);
		$pho=$produits->getpho();
        $code=$produits->getcode();
        $designation=$produits->getdesignation();
        $ttva=$produits->getttva();
		$qte=$produits->getqte();
		$prix_unit=$produits->getprix_unit();
		$remis=$produits->getremis();
		$couleur=$produits->getcouleur();
		$idc=$produits->getidc();
		
		$datas = array(':pho'=>$pho,':code'=>$code,':designation'=>$designation,':ttva'=>$ttva,':qte'=>$qte,':prix_unit'=>$prix_unit,':remis'=>$remis,':couleur'=>$couleur,':idc'=>$idc);
		$req->bindValue(':pho',$pho);
		$req->bindValue(':code',$code);
		$req->bindValue(':designation',$designation);
		$req->bindValue(':ttva',$ttva);
		$req->bindValue(':qte',$qte);
		$req->bindValue(':prix_unit',$prix_unit);
		$req->bindValue(':remis',$remis);
		$req->bindValue(':couleur',$couleur);
		$req->bindValue(':idc',$idc);
		


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}
	function recupererProduit($code){
		$sql="SELECT * from produits where code=$code";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function rechercherListeC($code){
		$sql="SELECT * from produits where code like '$code' " ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
   
	function rechercherPrix($prix_unit){
		$sql="SELECT * FROM produits WHERE prix_unit like '$prix_unit' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function rechercherPrixfront($prix_unit){
		$sql="SELECT * FROM produits WHERE prix_unit between  '0.00' and '50.00' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function rechercherPrixfront1($prix_unit){
		$sql="SELECT * FROM produits WHERE prix_unit between  '50.00' and '100.00' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	function rechercherPrixfront2($prix_unit){
		$sql="SELECT * FROM produits WHERE prix_unit between  '100.00' and '150.00' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function rechercherCouleur($couleur){
		$sql="SELECT * FROM produits WHERE couleur LIKE '$couleur'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}

?>
