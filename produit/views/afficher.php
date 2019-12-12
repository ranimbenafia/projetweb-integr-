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
   <!-- MENU SIDEBAR-->
   <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/kawargi.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li class="active">
                            <a href="afficher.php">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                </nav>
            </div>
        </aside>
  
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        <form method="POST">     
                                   <input class="au-input au-input--xl" type="number" name="TROUV"  placeholder="saisir le code "> <button class="au-btn--submit" name="touv" value="touv" type="submit"> <i class="zmdi zmdi-search"></i>rech</button> 
              
                                   <input class="au-input au-input--xl" type="number" name="TROUV1" step="any" placeholder="saisir le prix "> <button class="au-btn--submit" name="touv1" value="touv1" type="submit"><i class="zmdi zmdi-search"></i>rech</button>

                                   </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">0</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 0  messages</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="" alt="" />
                                                </div>
                                                <div class="content">
                                                    <h6></h6>
                                                    <p></p>
                                                    <span class="time"></span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="" alt="" />
                                                </div>
                                                <div class="content">
                                                    <h6></h6>
                                                    <p></p>
                                                    <span class="time"></span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">0</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 0 Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="" alt="" />
                                                </div>
                                                <div class="content">
                                                    <p></p>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="" alt="" />
                                                </div>
                                                <div class="content">
                                                    <p></p>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="" alt="" />
                                                </div>
                                                <div class="content">
                                                    <p></p>
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">0</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 0 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date"></span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p></p>
                                                    <span class="date"></span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date"></span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="W.B.H" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">W.B.H</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="W.B.H" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">W.B.H</a>
                                                    </h5>
                                                    <span class="email">mohamed.hagui@esprit.tn</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->
    
<h3 class="title-5 m-b-35"> TABLE DE DONNEES </h3>
                                
                                <div class="table-responsive table-responsive-data2">
                                  <br>
                                  <br>
                               
                                   <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>
                                            <a href="ajoutProduits.php"> add item</a>
                                            </button>
                                           
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>
                                            <a href="generate_pdf.php"> imprimer </a>
                                            </button>
                                    
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