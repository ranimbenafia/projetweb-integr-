<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
/*foreach($_POST as $key=>$value)
{

    echo $key.":" .$value. "<br>" ; 
}
*/
if (isset($_POST['code'])){
$produit1=new ProduitC();
$produit=new Produits($_POST['pho'],$_POST['code'],$_POST['designation'],$_POST['ttva'],$_POST['qte'],$_POST['prix_unit'],$_POST['remis'],$_POST['couleur'],$_POST['idc']);
$produit1->ajouterProduit($produit);
header('location:afficher.php');
}

?>