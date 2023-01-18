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
    <title>Informatione</title>
    
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
                    <a class="btn-outline-sm" id="edit-profile-btn" href="php/edit-profileistudent.php">ΠΡΟΦΙΛ</a>
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
                             document.getElementById("edit-profile-btn").style.display = "block";
                             document.getElementById("disconnect-btn").style.display = "block";
                        </script>


                    <?php
                    } else {
                    ?>
                        <script>
                             document.getElementById("login-btn").style.display = "block";
                             document.getElementById("signup-btn").style.display = "block";
                             document.getElementById("edit-profile-btn").style.display = "none";
                             document.getElementById("disconnect-btn").style.display = "none";
                        </script>
                    <?php
                    }
                    ?>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    
    <div id="announcements" class="cards-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">  
                        <div class="above-heading">ΕΠΙΚΟΙΝΩΝΙΑ</div>  
                    </div>   
                </div> 
                
            </div>
        </div>

<ul class="breadcrumb">
    <li><a href="index.html">Αρχική</a></li>
    <li><a href="#">Ενημέρωση Αιτούντα</a></li>
    <li>Διαδικασία</li>
  </ul>

  <div class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
  <ol>
 <li>Αν πρόκειται για αίτηση ισοτιμίας με αντιστοιχία (βασικού τίτλου σπουδών), ο Ειδικός Εισηγητής συντάσσει εισήγηση στην οποία εκφράζει γνώμη για την ισοτιμία και για την αντιστοιχία παραπέμπει τον φάκελο σε «Ακαδημαϊκό Σύμβουλο» (ΑΣ). 
    Για την ίδια κατηγορία τίτλων (ίδιος κλάδος, ίδιο επίπεδο τίτλου) ο Ειδικός Εισηγητής τηρεί απαρέγκλιτα τη σειρά προτεραιότητας που τεκμαίρεται από την ημερομηνία λήψης ΑΠ και όχι ΑΚ. Η σειρά αυτή μπορεί να αλλάξει, μόνον εάν ο Ειδικός Εισηγητής
     κρίνει ότι χρειάζεται επιπρόσθετα στοιχεία για να τεκμηριώσει την εισήγησή του, οπότε η καθυστέρηση εξαρτάται από την ταχύτητα απάντησης  του πανεπιστημίου
      που απένειμε τον τίτλο.</li>
  <li>Για την ίδια κατηγορία τίτλων (ίδιος κλάδος, ίδιο επίπεδο τίτλου) ο Ειδικός Εισηγητής τηρεί απαρέγκλιτα τη σειρά προτεραιότητας που τεκμαίρεται από την ημερομηνία λήψης ΑΠ και όχι ΑΚ. Η σειρά αυτή μπορεί να αλλάξει, μόνον εάν ο Ειδικός Εισηγητής κρίνει ότι χρειάζεται επιπρόσθετα στοιχεία για να τεκμηριώσει την εισήγησή του, οπότε η καθυστέρηση εξαρτάται από την ταχύτητα απάντησης  του πανεπιστημίου που απένειμε τον τίτλο.
</li>

<li>Ο ΑΣ (Καθηγητής Πανεπιστημίου Ελληνικού ΑΕΙ, μη αμειβόμενος εξωτερικός συνεργάτης του οργανισμού) εισηγείται την πιθανή χρέωση μαθημάτων για την αντιστοιχία (από 0 – 6 για τετραετή πτυχία ή 0-10 για πενταετή) και παραπέμπει την εισήγησή του στην «Εκτελεστική Επιτροπή»
</li>

<li>Η Εκτελεστική Επιτροπή αποτελείται από τρεις Καθηγητές Πανεπιστημίου, που είναι ταυτόχρονα και μέλη του ΔΣ του 
    ΔΟΑΤΑΠ. Απαρτίζεται από τον υπεύθυνο Καθηγητή του κλάδου και άλλους δύο Καθηγητές συναφούς γνωστικού 
    αντικειμένου. </li>

<li>Αν η κρίση της Εκτελεστικής Επιτροπής είναι ομόφωνα θετική για την απόδοση ισοτιμίας και αντιστοιχίας (με ή χωρίς χρέωση μαθημάτων), παραπέμπεται για «Διοικητικό Έλεγχο» (ΔΕ), οπότε εξετάζεται η τήρηση της προβλεπόμενης διαδικασίας.
</li>
<li>Αν ο φάκελος περάσει θετικά από τον ΔΕ παραπέμπεται στον Πρόεδρο για την τελική κρίση</li>
<li>Ο Πρόεδρος παραπέμπει την θετική του κρίση στην «Καταχώρηση», για να ετοιμαστεί το σχέδιο πράξης.</li>
<li>Το σχέδιο πράξης παραπέμπεται στον πολίτη για έλεγχο των πραγματολογικών στοιχείων (ονοματεπώνυμο κλπ). Αν ο πολίτης δεν απαντήσει εντός 15 ημερών, 
    το σχέδιο πράξης παραπέμπεται στον Πρόεδρο για την τελική υπογραφή.</li>
<li>Με την υπογραφή του Προέδρου η τελική πράξη αποστέλλεται ηλεκτρονικά στον πολίτη σε πραγματικό χρόνο.</li>
<li>Αν η αίτηση αφορά σε απλή κρίση ισοτιμίας (βασικού, μεταπτυχιακού ή διδακτορικού τίτλου) η διαδικασία είναι ίδια με παράλειψη του σταδίου του Ακαδημαϊκού Συμβούλου.
</li>
<li>Αν σε κάποιο στάδιο υπάρχει διαφωνία μεταξύ των μελών της Εκτελεστικής Επιτροπής ή του Προέδρου η αίτηση επιστρέφεται στο προηγούμενο στάδιο. 
    Αν η διαφωνία δεν επιλυθεί, η αίτηση παραπέμπεται στο αρμόδιο Τμήμα.</li>




</ol>
            </div>
        </div>
    </div>
</div>


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