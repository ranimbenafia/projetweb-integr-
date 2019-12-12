<?php
class event 
{
  private $ID_Event;
  private $NomEvent;
  private $DebEvent;
  private $FinEvent;
  private $PourProd;
  private $PrixApres;
  private $Image;

}
function _construct ($ID_Event,$NomEvent,$DebEvent,$FinEvent,$PourProd,$PrixApres,$Image)
{
    $this->ID_Event= $ID_Event;
    $this->NomEvent= $NomEvent;
    $this->DebEvent= $DebEvent;
    $this->FinEvent= $FinEvent;
    $this->PourProd= $PourProd;
    $this->PrixApres= $PrixApres;
    $this->Image= $Image;
}
function getID_Event()
{
    return $this->ID_Event;
}
function setID_Event($id_fete)
{
    $this->ID_Event=$ID_Event;
}
function getNomEvent()
{
    return $this->NomEvent;
}
function setNomEvent($NomEvent)
{
    $this->NomEvent=$NomEvent;
}
function getDebEvent()
{
    return $this->DebEvent;
}
function setDebEvent($DebEvent)
{
    $this->DebEvent=$DebEvent;
}
function getFinEvent ()
{
    return $this->FinEvent;
}
function setFinEvent ($FinEvent)
{
   $this->FinEvent=$FinEvent;
}
function getPourProd ()
{
    return $this->PourProd;
}
function setPourProd($PourProd)
{
    $this->PourProd=$PourProd;
}
function getPrixApres ()
{
    return $this->PrixApres;
}
function setPrixApres ($PrixApres)
{
    $this->PrixApres=$PrixApres;
}


function getImage ()
{
    return $this->Image;
}
function setPrixApres ($Image)
{
    $this->Image=$Image;
}
?>
