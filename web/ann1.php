<?php
    session_start();
    require_once './php/connect.php'; // connect to db
    unset($_SESSION['failure']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Announcements- SaaS App HTML Landing Page Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
  
	
</head>
<body data-spy="scroll" data-target=".fixed-top">

    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="images/doatap_logo.png" alt="DOATAP logo"></a> 
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php">ΑΡΧΙΚΗ <span class="sr-only">(current)</span></a>
                    </li>

                    <?php 
                    if( isset($_SESSION['email']))
                    { ?>

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="applications.php">ΟΙ ΑΙΤΗΣΕΙΣ ΜΟΥ</a>
                        </li>

                    <?php
                    } else {
                    ?>
                        
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="log-in.php">ΟΙ ΑΙΤΗΣΕΙΣ ΜΟΥ</a>
                        </li>

                    <?php
                    }
                    ?>

<!---                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ΥΠΗΡΕΣΙΕΣ</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                            <div class="dropdown-items-divide-hr"></div> 

                            <li class="nav-item dropdown">
                           <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">ΕΝΗΜΕΡΩΣΗ ΑΙΤΟΥΝΤΑ</span></a>  
                            
                                
                            <div class="dropdown-items-divide-hr"></div>      
                            <ul class="nav-item dropdown">
                                <li><a href="#">3rd level dropdown</a></li>
                                <li><a href="#">3rd level dropdown</a></li>
                            </ul>   

                            </li>
                 
--->
                            <div class="nav-item dropdown">
                            <!---    <button class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ΥΠΗΡΕΣΙΕΣ   --->
                            <a class="nav-link dropdown-toggle page-scroll" href="index.html#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ΥΠΗΡΕΣΙΕΣ</a>
                            
                               
                    

                            <!---    <div class="dropdown-items-divide-hr"></div>    --->
                                <ul class="nav-item dropdown-menu">
            
                                <li class="nav-item dropdown-submenu">
                                    <a class="nav-link dropdown-toggle page-scroll item" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ΕΝΗΜΕΡΩΣΗ ΑΙΤΟΥΝΤΑ <span class="caret"></span></a>    
                                <!---    <a class="nav-item dropdown-item"  tabindex="-1" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ΕΝΗΜΕΡΩΣΗ ΑΙΤΟΥΝΤΑ</a> --->

                                    <div class="dropdown-items-divide-hr"></div> 
                                    <ul class="nav-item dropdown-submenu">
                                        <li><a class="nav-item dropdown-item"  href="#information.html">Διαδικασία</a></li>
                                        <div class="dropdown-items-divide-hr"></div> 
                                        <li class="nav-item dropdown-submenu">
                                            <a class="nav-item dropdown-item" tabindex="-1" href="#">Πανεπιστήμια<span class="caret"></a>
                                            <ul class="nav-item dropdown-submenu">
                                                <li><a class="nav-item dropdown-item" tabindex="-1" href="greek_unis.php">Ελληνικά Πανεπιστήμια<span class="caret"></a></li>
                                                <li><a class="nav-item dropdown-item" tabindex="-1" href="other_unis.php">Πανεπιστήμια Εξωτερικού<span class="caret"></a></li>
                                            </ul>
                                        <div class="dropdown-items-divide-hr"></div>
                                        <li><a class="nav-item dropdown-item" tabindex="-1" href="paravola.html">Παράβολα<span class="caret"></a></li>
                                        <div class="dropdown-items-divide-hr"></div>
                                    </ul>

                                </li>
                                
                            
                    
                                


                            <a class="nav-item dropdown-item" tabindex="-1" href="extra_help.html">ΣΥΜΠΛΗΡΩΜΑΤΙΚΑ ΑΙΤΗΜΑΤΑ<span class="caret"></span></a>
                            

                        </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="announcements.html">ΑΝΑΚΟΙΝΩΣΕΙΣ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="communication.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="faq.html">ΣΥΧΝΕΣ ΕΡΩΤΗΣΕΙΣ</a>
                    </li>
                </ul>
                <span class="nav-item" >
                    <a class="btn-outline-sm" id="login-btn" href="log-in.php">ΣΥΝΔΕΣΗ</a>
                </span>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="signup-btn" href="sign-up.php">ΕΓΓΡΑΦΗ</a>
                </span>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="disconnect-btn" href="php/disconnect.php">ΑΠΟΣΥΝΔΕΣΗ</a>
                </span>
                <?php 
                    if( isset($_SESSION['email']))
                    { ?>

                        <script>
                            console.log("success");
                             document.getElementById("login-btn").style.display = "none";
                             document.getElementById("signup-btn").style.display = "none";
                             document.getElementById("disconnect-btn").style.display = "block";
                        </script>


                    <?php
                    } else {
                    ?>
                        <script>
                             document.getElementById("login-btn").style.display = "block";
                             document.getElementById("signup-btn").style.display = "block";
                             document.getElementById("disconnect-btn").style.display = "none";
                        </script>
                    <?php
                    }
                    ?>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="disconnect-btn" href="php/disconnect.php">ΑΠΟΣΥΝΔΕΣΗ</a>
                </span>

                <?php 
                    if( isset($_SESSION['email']))
                    { ?>

                        <script>
                            console.log("success");
                             document.getElementById("login-btn").style.display = "none";
                             document.getElementById("signup-btn").style.display = "none";
                             document.getElementById("disconnect-btn").style.display = "block";
                        </script>


                    <?php
                    } else {
                    ?>
                        <script>
                             document.getElementById("login-btn").style.display = "block";
                             document.getElementById("signup-btn").style.display = "block";
                             document.getElementById("disconnect-btn").style.display = "none";
                        </script>
                    <?php
                    }
                    ?>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

<header id="header" class="ex-header">

     <!-- Announcements -->
    
     <div id="announcements" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">  
                    <div class="above-heading">ΑΝΑΚΟΙΝΩΣΕΙΣ</div>
            <!---         <h2 class="h2-heading"><Όλες οι ανακοινώσεις></h2>   --->
                  </div>   
            </div> 
            
        </div>
     </div>

    <ul class="breadcrumb">
        <li><a href="index.html">Αρχική/ </a></li>
        <li> <a href="announcements.php">Ανακοινώσεις</li>

    </ul>

      <div id="announcements" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                
                <!---     Card   
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><a class=blue page-scroll href="https:errornotfound">'Ολες οι ανακοινώσεις</a></div>

    
                        </div>
                    </div>  
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><a class=blue page-scroll href="https:errornotfound">Γενικές</a></div>
    
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><a class=blue page-scroll href="https:errornotfound">Αποφάσεις Δ.Σ</a></div>
                                
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title"><a class=blue page-scroll href="https:errornotfound">Προϋπολογισμοί-Προκηρύξεις</a></div>
    
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title"><a class=blue page-scroll href="https:errornotfound">Εξετάσεις Ιαρτικής</a></div>
           
    
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        <div class="card-title"><a class=blue page-scroll href="https:errornotfound">Εξετάσεις Οδοντιατρικής</a></div>

    
                        </div>
                    </div>

                </div>
            </div>
        </div>
--->

        <div class="posts">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="posts-col first">
                            <h6>ΗΜΕΡΟΜΗΝΙΑ</h6>
                            
                            <hr style="width:150%;text-align:left;margin-left:0">
                
                            <p class="p-small">
                                13/1/2021 </br>
                                </br>
                                </br>
                                </br>
                
                                </br>
                            <hr style="width:150%;text-align:left;margin-left:0">
                                 13/5/2021  </br>
                            </p>
                        </div>
                    </div> <!-- end of col -->
    
                    <div class="col-md-4">
                        <div class="posts-col middle">
                            <h6>ΤΙΤΛΟΣ</h6>
                            <hr style="width:110%;text-align:left;margin-left:0">
                            <p class="p-small">
                        <a class=blue page-scroll href="ann1.php">ANN1111Νέος κύκλος χρηματοδότησης Πρακτικής Άσκησης μέσω ΕΣΠΑ- Πρόσκληση αιτήσεων 2023</a>
                        </br>  
                        <p>Επισυναπτώμενα αρχεία:  <a href="images/ΠΡΟΣΚΛΗΣΗ%20ΑΙΤΗΣΕΩΝ%20ΕΣΠΑ%202023-ΑΠ.pdf">Πρόσκληση</a>.</p>
                                </br>
                                </br>
                                </br> 
                        
                                </br>
                                <hr style="width:150%;text-align:left;margin-left:0">
                             
                                <a class=blue page-scroll href="ann2.php">Επανέναρξη Πρακτικών Ασκήσεων με φυσική παρουσία</a>

                            </br>
                            </p>
                        </div>
                    </div> <!-- end of col -->
    
                    <div class="col-md-4">
                        <div class="posts-col middle">
                            <h6>ΚΑΤΗΓΟΡΙΑ</h6>
                            <hr style="width:110%;text-align:left;margin-left:0">

                            <p class="p-small"><a class=blue page-scroll href="announcements.php">Γενικές</a>
                                </br>
                                </br>
                                </br>
                                </br>
                        
                                </br>
                                <hr style="width:110%;text-align:left;margin-left:0">

                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>        
        </div>

    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
    <div class="footer">
        <div class="footer-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>Επικοινωνία</h4>
                        <p class="p-small">
                            Ώρες εξυπηρέτησης τηλεφώνων: </br>
                             Δευ-Παρ, 9:00-15:00 </br> </br>
                            Τηλέφωνα: </br>
                            2102400000 </br>
                            2102400001 </br> </br>
                            Email: help@atlas.gr
                        </p>
                    </div>
                </div> <!-- end of col -->

                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Διοργανωτές</h4>
                        <p class="p-small">
                           Ελληνική Δημοκρατία </br>
                           Υποργείο Υγείας και Θρησκευμάτων </br>
                           Ευρωπαϊκή Ένωση </br>
                           ΕΣΠΑ </br>
                        </p>
                    </div>
                </div> <!-- end of col -->

                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Όροι & Ιδιωτικότητα</h4>
                        <p class="p-small">
                            <div class="media-body"><a class="white" href="">Όροι χρήσης - Δήλωση Απορρήτου</a></div>
                        </p>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->

    
        <!-- Copyright
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                    </div> end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->

 <!-- Scripts -->
 <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
 <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
 <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
 <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
 <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
 <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
 <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
 <script src="js/scripts.js"></script> <!-- Custom scripts -->
</header>

   

</body>
</html>