<?php

include "../config.php"

class EventC
{
    function afficherEvent ($event){
    echo "nom du evenment".$event->getNomEvent()."<br>";
    echo "debut de la evenment".$event->getDebEvent()."<br>";
    echo "Fin de la evenment".$event->getFinEvent()."<br>";
    echo "pourcentage de la remise".$event->getPourProd()."<br>";
    echo "prix apres la remise".$event->getPrixApres()."<br>";
    echo "image de la evenemnt".$event->getImage()."<br>";
}


function ajouterEmploye($event){
    $sql="insert into calnder (ID_Event,NomEvent,DebEvent,FinEvent,PourProd,PrixApres,Image) values 
(:ID_Event,:NomEvent,:DebEvent,:FinEvent,:PourProd,:PrixApres,:Image)";
    $db = config::getConnexion();
    try{
    $req=$db->prepare($sql);
    $ID_event=$event->getID_Event();
    $NomEvent=$event->getNomEvent();
    $DebEvent=$event->getDebEvent();
    $FinEvent=$event->getFinEvent();
    $PourProd=$event->getPourProd();
    $PrixApres=$event->getPrixApres();
    $Image=$event->getImage();
    //lier variable => paramètre
    $req->bindvalue(':ID_event',$ID_event)
    $req->bindValue(':NomEvent',$NomEvent);
    $req->bindValue(':DebEvent',$DebEvent);
    $req->bindValue(':FinEvent',$FinEvent);
    $req->bindValue(':PourProd',$PourProd);
    $req->bindValue(':PrixApres',$PrixApres);
    $req->bindValue(':Image',$Image);

    if($req->execute())
    {
        return 1;
    }
    else
    {
    return 0;
    }


    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
    
}


function supprimerEvent($ID_event){
    $sql="DELETE FROM event where ID_event= :ID_event";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':ID_event',$ID_event);
    try{
        $req->execute();
       // header('Location: index.php');
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}



function modifierEvent($event,$ID_event){
    $sql="UPDATE event SET ID_event=:ID_event, NomEvent=:nom, DebEvent=:Deb, FinEvent=:Fin, PourProd=:Pour, PrixApres=:Apres WHERE ID_event=:ID_event";
    $db = config::getConnexion();
try{

    $req=$db->prepare($sql);
    $ID_event=$event->getID();
    $NomEvent=$event->getNom();
    $DebEvent=$event->getDeb();
    $FinEvent=$event->getFin();
    $PourProd=$event->getPour();
    $PrixApres=$event->getApres();
    $datas = array(':ID_event'=>$ID_event, ':nom'=>$NomEvent,':Deb'=>$DebEvent,':Fin'=>$FinEvent, ':Pour'=>$PourProd, ':Apres'=>$PrixApres);
    //lier variable => paramètre
    $req->bindValue(':ID_event',$ID_event);
    $req->bindValue(':nom',$NomEvent);
    $req->bindValue(':Deb',$DebEvent);
    $req->bindValue(':Fin',$FinEvent);
    $req->bindValue(':Pour',$PourProd);
    $req->bindValue(':Apres',$PrixApres);
    
    
    
        $s=$req->execute();
        
       // header('Location: index.php');
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
echo " Les datas : " ;
print_r($datas);
    }
    
}
}




?>