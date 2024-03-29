<?php
    session_start();
    require_once './php/connect.php'; // connect to db
    unset($_SESSION['failure']);

    $id=$_GET['idd'];
    $result = mysqli_query($conn, "SELECT * FROM advert WHERE id_of_ad=$id");
    if ($result) {
        $arr = $result->fetch_array();
    }

    if(isset($_POST['submit_ad']))
	{
        $department=$arr[1];
        $ad_position=$arr[2];
        $payment=$arr[3];
        $duration=$arr[4];
        $full_part=$arr[5];
        $loc=$arr[6];
        // ------------
        if( ($_POST['department'] != $arr[1]) && ($_POST['department'] != '') ) {
            $department = $_POST['department'];
        }

        // ------------
        if( ($_POST['ad_position'] != $arr[2]) && ($_POST['ad_position'] != '') ) {
            $ad_position = $_POST['ad_position'];
        }

        // ------------
        if( ($_POST['payment'] != $arr[3]) && ($_POST['payment'] != '') ) {
            $payment = $_POST['payment'];
        }

        // ------------
        if( ($_POST['duration'] != $arr[4]) && ($_POST['duration'] != '') ) {
            $duration = $_POST['duration'];
        }

        // -----------
        if( ($_POST['full_part'] != $arr[5]) && ($_POST['full_part'] != '') ) {
            $full_part = $_POST['full_part'];
        }

        // -----------
        if( ($_POST['location'] != $arr[6]) && ($_POST['location'] != '') ) {
            $loc = $_POST['location'];
        }

        //$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $query = "UPDATE advert SET department = '$department', ad_position = '$ad_position', payment = '$payment', duration = '$duration', full_part = '$full_part', loc = '$loc', temporary_ad = 'permanent' WHERE id_of_ad = $id";
        $result = mysqli_query($conn,$query);
        header("Location: ./fy-index-ads.php");
    }

    if(isset($_POST['temporary']))
	{
        $department=$arr[1];
        $ad_position=$arr[2];
        $payment=$arr[3];
        $duration=$arr[4];
        $full_part=$arr[5];
        $loc=$arr[6];
        // ------------
        if( ($_POST['department'] != $arr[1]) && ($_POST['department'] != '') ) {
            $department = $_POST['department'];
        }

        // ------------
        if( ($_POST['ad_position'] != $arr[2]) && ($_POST['ad_position'] != '') ) {
            $ad_position = $_POST['ad_position'];
        }

        // ------------
        if( ($_POST['payment'] != $arr[3]) && ($_POST['payment'] != '') ) {
            $payment = $_POST['payment'];
        }

        // ------------
        if( ($_POST['duration'] != $arr[4]) && ($_POST['duration'] != '') ) {
            $duration = $_POST['duration'];
        }

        // -----------
        if( ($_POST['full_part'] != $arr[5]) && ($_POST['full_part'] != '') ) {
            $full_part = $_POST['full_part'];
        }

        // -----------
        if( ($_POST['loc'] != $arr[6]) && ($_POST['loc'] != '') ) {
            $loc = $_POST['loc'];
        }

        //$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $query = "UPDATE advert SET department = '$department', ad_position = '$ad_position', payment = '$payment', duration = '$duration', full_part = '$full_part', loc = '$loc', temporary_ad = 'temporary' WHERE id_of_ad = $id";
        $result = mysqli_query($conn,$query);
        header("Location: ./fy-index-ads.php");
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
    <title>Επεξεργασία Προφίλ Φορέα Υποδοχής</title>
    
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
            <a class="navbar-brand logo-image" href="fy-index-ads.php"><img src="images/atlas_logo.png" alt="ATLAS logo"></a> 
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll active" href="fy-index-applications.php">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</a>
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
                    <a class="btn-outline-sm" id="edit-profile-btn" href="/edit-profile-fy.php"><?php echo $_SESSION['username'];?></a>
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
            <li> Επεξεργασία Προφίλ Φορέα Υποδοχής </li>
        </ul>
        </br>
        
        <!-- Sign Up Form -->
        <div class="form-container">
            
            <form  action="" method="post">
                <div class="card-3">
                    <!-- ΤΜΗΜΑ, ΓΝΩΣΤΙΚΟ ΑΝΤΙΚΕΙΜΕΝΟ, ΤΙΤΛΟΣ ΣΠΟΥΔΩΝ -->
                    <div class="form-group">
                        <input type="text" class="form-input" name="department">
                        <label class="label-control" for="department"> Τμήμα: <?php echo $arr[1];?> </label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-input" name="ad_position">
                        <label class="label-control" for="ad_position"> Τίτλος Θέσης: <?php echo $arr[2];?> </label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- ΑΜΟΙΒΗ, ΔΙΑΡΚΕΙΑ, ΤΡΟΠΟΣ ΑΠΑΣΧΟΛΗΣΗΣ -->
                    <div class="form-group">
                        <input type="text" class="form-input" name="payment">
                        <label class="label-control" for="payment"> Αμοιβή: <?php echo $arr[3];?> </label>
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
                        <input type="text" class="form-input" name="location">
                        <label class="label-control" for="location"> Τοποθεσία: <?php echo $arr[6];?> </label>
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
                <button type="submit" name="temporary" value="Προσωρινή Αποθήκευση" style="border-radius: 10px;"> Προσωρινή Αποθήκευση </button>
            </form>

        </div> <!-- end of form container -->
        <!-- end of sign up form -->
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