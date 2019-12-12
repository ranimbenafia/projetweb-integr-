<?PHP
include "../core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["code"])){
	$produitC->supprimerProduit($_POST["code"]);
	header('Location:afficher.php');
}

?>
