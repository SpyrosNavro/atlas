<?php
    session_start();
    require_once './php/connect.php'; // connect to db
    unset($_SESSION['failure']);

    if(isset($_POST['save_changes']))
	{
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
        $fullname = $_SESSION['fullname'];
        $email = $_SESSION['email'];
        $password = $_SESSION['psw'];
        $phone = $_SESSION['phone'];
        $id_passport = $_SESSION['id_passport'];
        $id_passport_number = $_SESSION['id_passport_number'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
        if ($result) {
            $arr = $result->fetch_array();
        }


        // ------------
        if( ($_POST['username'] != $arr[1]) && ($_POST['username'] != '') ) {
            $username = $_POST['username'];
        }

        // -------------
        if( ($_POST['email'] != $arr[2]) && ($_POST['email'] != '') ) {
            $email = $_POST['email'];
        }

        // ------------
        if( ($_POST['password'] != $arr[3]) && ($_POST['password'] != '') ) {
            $password = $_POST['password'];

            $confirmation = $_POST['confirmation'];
            if ($password != $confirmation) {
                echo "The two passwords do not match\n";
                $_SESSION['failure'] = 'Μη έγκυρα δεδομένα';
            }
        }

        // ------------
        if( ($_POST['fullname'] != $arr[4]) && ($_POST['fullname'] != '') ) {
            $fullname = $_POST['fullname'];
        }

        // ------------
        if( ($_POST['phone'] != $arr[5]) && ($_POST['phone'] != '') ) {
            $phone = $_POST['phone'];
        }

        // -----------
        if( ($_POST['id_passport'] != $arr[6]) && ($_POST['id_passport'] != '') ) {
            $id_passport = $_POST['id_passport'];
        }

        // -----------
        if( ($_POST['id_passport_number'] != $arr[7]) && ($_POST['id_passport_number'] != '') ) {
            $id_passport_number = $_POST['id_passport_number'];
        }
        
        // -------------
        if( ($_POST['company'] != $arr[8]) && ($_POST['company'] != '') ) {
            $company = $_POST['company'];
        }


        //$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $id = $_SESSION['id'];
        $query = "UPDATE user SET username = '$username', email = '$email', psw = '$password', fullname = '$fullname', phone = '$phone', id_passport = '$id_passport', id_passport_number = '$id_passport_number', company='$company' WHERE id = $id";
        $result = mysqli_query($conn,$query);
        
        if ($result)
        {
            $_SESSION['username'] = $username;
            $_SESSION['fullname']=$fullname;
            $_SESSION['email']=$email;
            $_SESSION['psw']=$password;
            $_SESSION['phone']=$phone;
            $_SESSION['id_passport']=$id_passport;
            $_SESSION['id_passport_number']=$id_passport_number;
            $_SESSION['company']=$company;
            
            header("Location: ./fy-index-applications.php");
        }
        else
        {
            $_SESSION['failure'] = 'Μη έγκυρα δεδομένα';
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
                <h6> Βασικά Στοιχεία </h6>
                <div class="form-group">
                    <input type="text" class="form-control-input" name="username"  >
                    <label class="label-control" for="username">Όνομα Χρήστη: <?php echo $_SESSION['username'];?></label>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control-input" name="email"  >
                    <label class="label-control" for="email">Email: <?php echo $_SESSION['email'];?> </label>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control-input" name="company"  >
                    <label class="label-control" for="company">Εταιρία: <?php echo $_SESSION['company'];?> </label>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Κωδικός">
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input type="password" id="confirmation" name="confirmation"  placeholder="Επιβεβαίωση" >
                    <div class="help-block with-errors"></div>
                </div>
                
                <input type="checkbox" onclick="myFunction()">Εμφάνιση κωδικού

                <script>
                function myFunction() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                    var y = document.getElementById("confirmation");
                    if (y.type === "password") {
                        y.type = "text";
                    } else {
                        y.type = "password";
                    }
                }
                </script>

                <hr class="hr-line">

                <h6> Προσωπικά Στοιχεία </h6>

                <div class="form-group">
                    <input type="text" class="form-control-input" name="fullname">
                    <label class="label-control" for="fullname">Ονοματεπώνυμο: <?php echo $_SESSION['fullname'];?></label>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control-input" name="phone"  >
                    <label class="label-control" for="number">Τηλέφωνο: <?php echo $_SESSION['phone'];?></label>
                    <div class="help-block with-errors"></div>
                </div>

                Τύπος Εγγράφου Πιστοποίησης:
                <div class="form-group radio button">
                    <input type="radio" id="id" name="id_passport" value="id" checked> Αστυνομική Ταυτότητα <br>
                    <input type="radio" id="passport" name="id_passport" value="passport"> Διαβατήριο
                </div>

                <div class="form-group">
                    <input type="text" class="form-control-input" name="id_passport_number"  >
                    <label class="label-control" for="id-passport"><?php echo $_SESSION['id_passport_number'];?></label>
                    <div class="help-block with-errors"></div>
                </div>

                <br>
                
                <div class="form-group">
                    <button type="submit" name="save_changes" class="btn">ΑΠΟΘΗΚΕΥΣΗ</button>
                </div>
                <?php 
                if (isset($_SESSION['failure']) && ($_SESSION['failure']!="")) {?>                               
                    <div class="failure" style="margin-bottom: 10px;font-size: 18px;color: red;"><?php echo $_SESSION['failure']; ?></div>
                <?php }?>
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