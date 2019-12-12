<?PHP
include "../core/hotelC.php";
$event1C=new eventC();
$listeevent=$event1C->afficherevents();



if(isset($_POST['DSCP']) or isset($_POST['ASCP']) or isset($_POST['DSCQ']) or isset($_POST['ASCQ']) or isset($_POST['touv']) or isset($_POST['touv1']) or isset($_POST['touv2']) or isset($_POST['TROUV']) or isset($_POST['TROUV1']) or isset($_POST['TROUV2'])) 
{ if(isset($_POST['DSCP']))
    {
      $listeevent=$event1C->orderprix();
    }
    else if(isset($_POST['ASCP']))
    {
      $listeevent=$event1C->orderprix1();
    }
    if(isset($_POST['DSCQ']))
    {
      $listeevent=$event1C->orderqte();
    }
    else if(isset($_POST['ASCQ']))
    {
      $listeevent=$event1C->orderqte1();
    }
    else if(isset($_POST['touv']))
    {
      if(($_POST['TROUV'] == "") and ($_POST['TROUV1'] == "") and ($_POST['TROUV3'] == ""))
      {
        $listeevent=$event1C->afficherevents();
      }
      else
      {
        $listeevent=$event1C->rechercherListeC($_POST['TROUV']);
      }
    }
    else if(isset($_POST['touv1']))
    {
      if(($_POST['TROUV'] == "") and ($_POST['TROUV1'] == "") and ($_POST['TROUV3'] == ""))
      {
        $listeevent=$event1C->afficherevents();
      }
      else
      {
        $listeevent=$event1C->rechercherPrix($_POST['TROUV1']);
      }
    }
    else if(isset($_POST['touv2']))
    {
      if(($_POST['TROUV'] == "") and ($_POST['TROUV1'] == "") and ($_POST['TROUV3'] == ""))
      {
        $listeevent=$event1C->afficherevents();
      }
      else
      {
        $listeevent=$event1C->rechercherNom($_POST['TROUV2']);
      }
    }
}
else
{
    $listeevent=$event1C->afficherevents();
}
?>
<html lang="en">

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

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/kawargi.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
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
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
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
                        
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
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
                        <li >
                            <a href="category.php">
                                <i class="fas fa-table"></i>Table de categories</a>
                        </li>
                        <li>
                            <a href="users.php">
                                <i class="far fa-check-square"></i>Table d'utilisateurs </a>
                        </li>
                        <li class="active">
                            <a href="please work.php">
                                <i class="fas fa-calendar-alt"></i>events</a>
                        </li>
                        
                        <li >
                            <a  href="afficher.php">
                                <i class="fas fa-copy"></i>table de produits</a>
                            
                        </li>
                        
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form method="POST">
                            <input type="number" name="TROUV"  placeholder="saisir le ID "> <button class="btn btn-primary btn-sm" name="touv" value="touv">Find</button> 
                            <input type="text" name="TROUV2" step="any" placeholder="saisir le Nom "> <button class="btn btn-warning btn-sm" name="touv2" value="touv2">Find</button>
                            <input type="date" id="today" name="TROUV1" step="any" placeholder="saisir le Nom "> <button class="btn btn-info btn-sm" name="touv1" value="touv1">Find</button>
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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                    <div class="table-responsive m-b-40">
                             <table class="table table-borderless table-data3" id="tab">
                                 <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Nom</th>
                                         <th>Debut event                                                
                                         <form method="POST">
                                         <button  type="submit" name="ASCQ" value="ASCQ">↟</button>
                                         <button type="submit" name="DSCQ" value="DSCQ">↡</button>
                                         </form></th>
                                         <th>Fin event</th>
                                         <th>pourcentage de remise
                                         <form method="POST">
                                         <button  type="submit" name="ASCP" value="ASCQ">↟</button>
                                         <button type="submit" name="DSCP" value="DSCQ">↡</button>
                                         </form>
                                         </th>
                                         <th>prix apres</th>
                                         <th>Image</th>
                                         <th>options</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                 <?PHP foreach($listeevent as $row){?>
             <tr>
                 <td><?PHP echo $row['ID_Event']; ?></td>
                 <td><?PHP echo $row['NomEvent']; ?></td>
                 <td><?PHP echo $row['DebEvent']; ?></td>
                 <td><?PHP echo $row['FinEvent']; ?></td>
                 <td><?PHP echo $row['PourProd']; ?></td>
                 <td><?PHP echo $row['PrixApres']; ?></td>  
                 <td><img src="<?PHP echo $row['Image_eve']; ?>" height="100" width="100"></td> 
                 <td>
                 <div class="table-data-feature">
              <a href="modifierProduit1.php?ID_Event=<?PHP echo $row['ID_Event'];?>">
                 <button  class="item" data-toggle="tooltip" value="modif" name="modif" data-placement="top"  title="Edit" >
                 <i class="zmdi zmdi-edit"></i>
                 </a>    
                  </button>    
                     </div>
                      </td>            
                 <?PHP } ?>
             </tr>

              </tr>      
                                 </tbody>
                             </table>
                         </div>
                                </div>
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                        <i class="zmdi zmdi-plus"></i><a href="please work 2.html">add item</a>
                                    </button>
                                    

                                    <button style="color:#63c76a;" class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                        <i class="zmdi zmdi-plus"></i><a href="please work 3 .html">delete item</a>
                                    </button>

                                    
<script>


        document.querySelector("#today").valueAsDate = new Date();
        
        /*n =  new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerHTML = m + "/" + d + "/" + y;*/
        </script>
                                <!-- END USER DATA-->
                            </div>
                            <div class="col-lg-6">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
<!-- end document-->
