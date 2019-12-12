<?PHP
class event{

	private $ID_Event;
	private $NomEvent;
	private $DebEvent;
	private $FinEvent;
	private $PourProd;
    private $PrixApres;
    private $Image_eve;

	function __construct($ID_Event,$NomEvent,$DebEvent,$FinEvent,$PourProd,$PrixApres,$Image_eve){
		$this->ID_Event=$ID_Event;
        $this->NomEvent=$NomEvent;
        $this->DebEvent=$DebEvent;
        $this->FinEvent=$FinEvent;
        $this->PourProd=$PourProd;
        $this->PrixApres=$PrixApres;
        $this->Image_eve=$Image_eve;
        
		
	}
	
	function getID_Event(){
		return $this->ID_Event;
	}
    function getNomEvent(){
		return $this->NomEvent;
	}
    function getDebEvent(){
		return $this->DebEvent;
	}
    function getFinEvent(){
		return $this->FinEvent;
	}
    function getPourProd(){
		return $this->PourProd;
	}
    function getPrixApres(){
		return $this->PrixApres;
	}
    function getImage_eve(){
		return $this->Image_eve;
	}


	function setID_Event($ID_Event){
		$this->ID_Event=$ID_Event;
	}

	function setNomEvent($NomEvent){
		$this->NomEvent=$NomEvent;
	}

	function setDebEvent($DebEvent){
		$this->DebEvent=$DebEvent;
	}
    function setFinEvent($FinEvent){
		$this->FinEvent=$FinEvent;
	}
    function setPourProd($PourProd){
		$this->PourProd=$PourProd;
	}
    function setPrixApres($PrixApres){
		$this->PrixApres=$PrixApres;
	}
    function setImage_eve($Image_eve){
		$this->Image_eve=$Image_eve;
	}

	
}

?>