<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeProduits=$produit1C->afficherProduit();
if(isset($_POST['DSCP']) or isset($_POST['ASCP']) or isset($_POST['DSCQ']) or isset($_POST['ASCQ']) or isset($_POST['touv']) or isset($_POST['touv1']) or isset($_POST['TROUV']) or isset($_POST['TROUV1']) ) 
{ if(isset($_POST['DSCP']))
    {
      $listeProduits=$produit1C->orderprix();
    }
    else if(isset($_POST['ASCP']))
    {
      $listeProduits=$produit1C->orderprix1();
    }
    if(isset($_POST['DSCQ']))
    {
      $listeProduits=$produit1C->orderqte();
    }
    else if(isset($_POST['ASCQ']))
    {
      $listeProduits=$produit1C->orderqte1();
    }
    else if(isset($_POST['touv']))
    {
      if(($_POST['TROUV'] == "") and ($_POST['TROUV1'] == ""))
      {
        $listeProduits=$produit1C->afficherProduit();
      }
      else
      {
        $listeProduits=$produit1C->rechercherListeC($_POST['TROUV']);
      }
    }
    else if(isset($_POST['touv1']))
    {
      if(($_POST['TROUV'] == "") and ($_POST['TROUV1'] == ""))
      {
        $listeProduits=$produit1C->afficherProduit();
      }
      else
      {
        $listeProduits=$produit1C->rechercherPrix($_POST['TROUV1']);
      }
    }
}
else
{
  $listeProduits=$produit1C->afficherProduit();
}
?>
<html>
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
    
<h3 class="title-5 m-b-35"> TABLE DE DONNEES </h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                   <form method="POST">
                                   <input type="number" name="TROUV"  placeholder="saisir le code "> <button name="touv" value="touv">Rech</button> 
                                   <input type="number" name="TROUV1" step="any" placeholder="saisir le prix "> <button name="touv1" value="touv1">Rech</button>

                                   </form>
                                    <a href="ajoutProduits.php"> ajouter</a>
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>photo</th>
                                                <th>code</th>
                                                <th>designation</th>
                                                <th>ttva</th>
                                                <th>qte
                                                <form method="POST">
                                                
                                                <button  type="submit" name="ASCQ" value="ASCQ">↟</button>
                                                <button type="submit" name="DSCQ" value="DSCQ">↡</button>
                                                
                                                </form></th>
                                                <th>prix_unit
                                                <form method="POST">
                                                <button  type="submit" name="ASCP" value="ASCP">↟</button>
                                                <button type="submit" name="DSCP" value="DSCP">↡</button>
                                                </form></th>
                                                <th>remis</th>
                                                <th>couleur</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?PHP
foreach($listeProduits as $row){
	?>
	<tr>
    <td><img src="images/<?PHP echo $row['pho'];?>" ></td>     
    <td><?PHP echo $row['code'];?></td> 
    <td><?PHP echo $row['designation'];?></td>
	<td><?PHP echo $row['ttva'];?></td>
	<td><?PHP echo $row['qte'];?></td>
	<td><?PHP echo $row['prix_unit'];?></td>
    <td><?PHP echo $row['remis'];?></td>
    <td><?PHP echo $row['couleur'];?></td>  
   <td>
    <div class="table-data-feature">
                                                        <a href="modifierProduit.php?code=<?PHP echo $row['code'];?>">
                                                        <button  class="item" data-toggle="tooltip" value="modif" name="modif" data-placement="top"  title="Edit" >
                                                            <i class="zmdi zmdi-edit"></i>
                                                            </a>    
                                                        </button>
                                                        
                                                        <form method="POST" action="supprimerProduit.php">
                                                        <input type="hidden" value="<?PHP echo $row['code'];?>" name="code" >
                                                        <button class="item" data-toggle="tooltip" data-placement="top" name="supprimer" value ="supprimer" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </form>
                                                        
                                                    </div>
                                                    </td>
                                                    <?PHP 
                                                    }
                                                    ?>
                                                </tr>
                                        <tr class="tr-shadow">
                                                
                                                <td class="desc"></td>
                                                <td></td>
                                                <td>
                                                    <span class="status--process"></span>
                                                </td>
                                                <td></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>



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


</html>