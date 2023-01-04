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

    <!-- Website Title -->
    <title>ΑΤΛΑΣ</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <!-- <link rel="icon" href="images/favicon.png"> -->
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
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="images/atlas_logo.png" alt="ATLAS logo"></a> 
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">ΑΡΧΙΚΗ ΣΕΛΙΔΑ<span class="sr-only">(current)</span></a>
                    </li>

                    <?php 
                    if( isset($_SESSION['email']))
                    { ?>

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="announcements.php">ΑΝΑΚΟΙΝΩΣΕΙΣ</a>
                        </li>

                    <?php
                    } else {
                    ?>
                        
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="announcements.php">ΑΝΑΚΟΙΝΩΣΕΙΣ</a>
                        </li>

                    <?php
                    }
                    ?>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="faq.php">ΣΥΧΝΕΣ ΕΡΩΤΗΣΕΙΣ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="communication.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
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
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    </br></br></br>

    <!-- Announcements -->
    <header id="header" class="ex-header">

    
    
        <div id="announcements" class="cards-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">  
                        <div class="above-heading">ΑΝΑΚΟΙΝΩΣΕΙΣ</div>  
                    </div>   
                </div> 
                
            </div>
        </div>
        
        <ul class="breadcrumb">
            <li><a href="index.php">Αρχική </a></li>
            <li><div class="breadcrumb-item">/</div>
            <li><a href="announcements.php"> Ανακοινώσεις</a></li>
            <li><div class="breadcrumb-item">/</div>
            <li><div class="breadcrumb-item">Επανέναρξη Πρακτικών Ασκήσεων με φυσική παρουσία</div>
        </ul>

 
        <div class="row1">
            <div class="column1">
                <h5> Επανέναρξη Πρακτικών Ασκήσεων με φυσική παρουσία</h5>

                <p>13/5/2021</p>
                <p>Σας ενημερώνουμε ότι με το δημοσιευθέν ΦΕΚ 1866/τ. Β'/07-05-2021 ανακοινώνεται η επανέναρξη πρακτικών ασκήσεων με φυσική παρουσία από 10/5/2021 με υποχρεωτική διενέργεια διαγνωστικού ελέγχου νόσησης από τον κορωνοϊό COVID-19.</p>

            </div>
            <div class="column2">
                <h5>ΚΑΤΗΓΟΡΙΑ</h5>
                <hr style="width:50%;text-align:left;margin-left:5">
                

                <p class="p-small"><a class=blue page-scroll href="announcements.php">Γενικές</a>
                <hr style="width:50%;text-align:left;margin-left:5">

                

            </div>
        </div>


        
    </header>
    
                    

        <!-- Footer -->
        <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col first">
                            <h4>Επικοινωνία</h4>
                            <p class="p-small">
                                Ώρες εξυπηρέτησης τηλεφώνων: </br>
                                 Δευ-Παρ, 12:30-14:00 </br> </br>
                                Αθήνα </br>
                                Τηλ: 2105281000 </br> </br>
                                Θεσσαλονίκη </br>
                                Τηλ: 2313501372/2313501373 </br>
                                2313501106/2313501315 </br> </br>
                                Email: information_dep@doatap.gr
                            </p>
                        </div>
                    </div> <!-- end of col -->
    
                    <div class="col-md-4">
                        <div class="footer-col middle">
                            <h4>Προσβασιμότητα</h4>
                            <p class="p-small">
                                Η δια ζώσης εξυπηρέτηση του κοινού: </br>
                                 Δευτέρα και Πέμπτη, 9:00-12:00 </br> </br>
                                Αθήνα </br>
                                Αγ. Κωνσταντίνος 54, Τ.Κ. 104 37 </br> </br>
                                Θεσσαλονίκη </br>
                                Υπουργείο Μακεδονίας Θράκης - Διοικητήριο, Τ.Κ. 541 23
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