<?php 
include '../core/catC.php'; 
$categorieC= new categorieC(); 
$result = $categorieC->listeCategories(); 
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
 <!--   
<form method="POST" action="ajoutProduit.php">
<table>
<caption>Ajouter Produit</caption>
<tr>
<td>Code Produit</td>
<td><input type="number" name="code"></td>
</tr>
<tr>
<td>Designation Produit</td>
<td><input type="text" name="designation"></td>
</tr>
<tr>
<td>Tva du Produit</td>
<td><input type="number" name="ttva"></td>
</tr>
<tr>
<td>Quantité du Produit</td>
<td><input type="number" name="qte"></td>
</tr>
<tr>
<td> Prix Unitaire du Produit</td>
<td><input type="number" name="prix_unit"></td>
</tr>
<tr>
<td>Remise du Produit</td>
<td><input type="number" name="remis"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>
-->

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
                            <a href="category.php">
                                <i class="fas fa-table"></i>Table de categories</a>
                        </li>
                        <li>
                            <a href="users.php">
                                <i class="far fa-check-square"></i>Table d'utilisateurs </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        
                        <li >
                            <a href="ajoutProduits.php">
                                <i class="fas fa-copy"></i>table de produits</a>
                            
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
                            <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
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
<br>
<br>
<br>
<br>

<form method="POST" action="ajoutProduit.php">

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>Ajout Produit</strong>
            </div>
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="pho" class=" form-control-label">photo</label>
                    <input type="file" name="pho"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="code" class=" form-control-label">CODE</label>
                    <input type="number" name="code" placeholder="Enter your code name " class="form-control">
                </div>
                <div class="form-group">
                    <label for="designation" class=" form-control-label">DESIGNATION</label>
                    <input type="text" name="designation" placeholder="PUM365277-05 ST RUNNER V2 FULL/CHAU" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ttva" class=" form-control-label">TVA</label>
                    <input type="number" step="any" name="ttva" placeholder="19.00 " class="form-control">
                </div>
                <div class="row form-group">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="qte" class=" form-control-label">QUANTITE </label>
                            <input type="number" name="qte" placeholder="15" class="form-control">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="prix_unit" class=" form-control-label">PRIX UNITAIRE</label>
                            <input type="number" step="any" name="prix_unit" placeholder="44.520" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remis" class=" form-control-label">REMISE</label>
                    <input type="number" step="any" name="remis" placeholder="20.00" class="form-control">
                </div>

                <div class="form-group">
                    <label for="couleur" class=" form-control-label">COULEUR</label>
                    <input type="text"  name="couleur" placeholder="bleu" class="form-control">
                </div>
        
                <div class="form-group">
                    <label for="idc" class=" form-control-label">CATEGORIES</label>
                    <select name="idc" >
                        
                            <?PHP  foreach ($result as $row ) { ?>
                       <option value="<?PHP echo $row['idProduitsCategorie'];?>"> <?php echo $row['nom']; ?></option>
                         <?php } ?>                    

                
                </select>
                </div>
        
        
        
            </div>
        </div>

        


        <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small" type="submit" name="ajouter" value="ajouter">
                    <i class="zmdi zmdi-plus"></i>ajouter </button>
                
                </div>
            </div>
        </div>
    </div>

</form>
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
