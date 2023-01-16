<?php
    session_start();
    require_once './php/connect.php'; // connect to db
    $error = "";
    $_SESSION['failure']='';

    if(isset($_POST['submit_signup']))
	{
        $department = $_POST["department"];
		$ad_position = $_POST["ad_position"];
		$payment = $_POST["payment"];
        $duration = $_POST["duration"];
		$full_part = $_POST["full_part"];
        $location = $_POST["location"];

		$confirmation = $_POST["confirmation"];

		if ($password != $confirmation) 
		{
			echo "The two passwords do not match\n";
            $_SESSION['failure'] = 'Μη έγκυρα δεδομένα';
		}
        //$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
		$query = "INSERT INTO advert (department, ad_position, payment, duration, full_part, location, id_passport_number) VALUES ('$department', '$ad_position', '$payment', '$duration', '$full_part', '$id_passport', '$id_passport_number');";
        $result = mysqli_query($conn,$query);
        if ($result && $_SESSION['failure']=='')
        {
			$_SESSION['id']=mysqli_insert_id($conn);
            $_SESSION['ad_position']=$ad_position;
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['phone']=$phone;
            $_SESSION['id_passport']=$id_passport;
            $_SESSION['id_passport_number']=$id_passport_number;
            
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
        <div class="card-3">

            <!-- ΤΜΗΜΑ, ΓΝΩΣΤΙΚΟ ΑΝΤΙΚΕΙΜΕΝΟ, ΤΙΤΛΟΣ ΣΠΟΥΔΩΝ -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="univeristy-departments"> Τμήμα </label>
            <select id="university-departments" name="univeristy-departments" style="width: 36rem;margin:0.5rem;">
                <option value="ekpa"> Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών </option>
                <option value="opa"> Οικονομικό Πανεπιστήμιο Αθηνών </option>
                <option value="panteio"> Πάντειο </option>
            </select>
            
            <br>
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="knowledge"> Γνωστικό Αντικείμενο </label>
            <select id="knowledge" name="knowledge" style="width: 29rem;margin:0.5rem;">
                <option value="ekpa"> Συστήματα </option>
                <option value="opa"> Software Design </option>
                <option value="panteio"> Οικονομικά </option>
            </select> 

            <div class="form-group">
                <input type="text" class="form-input" name="lastname"  required>
                <label class="label-control" for="email"> Τίτλος Θέσης </label>
                <div class="help-block with-errors"></div>
            </div>

            <!-- ΑΜΟΙΒΗ, ΔΙΑΡΚΕΙΑ, ΤΡΟΠΟΣ ΑΠΑΣΧΟΛΗΣΗΣ -->
            <div class="form-group">
                <input type="text" class="form-input" name="lastname"  required>
                <label class="label-control" for="email"> Αμοιβή </label>
                <div class="help-block with-errors"></div>
            </div>
            
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Διάρκεια:</p>
            <div class="form-group radio button">
                &nbsp;<input type="radio" id="three-months" name="type_of_user" value="Common" checked> 3 μήνες
                &nbsp;<input type="radio" id="six-months" name="type_of_user" value="Manager"> 6 μήνες
            </div>

            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Απασχόληση:</p>
            <div class="form-group radio button">
                &nbsp;<input type="radio" id="Common" name="type_of_user" value="Common" checked> Πλήρης
                &nbsp;<input type="radio" id="Manager" name="type_of_user" value="Manager"> Μερική
            </div>

            <!-- ΤΟΟΘΕΣΙΑ, ΗΜΕΡΟΜΗΝΙΑ ΕΚΤΕΛΕΣΗΣ, ΘΕΣΕΙΣ -->
            <div class="form-group">
                <input type="text" class="form-input" name="lastname"  required>
                <label class="label-control" for="email"> Τοποθεσία </label>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
                <input type="text" class="form-input" name="lastname"  required>
                <label class="label-control" for="email"> Ημερομηνία εκτέλεσης </label>
                <div class="help-block with-errors"></div>
            </div>
            
            <p style="margin:0rem; color:#555;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Θέσεις</p>
            <form>
                <input type="number" id="number" value="0" style="margin-left:25px;" />
            </form>
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
        <input type="submit" value="Οριστική Υποβολή" style="margin: 15px;background-color: #4c51af;color: white;margin: 15px;background-color: #4c51af;color: white;border-radius: 10px;" /> <br>
        <input type="submit" value="Προσωρινή Αποθήκευση" style="border-radius: 10px;"/>
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