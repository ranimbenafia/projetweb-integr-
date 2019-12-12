<HTML>
<head>
 <!-- Required meta tags-->
 <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="au theme template">
   <meta name="author" content="Hau Nguyen">
   <meta name="keywords" content="au theme template">

   <!-- Title Page-->
   <title>Forms</title>

   <!-- Fontfaces CSS-->
   <link href="css/font-face.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

   <!-- Bootstrap CSS-->
   <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

   <!-- Vendor CSS-->
   <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
   <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
   <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
   <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
   <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
   <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
   <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

   <!-- Main CSS-->
   <link href="css/theme.css" rel="stylesheet" media="all">
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['code'])){
	$produit1C=new ProduitC();
    $result=$produit1C->recupererProduit($_GET['code']);
	foreach($result as $row){
		$code=$row['pho'];
		$code=$row['code'];
		$designation=$row['designation'];
		$ttva=$row['ttva'];
		$qte=$row['qte'];
		$prix_unit=$row['prix_unit'];
		$remis=$row['remis'];
		$couleur=$row['couleur'];

?>
	<form method="POST">

<div class="col-lg-6">
	<div class="card">
		<div class="card-header">
			<strong>modifier Produit</strong>
		</div>
		<div class="card-body card-block">
		<div class="form-group">
                    <label for="pho" class=" form-control-label">PHOTO</label>
                    <input type="file" name="pho"  class="form-control">
                </div>
			<div class="form-group">
				<label for="code" class=" form-control-label">CODE</label>
				<input type="number" name="code" value="<?PHP echo $code ?>"  placeholder="Enter your code name " class="form-control">
			</div>
			<div class="form-group">
				<label for="designation" class=" form-control-label">DESIGNATION</label>
				<input type="text" name="designation" value="<?PHP echo $designation ?>" placeholder="PUM365277-05 ST RUNNER V2 FULL/CHAU" class="form-control">
			</div>
			<div class="form-group">
				<label for="ttva" class=" form-control-label">TVA</label>
				<input type="number" step="any" name="ttva" value="<?PHP echo $ttva ?>" placeholder="19.00 " class="form-control">
			</div>
			<div class="row form-group">
				<div class="col-8">
					<div class="form-group">
						<label for="qte" class=" form-control-label">QUANTITE </label>
						<input type="number" name="qte" value="<?PHP echo $qte ?>"  placeholder="15" class="form-control">
					</div>
				</div>
				<div class="col-8">
					<div class="form-group">
						<label for="prix_unit" class=" form-control-label">PRIX UNITAIRE</label>
						<input type="number" step="any" name="prix_unit" value="<?PHP echo $prix_unit ?>" placeholder="44.520" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="remis" class=" form-control-label">REMISE</label>
				<input type="number" step="any" name="remis" value="<?PHP echo $remis ?>" placeholder="20.00" class="form-control">
			</div>
			<div class="form-group">
				<label for="couleur" class=" form-control-label">COULEUR</label>
				<input type="text"  name="couleur" value="<?PHP echo $couleur ?>" placeholder="RED" class="form-control">
			</div>
		</div>
	</div>
	<div class="table-data__tool-right">
                <button  type="submit" name="modifier" value="modifier" class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>modifier</button>
				</div>				
		</div>
	</div>
</div>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new Produits($_POST['pho'],$_POST['code'],$_POST['designation'],$_POST['ttva'],$_POST['qte'],$_POST['prix_unit'],$_POST['remis'],$_POST['couleur']);
	$produit1C->modifierProduit($produit);
	header('Location:afficher.php');
}
?>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>
</body>
</HTMl>
