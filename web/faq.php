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
    <title>Information- SaaS App HTML Landing Page Template</title>
    
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
            <a class="navbar-brand logo-image" href="index.html"><img src="images/doatap_logo.png" alt="DOATAP logo"></a> 
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html">ΑΡΧΙΚΗ <span class="sr-only">(current)</span></a>
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
                        <a class="nav-link page-scroll" href="announcements.php">ΑΝΑΚΟΙΝΩΣΕΙΣ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="communication.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="faq.php">ΣΥΧΝΕΣ ΕΡΩΤΗΣΕΙΣ</a>
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
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">  
                    <div class="above-heading"><center>ΣΥΧΝΕΣ ΕΡΩΤΗΣΕΙΣ</center></div>
                </div>   
            </div> 
        </div>

        <ul class="breadcrumb">
            <li><a href="index.html">Αρχική</a></li>

            <li>Συχνές Ερωτήσεις</li>
          </ul>

        <section class="faq-container">
            <div class="faq-one">

                <!-- faq question -->
                <h6 class="faq-page"> Έχω υποβάλλει οριστικά την αίτησή μου, πως μπορώ να δω τον Αριθμό Πρωτοκόλλου της;</h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p> Η αίτηση παίρνει Αριθμό Πρωτοκόλλου όταν ελεγχθεί και διαπιστωθεί πλήρης ο φάκελός σας, οπότε και μπορεί να ξεκινήσει η διαδικασία αναγνώρισης. Αυτό απαιτεί επιπλέον την παραλαβή και αντιπαραβολή των εγγράφων που αναμένονται να σταλούν από το Πανεπιστήμιο. Έτσι, όταν εσείς υποβάλλετε την αίτησή σας, δεν παίρνει αυτόματα αριθμό πρωτοκόλλου, αλλά έναν άτυπο αριθμό καταχώρησης. Όταν η αίτησή σας περάσει επιτυχώς τον προέλεγχο, τότε πρωτοκολλείται, και ενημερώνεστε με αντίστοιχο email, καθώς επίσης και μέσω του Doatap. Σε αυτήν την περίπτωση ο αριθμός πρωτοκόλλου θα εμφανίζεται στο πάνω-δεξιά μέρος των καρτελών. 
                    </p>
                </div>
            </div>
            <hr class="hr-line">

            <div class="faq-two">

                <!-- faq question -->
                <h6 class="faq-page">Πόσο διαρκεί η διαδικασία του προελέγχου προκειμένου να πάρω Αριθμό Πρωτοκόλλου; </h6>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>Η διαδικασία προελέγχου διαρκεί περίπου 40 ημέρες οριζόντια για κάθε κλάδο και κάθε τύπο τίτλου. 
                    </p>
                </div>
            </div>
            <hr class="hr-line">


            <div class="faq-three">

                <!-- faq question -->
                <h6 class="faq-page"> Η αίτησή μου δεν έχει αλλάξει κατάσταση για ένα χρονικό διάστημα. Έχει κολλήσει η εφαρμογή;</h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Τυχόν καθυστερήσεις οφείλονται στο στο μεγάλο όγκο αιτήσεων, και όχι στη λειτουργία της πλατφόρμας.
                    </p>
                </div>
            </div>

            <hr class="hr-line">

            <div class="faq-four">

                <!-- faq question -->
                <h6 class="faq-page"> Υπάρχει η δυνατότητα υπέρβασης σειράς προτεραιότητας;</h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Για λόγους ισονομίας και ίσης μεταχείρισης η σειρά προτεραιότητας δεν παραβιάζεται. Μοναδική εξαίρεση αποτελεί η περίπτωση της αδικαιολόγητης καθυστέρησης, πέραν του συνήθους.</p>
                </div>
            </div>

            <hr class="hr-line">


            <div class="faq-five">

                <!-- faq question -->
                <h6 class="faq-page"> Ποιος είναι ο χρόνος διεκπεραίωσης των αιτήσεων; </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>  Η πλειοψηφία των αιτήσεων ολοκληρώνεται σε διάστημα κάτω των 6 μηνών. 

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
                    <p> Όταν οι απονεμόμενοι τίτλοι οδηγούν σε επαγγελματικά δικαιώματα, τα δικαιώματα αυτά αναγνωρίζονται στη χώρα που λειτουργεί το ανώτατο εκπαιδευτικό ίδρυμα.

                    </p>
                </div>
            </div>

            <hr class="hr-line">


            <div class="faq-seven">

                <!-- faq question -->
                <h6 class="faq-page"> Πως μπορώ να εξοφλήσω το απαραίτητο χρηματικό ποσό;
                </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Η κατάθεση πραγματοποιείται, είτε στο Κεντρικό Κατάστημα της Τράπεζας Ελλάδος (Ελ. Βενιζέλου -πρώην Πανεπιστημίου- 
                        αρ. 21), είτε σε κάποιο υποκατάστημα ή πρακτορείο. Εναλλακτικά, μπορείτε να απευθυνθείτε σε όποια Τράπεζα που σας εξυπηρετεί (στο κατάστημα ή μέσω e-banking) και να καταθέσετε το σχετικό ποσό στον λογαριασμό του ΔΟΑΤΑΠ στην Τράπεζα Της Ελλάδος , με τα στοιχεία που περιλαμβάνονται στην κατηγορία <<Υπηρεσίες / Παράβολα>>.
                        
                    </p>
                </div>
            </div>

            <hr class="hr-line">


            <div class="faq-eight">

                <!-- faq question -->
                <h6 class="faq-page">Σπούδασα ένα χρόνο στο πρώτο πανεπιστήμιο και μετά έκανε μετεγγραφή στο 2ο έτος σε άλλο πανεπιστήμιο. Χρειάζομαι δικαιολογητικά και από τα δύο πανεπιστήμια ; </h6>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>    Δικαιολογητικά απαιτούνται από κάθε Ίδρυμα στο οποίο έχει πραγματοποιηθεί μέρος ή το σύνολο των σπουδών. Υπενθυμίζουμε σχετικά ότι ο Ν.3328/2005 για την διαδικασία αναγνώρισης προβλέπει ότι το ήμισυ τουλάχιστον των σπουδών ή σε περίπτωση που η διάρκεια των σπουδών είναι πενταετής τα δύο τουλάχιστον έτη, θα πρέπει να έχει πραγματοποιηθεί στο Ίδρυμα που απένειμε τον τίτλο.
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