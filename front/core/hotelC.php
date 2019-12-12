<?PHP
include "../config.php";
require_once("../entities/hotel.php");
class eventC {
    
function afficherevent ($event){
		echo "Id hotel: ".$event->getID_Event()."<br>";
		echo "Nom du hotel: ".$event->getNomEvent()."<br>";
		echo "nombre d'etoil: ".$event->getDebEvent()."<br>";
		echo "nombre de chambres: ".$event->getFinEvent()."<br>";
		echo "photo du hotel: ".$event->getPourProd()."<br>";
        echo "description du hotel: ".$event->getPrixApres()."<br>";
        echo "adresse du hotel: ".$event->getImage_eve()."<br>";
        
	}

	function ajouterevent($event){
		$sql="insert into event (ID_Event,NomEvent,DebEvent,FinEvent,PourProd,PrixApres,Image_eve) values 
(:ID_Event,:NomEvent,:DebEvent,:FinEvent,:PourProd,:PrixApres,:Image_eve)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $ID_Event=$event->getID_Event();
        $NomEvent=$event->getNomEvent();
        $DebEvent=$event->getDebEvent();
        $FinEvent=$event->getFinEvent();
        $PourProd=$event->getPourProd();
        $PrixApres=$event->getPrixApres();
        $Image_eve=$event->getImage_eve();
        //lier variable => paramètre
        $req->bindValue(':ID_Event',$ID_Event);
		$req->bindValue(':NomEvent',$NomEvent);
		$req->bindValue(':DebEvent',$DebEvent);
		$req->bindValue(':FinEvent',$FinEvent);
		$req->bindValue(':PourProd',$PourProd);
        $req->bindValue(':PrixApres',$PrixApres);
        $req->bindValue(':Image_eve',$Image_eve);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherevents(){
		$sql="SElECT * From event";
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
		
		$sql="SElECT * From event ORDER BY(DebEvent) DESC";
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
		
		$sql="SElECT * From event ORDER BY(DebEvent) ASC";
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
		
		$sql="SElECT * From event ORDER BY(PourProd) DESC";
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
		
		$sql="SElECT * From event ORDER BY(PourProd) ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	function supprimerevent($ID_Event){
		$sql="DELETE FROM event where ID_Event= :ID_Event";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID_Event',$ID_Event);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierevent($event){
		$sql="UPDATE event SET ID_Event=:ID_Event, NomEvent=:NomEvent, DebEvent=:DebEvent, FinEvent=:FinEvent, PourProd=:PourProd, PrixApres=:PrixApres,Image_eve=:Image_eve WHERE ID_Event=:ID_Event";
		$db = config::getConnexion();
try{

		$req=$db->prepare($sql);
        $ID_Event=$event->getID_Event();
        $NomEvent=$event->getNomEvent();
        $DebEvent=$event->getDebEvent();
        $FinEvent=$event->getFinEvent();
        $PourProd=$event->getPourProd();
        $PrixApres=$event->getPrixApres();
        $Image_eve=$event->getImage_eve();
    
		$datas = array(':ID_Event'=>$ID_Event, ':NomEvent'=>$NomEvent,':DebEvent'=>$DebEvent,':FinEvent'=>$FinEvent,':PourProd'=>$PourProd,':PrixApres'=>$PrixApres,':Image_eve'=>$Image_eve);
		//lier variable => paramètre
		$req->bindValue(':ID_Event',$ID_Event);
		$req->bindValue(':NomEvent',$NomEvent);
		$req->bindValue(':DebEvent',$DebEvent);
		$req->bindValue(':FinEvent',$FinEvent);
		$req->bindValue(':PourProd',$PourProd);
        $req->bindValue(':PrixApres',$PrixApres);
        $req->bindValue(':Image_eve',$Image_eve);
        
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererevent($ID_Event){
		$sql="SELECT * from event where ID_Event=$ID_Event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherListeC($ID_Event){
		$sql="SELECT * from event where ID_Event like '$ID_Event' " ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
   
	function rechercherPrix($DebEvent){
		$sql="SELECT * FROM event WHERE DebEvent like '$DebEvent' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}


	function rechercherNom($NomEvent){
		$sql="SELECT * FROM event WHERE NomEvent like '$NomEvent' ";
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