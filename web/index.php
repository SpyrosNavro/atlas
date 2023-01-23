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
                        <a class="nav-link page-scroll active" href="index.php">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</a>
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
                    <a class="btn-outline-sm" id="login-btn" href="log-in-seperation.php">ΣΥΝΔΕΣΗ</a>
                </span>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="signup-btn" href="sign-up.php">ΕΓΓΡΑΦΗ</a>
                </span>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="edit-profile-btn" href="php/edit-profileistudent.php"><?php echo $_SESSION['username'];?></a>
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
    </br></br>

    <!-- Pricing -->
    <div id="pricing" class="cards-2">

        <ul class="breadcrumb">
            <li>Αρχική Σελίδα</li>
        </ul>

        </br>
        <div class="container">            
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Είσαι Φοιτητής;</div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Δεν χρειάζεται εγγραφή</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Γρήγορα και εύκολα</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="log-in-student.php">Είσοδος</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Είσαι Γραφείο Υποδοχής;</div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Παρακολουθήστε όλες τις αιτήσεις πρακτικής άσκησης</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Αποδεχτείτε γρήγορα αιτήσεις</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Δημιουργήστε νέες αγγελίες εύκολα</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="log-in-fy.php">Είσοδος</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <!--<div class="label">
                            <p class="best-value">Best Value</p>
                        </div> -->
                        <div class="card-body">
                            <div class="card-title">Είσαι Γραφείο Πρακτικής Άσκησης;</div>
                            <div class="divider"></div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Δείτε αγγελίες</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Ορίστε Επόπτη για κάθε εγκεκριμένη αίτηση</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="sign-up.php">Είσοδος</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

       <!-- Header -->
       <header id="header" class="ex-2-header">
        
            
        <div class="form-container">
                    <form  action="" method="post">

                        <h6> Αναζητήση αγγελιών</h6>
                        <hr class="hr-line">
                    <div class="step-rowSearch">
                        <div class="step-colSearch">
                            <label for="country"> Επιλέξτε Χώρα:</label>
                            <input id="country" placeholder="Αναζητήστε Χώρα" list="countries">
                            <datalist id="countries">
                                <option value="Ελλάδα">
                                <option value="Βέλγιο">
                                <option value="Σουηδία">
                            </datalist>  
                        </div>

                        <div class="step-colSearch">
                            
                                <label for="country"> Επιλέξτε Τμήμα:</label>

                                <div onclick="myFunction()" class="">
                                    <input id="country" placeholder="Αναζητήστε Χώρα" id="myInput3" onkeyup="filterFunction()">


                                
                                    <div id="" class="dropdown3-content">
                                        <a href="#about">About</a>
                                        <a href="#base">Base</a>
                                        <a href="#blog">Blog</a>
                                        <a href="#contact">Contact</a>
                                        <a href="#custom">Custom</a>
                                        <a href="#support">Support</a>
                                        <a href="#tools">Tools</a>
                                    </div>
                                 </div>
                        </div>

                    </div>
                        

                    <br>
                        <div class ="">
                            <button class="btn width-30 btn-next ml-auto btn-next">Αναζήτηση</button>
                        </div>

                    </form>

                    


                    
    





        </div> <!-- end of form container -->
                    <!-- end of  Search form -->

        </br>
                    
                    <h6> Αγγελίες</h6>
                    
                    <?php 
                        $myads = mysqli_query($conn, "SELECT * FROM advert");
                            while($arr = $myads->fetch_array()){
                                 
                            
                             
                        ?>
                            </br>
                            <div class="form-container">
                                <div class="step-rowAd">
                                    <div class="step-colAd">
                                        <a href="advertinfo.php?id=<?php echo $arr[0];?>"><?php echo $arr[2]; ?></a>
                                    </div>
                                    <div class="step-colAd">
                                        <a href="log-in-student.php"><button class="btn width-80 btn-next ml-auto btn-next">Υποβολή Αίτησης</button><a>
                                        
                                        
                                    </div>
                                    
                                </div>
                                <div class="step-rowAd" style="left:50px;">
                                        Τοποθεσία: <?php echo $arr[6]; ?>  
                                </div>
                            

                            </div>

                        <?php    
                            }
                        
                        ?>
        </div>


    


    </header> <!-- end of ex-header -->

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

<!--
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
                </div>
            </div>
        </div>
    </div>
-->
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>