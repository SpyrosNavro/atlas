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
    <title>FAQs</title>
    
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
                        <a class="nav-link page-scroll" href="index.php">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</span></a>
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
                            <a class="nav-link page-scroll" href="log-in.php">ΑΝΑΚΟΙΝΩΣΕΙΣ</a>
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


<header id="header" class="ex-header">
<!---FAQs--->

 
    <div id="faqs" class="questions">

        <ul class="breadcrumb">
            <li><a href="index.php">Αρχική Σελίδα</a></li>

            <li> -> Συχνές Ερωτήσεις</li>
          </ul>

        <section class="faq-container">
            <div class="faq-one">

                <!-- faq question -->
                <h6 class="faq-page"> Πως μπαίνω στο σύστημα για να κάνω αίτηση;</h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p> Ως φοιτητής δεν χρειάζεται να εγγραφείτε στο σύστημα. Η σύνδεση γίνεται αυτόματα με τους κωδικούς του e-class.
 
                    </p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

                <!-- faq question -->
                <h6 class="faq-page">Τι δικαιολογητικά χρειάζομαι για να κάνω μια αίτηση;</h6>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>Θα σας ζητηθεί να ανεβάσετε: </br>
                    1. Φοιτητική Ταυτότητα (πάσο) σε μορφή pdf </br>
                    2. Πρόσφατη φωτογραφία </br>
                    3. Αναλυτική βαθμολογία </br>
                    Αν επιθυμείτε ή σας ζητηθεί από τον Φορέα Υποδοχής να ανεβάσετε κάποιο συμπληρωματικό έγγραφο,</br>υπάρχει ξεχωριστός τμήμα στην αίτηση

                    </p>
                </div>
            </div>
            <hr class="hr-line">


            <div class="faq-three">

                <!-- faq question -->
                <h6 class="faq-page">Πόσο χρόνο παίρνει η έγκριση για Πρακτική Άσκηση;</h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Δυστυχώς, αυτό δεν μπορεί να το προβλέψει ο ΑΤΛΑΣ. Είναι ένα ζήτημα το οποίο εξαρτάται από τον Φορέα Υποδοχής.
                    </p>
                </div>
            </div>

            <hr class="hr-line">

            <div class="faq-four">

                <!-- faq question -->
                <h6 class="faq-page">Μπορώ μέσω του ΑΤΛΑΣ να κάνω αίτηση για Πρακτική Άσκηση στο εξωτερικό;</h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Ναι είναι εφικτό. Παρ’όλα αυτά, υπάρχει πιθανότητα να σας ζητηθούν επιπλέον δικαιολογητικά,</br>τα οποία θα πρέπει να καταθέσετε στο τμήμα “Επιπλέον Δικαιολογητικά”</p>
                </div>
            </div>

            <hr class="hr-line">


            <div class="faq-five">

                <!-- faq question -->
                <h6 class="faq-page"> Μπορώ να πάρω βεβαίωση για την συμμετοχή μου στη Πρακτική Άσκηση; </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>  Ναι είναι εφικτό. Μετά την ολοκλήρωση της Πρακτικής Άσκησης μπορείτε να εκτυπώσετε μια βεβαίωση συμμετοχής.
                    </p>
                </div>
            </div>

            <hr class="hr-line">


            <div class="faq-six">

                <!-- faq question -->
                <h6 class="faq-page">Τι ισχύει για τους απονεμόμενους τίτλους και τα δικαιώματα εργασίας στη συγκεκριμένη χώρα;
                </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p> Όταν οι απονεμόμενοι τίτλοι οδηγούν σε επαγγελματικά δικαιώματα,</br>τα δικαιώματα αυτά αναγνωρίζονται στη χώρα που λειτουργεί το ανώτατο εκπαιδευτικό ίδρυμα.

                    </p>
                </div>
            </div>

            <hr class="hr-line">


            <div class="faq-seven">

                <!-- faq question -->
                <h6 class="faq-page">Ποιοί μπορούν να εγγραφούν ως Φορείς Υποδοχής Πρακτικής Άσκησης;
                </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Κάθε Ιδιωτική Επιχείρηση, Μη Κυβερνητικός Οργανισμός, Δημόσιος Φορέας ή Διεθνής Φορέας,</br>ο οποίος προσφέρει θέσεις Πρακτικής Άσκησης για φοιτητές Πανεπιστημίων και ΤΕΙ, στο εσωτερικό ή στο εξωτερικό,</br>μπορεί να εγγραφεί ως Φορέας Υποδοχής Πρακτικής Άσκησης.                        
                    </p>
                </div>
            </div>

            <hr class="hr-line">


            <div class="faq-eight">

                <!-- faq question -->
                <h6 class="faq-page">Πως προκύπτει η αμοιβή του φοιτητή;</h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Η αμοιβή του φοιτητή μπορεί να προέλθει (αναλόγως την διαθεσιμότητα) από: </br>
                    1. Προγράμματα επιδότησης ΕΣΠΑ </br>
                    2. Το οικείο ακαδημαϊκό ίδρυμα του φοιτητή </br>
                    3. Πρόγραμμα επιδότησης ΟΑΕΔ </br>
                    4. Τον Φορέα Υποδοχής Πρακτικής Άσκησης </br>
                    </p>
                </div>
            </div>

            <div class="faq-nine">

                <!-- faq question -->
                <h6 class="faq-page">Μπορώ να τροποποιήσω τις διαθέσιμες θέσεις Πρακτικής Άσκησης που έχω καταχωρήσει;
                </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Μπορείτε να τροποποιήσετε τις διαθέσιμες θέσεις Πρακτικής Άσκησης που έχετε καταχωρήσει,</br>εφόσον βέβαια αυτές δεν έχουν δεσμευτεί από κάποιο Γραφείο Πρακτικής Άσκησης.
                    </p>
                </div>
            </div>

            <div class="faq-ten">

                <!-- faq question -->
                <h6 class="faq-page">Ποιά είναι η διαδικασία αλλαγής στοιχείων του Φορέα Υποδοχής Πρακτικής Άσκησης;
                </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Μπορείτε να αλλάξετε τα στοιχεία του Φορέα Υποδοχής Πρακτικής Άσκησης στο τμήμα “Στοιχεία Φορέα”. </br>
                    Σε περίπτωση που έχετε στείλει ήδη Βεβαίωση Συμμετοχής, είναι απαραίτητο να την στείλετε ξανά στο Γραφείο Αρωγής Χρηστών </br> για να μπορέσει να ολοκληρωθεί ορθά η πιστοποίηση της.
                    Μετά την ολοκλήρωση της πιστοποίησης, </br> μπορείτε να τροποποιείται δευτερεύοντα χαρακτηριστικα, όπως Διεύθυνση, email κτλ. </br>
                    Για αλλαγή πρωτευόντων στοιχείων απαιτείται η επικοινωνία με το Γραφείο Αρωγής Χρηστών </br>

                    </p>
                </div>
            </div>

            <div class="faq-eleven">

                <!-- faq question -->
                <h6 class="faq-page">Ποιά είναι η διαδικασία αλλαγής στοιχείων του Γραφείου Πρακτικής Άσκησης αφού ολοκληρωθεί η διαδικασία πιστοποίησης;
                </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Μετά την ολοκλήρωση της πιστοποίησης, μπορείτε να τροποποιείται δευτερεύοντα χαρακτηριστικα, όπως Διεύθυνση, email κτλ. </br>
                    Για αλλαγή πρωτευόντων στοιχείων απαιτείται η επικοινωνία με το Γραφείο Αρωγής Χρηστών

                    </p>
                </div>
            </div>

            <div class="faq-twelve">

                <!-- faq question -->
                <h6 class="faq-page">Ποιοί μπορούν να εγγραφούν ως Γραφείο Πρακτικής Άσκησης
                </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Το αντίστοιχο τμήμα της σχολής το οποίο ασχολείται με το ζήτημα της Πρακτικής Άσκησης.
                    </p>
                </div>
            </div>

            

            <hr class="hr-line">
            

        </section>

    <script src="js/faq.js"></script>
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


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div> <!-- end of col -->
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