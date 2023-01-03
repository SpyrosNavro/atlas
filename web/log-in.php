<?php
    session_start();
    require_once './php/connect.php';
    if(isset($_POST['submit']))
    {

        $_SESSION['failure'] ="";
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $result = mysqli_query($conn,"SELECT * FROM user WHERE email='$email' AND psw='$password'");
    
        if ($result)
        {

            $arr = $result->fetch_array();
            if ($arr)
            {
                $_SESSION['id']=$arr[0];
                $_SESSION['firstname']=$arr[1];
                $_SESSION['lastname']=$arr[2];
                $_SESSION['country']=$arr[3];
                $_SESSION['address']=$arr[4];
                $_SESSION['city']=$arr[5];
                $_SESSION['region']=$arr[6];
                $_SESSION['email']=$arr[7];
                $_SESSION['tel']=$arr[8];
                $_SESSION['postcode']=$arr[9];
                $_SESSION['password']=$arr[10];
                $_SESSION['type_of_user']=$arr[11];

                //header("Location: ./index.php");
            }
            else
            {
                $_SESSION['failure'] = 'Λάθος email ή κωδικός.';
            }
        }
        else
        {
            $_SESSION['failure'] = 'Λάθος email ή κωδικός.';
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

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Σύνδεση ΑΤΛΑΣ</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    
	<!-- Favicon  -->
    <!-- <link rel="icon" href="images/doatap_logo.png"> -->
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
                        <a class="nav-link page-scroll" href="index.php">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</a>
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
    </br></br>

    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Σύνδεση</h1>
                   <p>Δεν έχετε λογαριασμό; <a class="white" href="sign-up.php">Εγγραφή</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control-input" name="email" required>
                                <label class="label-control" for="email">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" name="password" required>
                                <label class="label-control" for="password">Κωδικός</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn">ΣΥΝΔΕΣΗ</button>
                            </div>
                            <?php 
                            if (isset($_SESSION['failure']) && ($_SESSION['failure']!="")) {?>                               
                                <div class="failure" style="margin-bottom: 10px;font-size: 18px;color: red;"><?php echo $_SESSION['failure']; ?></div>
                            <?php }?>

                        </form>
                    </div> <!-- end of form container -->
                    <!-- end of sign up form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Footer -->
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
</body>
</html>