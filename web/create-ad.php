<?php
    session_start();
    require_once './php/connect.php'; // connect to db
    $error = "";
    $_SESSION['failure']='';

    if(isset($_POST['submit_ad']))
	{
        $department = $_POST["department"];
		$ad_position = $_POST["ad_position"];
		$payment = $_POST["payment"];
        $duration = $_POST["duration"];
		$full_part = $_POST["full_part"];
        $location = $_POST["location"];
        $id_of_fy = $_SESSION['id'];
        $company_ad = $_SESSION['company'];

		$query = "INSERT INTO advert (department, ad_position, payment, duration, full_part, loc, id_of_fy, company_ad) VALUES ('$department', '$ad_position', '$payment', '$duration', '$full_part', '$location', '$id_of_fy', '$company_ad');";
        $result = mysqli_query($conn,$query);

        if ($result && $_SESSION['failure']=='')
        {
            header("Location: ./fy-index-ads.php");
        }
    }
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
    <title>Δημιουργία Αγγελίας</title>
    
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
            <?php 
                    if( isset($_SESSION['username']))
                    { ?>

                        <a class="navbar-brand logo-image" href="fy-index-applications.php"><img src="images/atlas_logo.png" alt="ATLAS logo"></a> 

                    <?php
                    } elseif(isset($_SESSION['id_of_student'])) {
                    ?>
                        
                        <a class="navbar-brand logo-image" href="student-page.php"><img src="images/atlas_logo.png" alt="ATLAS logo"></a> 

                    <?php
                    } else {
                    ?>
                        
                        <?php 
                    if( isset($_SESSION['username']))
                    { ?>

                        <a class="navbar-brand logo-image" href="fy-index-applications.php"><img src="images/atlas_logo.png" alt="ATLAS logo"></a> 

                    <?php
                    } elseif(isset($_SESSION['id_of_student'])) {
                    ?>
                        
                        <a class="navbar-brand logo-image" href="student-page.php"><img src="images/atlas_logo.png" alt="ATLAS logo"></a> 

                    <?php
                    } else {
                    ?>
                        
                        <a class="navbar-brand logo-image" href="index.php"><img src="images/atlas_logo.png" alt="ATLAS logo"></a> 

                    <?php
                    }
                    ?>

                    <?php
                    }
                    ?>
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
                    <a class="btn-outline-sm" id="login-btn" href="log-in.php">ΣΥΝΔΕΣΗ</a>
                </span>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="signup-btn" href="sign-up.php">ΕΓΓΡΑΦΗ</a>
                </span>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="edit-profile-btn" href="php/edit-profile-fy.php"><?php echo $_SESSION['username'];?></a>
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
            <a href="fy-index-ads.php"> Αρχική Σελίδα > Αγγελίες >&nbsp;</a>
            <li>Δημιουργία Αγγελίας</li>
        </ul>
        </br>

        <div class="section-title"> Στοιχεία Αγγελίας </div> <br>
        <!-- --------------------------------------------------------------------- -->
        <!-- --------------------------------------------------------------------- -->
        <!-- --------------------------------------------------------------------- -->
        <form  action="" method="post">
            <div class="card-3">
                <!-- ΤΜΗΜΑ, ΓΝΩΣΤΙΚΟ ΑΝΤΙΚΕΙΜΕΝΟ, ΤΙΤΛΟΣ ΣΠΟΥΔΩΝ -->
                <div class="form-group">
                    <input type="text" class="form-input" name="department"  required>
                    <label class="label-control" for="department"> Τμήμα </label>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-input" name="ad_position"  required>
                    <label class="label-control" for="ad_position"> Τίτλος Θέσης </label>
                    <div class="help-block with-errors"></div>
                </div>

                <!-- ΑΜΟΙΒΗ, ΔΙΑΡΚΕΙΑ, ΤΡΟΠΟΣ ΑΠΑΣΧΟΛΗΣΗΣ -->
                <div class="form-group">
                    <input type="text" class="form-input" name="payment"  required>
                    <label class="label-control" for="payment"> Αμοιβή </label>
                    <div class="help-block with-errors"></div>
                </div>
                
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Διάρκεια:</p>
                <div class="form-group radio button">
                    &nbsp;<input type="radio" id="three_months" name="duration" value="three_months" checked> 3 μήνες
                    &nbsp;<input type="radio" id="six_months" name="duration" value="six_months"> 6 μήνες
                </div>

                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Απασχόληση:</p>
                <div class="form-group radio button">
                    &nbsp;<input type="radio" id="full" name="full_part" value="full" checked> Πλήρης
                    &nbsp;<input type="radio" id="part" name="full_part" value="part"> Μερική
                </div>

                <!-- ΤΟΟΘΕΣΙΑ, ΗΜΕΡΟΜΗΝΙΑ ΕΚΤΕΛΕΣΗΣ, ΘΕΣΕΙΣ -->
                <div class="form-group">
                    <input type="text" class="form-input" name="location"  required>
                    <label class="label-control" for="location"> Τοποθεσία </label>
                    <div class="help-block with-errors"></div>
                </div>
                <br>
            </div>

            <!-- --------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------- -->

            <div class="section-title"> Έγγραφα Αγγελίας </div> 
            
            <br>
            
            <div class="neccessary-files">
                <b>Απαιτείται η επικόλληση των εξής αρχείων:</b><br>
                • Φωτογραφία <br>
                • Φοιτητική ταυτότητα (πάσο)<br>
                • Αναλυτική βαθμολογία<br>
                • Βεβαίωση πανεπιστημίου<br>
                • Αναφορά για τον λόγο πρακτικής <br>
            </div>

            <br>

            <button type="submit" name="submit_ad" style="margin: 15px;background-color: #4c51af;color: white;margin: 15px;background-color: #4c51af;color: white;border-radius: 10px;"> Οριστική Υποβολή </button> <br>
            <button type="submit" value="Προσωρινή Αποθήκευση" style="border-radius: 10px;"> Προσωρινή Αποθήκευση </button>
        </form>
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

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