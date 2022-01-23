<?php
    session_start();
    require_once './php/connect.php'; // connect to db
    unset($_SESSION['failure']);

    if(isset($_POST['submit_application']))
	{
		$country_of_university = $_POST["country_of_university"];
		$university = $_POST["university"];
		$title = $_POST["title"];
		$ects = $_POST["ects"];
		$registration_date = $_POST["registration_date"];
		$graduation_date = $_POST["graduation_date"];
		$certificate = $_POST["certificate"];
		$id_card = $_POST["id_card"];
		$research_or_work = $_POST["research_or_work"];

        //$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
		$query = "INSERT INTO applications (country_of_university, university, title, ects, registration_date, graduation_date, certificate, id_card, research_or_work, id_of_person) VALUES ('$country_of_university', '$university', '$title', '$ects', '$registration_date', '$graduation_date', '$certificate', '$id_card', '$research_or_work', '$id_of_person');";
        $result = mysqli_query($conn,$query);
        if ($result && $_SESSION['failure']=='')
        {
			$_SESSION['id_of_application']=mysqli_insert_id($conn);
            $_SESSION['country_of_university']=$country_of_university;
            $_SESSION['university']=$university;
            $_SESSION['title']=$title;
            $_SESSION['ects']=$ects;
            $_SESSION['registration_date']=$registration_date;
            $_SESSION['graduation_date']=$graduation_date;
            $_SESSION['certificate']=$certificate;
            $_SESSION['id_card']=$id_card;
            $_SESSION['research_or_work']=$research_or_work;
            $_SESSION['id_of_person']=$_SESSION['id'];

            header("Location: ./index.php");
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

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Δημιουργία Αίτησης</title>
    
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

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Tivo</a> -->

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
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="applications.php">ΟΙ ΑΙΤΗΣΕΙΣ ΜΟΥ</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ΥΠΗΡΕΣΙΕΣ</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">ΕΝΗΜΕΡΩΣΗ ΑΙΤΟΥΝΤΑ</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">ΣΥΜΠΛΗΡΩΜΑΤΙΚΑ ΑΙΤΗΜΑΤΑ</span></a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">ΑΝΑΚΟΙΝΩΣΕΙΣ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="communication.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">ΣΥΧΝΕΣ ΕΡΩΤΗΣΕΙΣ</a>
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




    
    <!-- Header -->
    <header id="header" class="ex-2-header">
        <div class="container">
            <div class="title">
                <h1>Δημιουργία Αίτησης</h1>
            </div> <!-- end of row -->

            <div class="form-container">
                <form id="signUpForm2" data-toggle="validator" data-focus="false">

                    <div class="form-group">
                        <input type="text" class="form-control-input" id="country_of_university" required>
                        <label class="label-control" for="country_of_university">Χώρα Σπουδών</label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control-input" id="university" required>
                        <label class="label-control" for="university">Πανεπιστήμιο</label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control-input" id="title" required>
                        <label class="label-control" for="title">Τίτλος Σπουδών</label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control-input" id="ects" required>
                        <label class="label-control" for="ects">ECTS</label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control-input" id="registration_date" value="01-05-2018" max="01-20-2022" required>
                        <label class="label-control" for="registration_date">Ημερ. Εγγραφής</label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control-input" id="graduation_date" value="01-05-2018" max="01-20-2022" required>
                        <label class="label-control" for="graduation_date">Ημερ. Αποφοίτησης</label>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        Πτυχίο:
                        <form action="/action_page.php">
                            <input type="file" id="certificate" name="filename">
                        </form>                          
                    </div>

                    <div class="form-group">
                        Ταυτότητα:
                        <form action="/action_page.php">
                            <input type="file" id="id_card" name="filename">
                        </form>                          
                    </div>
                    
                    <br>

                    Τι από τα παρακάτω κάνατε;

                    <div class="form-group"style="margin: 10px;">
                        <input type="checkbox" id="research" name="research">
                        <label for="research">Πτυχιακή</label>
                    </div>

                    <div class="form-group" style="margin: 10px;">
                        <input type="checkbox" id="work" name="work">
                        <label for="work">Πρακτική</label>
                    </div>

                    <div class="form-group" style="margin: 10px;">
                        <input type="checkbox" id="nothing" name="nothing">
                        <label for="nothing">Τίποτα από τα παραπάνω</label>
                    </div>

                    <div class="form-group">
                        Ανεβάστε αντίστοιχο αρχείο:
                        <form action="/action_page.php">
                            <input type="file" id="research_or_work" name="filename">
                        </form>                          
                    </div>

                    <div class="form-message">
                        <div id="smsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
            </div> <!-- end of form container -->
            
            

            <br><br><br>
            <button type="submit" name="submit_application" class="btn"> Υποβολή </a>

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