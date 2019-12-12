<?PHP
class Produits{
	private $pho;
	private $code;
	private $designation;
	private $ttva;
	private $qte;
	private $prix_unit;
	private $remis;
	private $couleur; 
	private $idc; 

	function __construct($pho,$code,$designation,$ttva,$qte,$prix_unit,$remis,$couleur,$idc){
		$this->pho=$pho;
		$this->code=$code;
		$this->designation=$designation;
		$this->ttva=$ttva;
		$this->qte=$qte;
		$this->prix_unit=$prix_unit;
		$this->remis=$remis;
		$this->couleur=$couleur;
		$this->idc=$idc;
	}

	function getpho(){
		return $this->pho;
	}
	function getcode(){
		return $this->code;
	}
	function getdesignation(){
		return $this->designation;
	}
	function getttva(){
		return $this->ttva;
	}
	function getqte(){
		return $this->qte;
	}
	function getremis(){
		return $this->remis;
	}
	function getprix_unit(){
		return $this->prix_unit;
	}
	function getcouleur(){
		return $this->couleur;
	}
	function getidc(){
		return $this->idc;
	}
	
	function setpho($pho){
		$this->pho=$pho;
   }
	function setcode($code){
		 $this->code=$code;
	}
	function setdesignation($designation){
		 $this->designation=$designation;
	}
	function setttva($ttva){
		 $this->ttva=$ttva;
	}
	function setqte($qte){
		 $this->qte=$qte;
	}
	function setremis($remis){
		 $this->remis=$remis;
	}
	function setprix_unit($prix_unit){
		$this->prix_unit=$prix_unit;
   }
   function setcouleur($couleur){
	$this->couleur=$couleur;
}

function setidc($idc){
	$this->idc=$idc;
}

}

?>
