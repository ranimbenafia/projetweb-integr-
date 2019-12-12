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
include "../entities/hotel.php";
include "../core/hotelC.php";
if (isset($_GET['ID_Event'])){
	$event1C=new eventC();
    $result=$event1C->recupererevent($_GET['ID_Event']);
	foreach($result as $row){
		$ID_Event=$row['ID_Event'];
		$NomEvent=$row['NomEvent'];
		$DebEvent=$row['DebEvent'];
		$FinEvent=$row['FinEvent'];
		$PourProd=$row['PourProd'];
		$PrixApres=$row['PrixApres'];
		$Image_eve=$row['Image_eve'];
?>
	<form method="POST">

<div class="col-lg-6">
	<div class="card">
		<div class="card-header">
			<strong>modifier Produit</strong>
		</div>
		<div class="card-body card-block">
			<div class="form-group">
				<label for="ID_Event" class=" form-control-label">ID</label>
				<input type="number" name="ID_Event" value="<?PHP echo $ID_Event ?>"  placeholder="Enter your ID " class="form-control">
			</div>
			<div class="form-group">
				<label for="designation" class=" form-control-label">Event name</label>
				<input type="text" name="NomEvent" value="<?PHP echo $NomEvent ?>" placeholder="enter Event name" class="form-control">
			</div>
			<div class="form-group">
				<label for="ttva" class=" form-control-label">date of debut</label>
				<input type="date" step="any" name="DebEvent" value="<?PHP echo $DebEvent ?>" placeholder="19.00 " class="form-control">
			</div>
			<div class="row form-group">
				<div class="col-8">
					<div class="form-group">
						<label for="qte" class=" form-control-label">date of end</label>
						<input type="date" name="FinEvent" value="<?PHP echo $FinEvent ?>"  placeholder="15" class="form-control">
					</div>
				</div>
				<div class="col-8">
					<div class="form-group">
						<label for="prix_unit" class=" form-control-label">pourcentage de remise</label>
						<input type="number" step="any" name="PourProd" value="<?PHP echo $PourProd ?>" placeholder="pourcentage de remise" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="remis" class=" form-control-label">prix apres</label>
				<input type="number" step="any" name="PrixApres" value="<?PHP echo $PrixApres ?>" placeholder="prix apres" class="form-control">
			</div>
			<div class="form-group">
				<label for="remis" class=" form-control-label">image</label>
				<input type="text" step="any" name="Image_eve" value="<?PHP echo $Image_eve ?>" placeholder="image" class="form-control">
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
	$event=new event($_POST['ID_Event'],$_POST['NomEvent'],$_POST['DebEvent'],$_POST['FinEvent'],$_POST['PourProd'],$_POST['PrixApres'],$_POST['Image_eve']);
	$event1C->modifierevent($event);
	header('Location:please work.php');
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
