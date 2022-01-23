<?php
    session_start();
    require_once './php/connect.php';
    $error = "";
    $_SESSION['failure']='';

    if(isset($_POST['submit_signup']))
	{
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$country = $_POST["country"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$region = $_POST["region"];
		$email = $_POST["email"];
		$tel = $_POST["tel"];
		$postcode = $_POST["postcode"];
		$type_of_user = $_POST["type_of_user"];
		$password = $_POST["password"];
		$confirmation = $_POST["confirmation"];

		if ($password != $confirmation) 
		{
			echo "The two passwords do not match\n";
            $_SESSION['failure'] = 'Μη έγκυρα δεδομένα';
		}
        //$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
		$query = "INSERT INTO user (firstname, lastname, country, addr, city, region, email, tel, postcode, psw, user_type) VALUES ('$firstname', '$lastname', '$country', '$address', '$city', '$region', '$email', '$tel', '$postcode', '$password', '$type_of_user');";
        $result = mysqli_query($conn,$query);
        if ($result && $_SESSION['failure']=='')
        {
			$_SESSION['id']=mysqli_insert_id($conn);
            $_SESSION['firstname']=$firstname;
            $_SESSION['lastname']=$lastname;
            $_SESSION['country']=$country;
            $_SESSION['city']=$city;
            $_SESSION['region']=$region;
            $_SESSION['email']=$email;
            $_SESSION['tel']=$tel;
            $_SESSION['postcode']=$postcode;
            $_SESSION['password']=$password;
            $_SESSION['type_of_user']=$type_of_user;

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
    <title>Δημιουργία Προφίλ στο ΔΟΑΤΑΠ</title>
    
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
            <div class="row">
                <div class="col-lg-12">
                    <h1>Εγγραφή</h1>
                   <p>Έχετε ήδη λογαριασμό στον ΔΟΑΤΑΠ; <a class="white" href="log-in.php">Συνδεθείτε</a></p> 
                    <!-- Sign Up Form -->
                    <div class="form-container">
                        <form  action="" method="post">
                            Είδος χρήστη:
                            <div class="form-group radio button">
                                
                                <input type="radio" id="Common" name="type_of_user" value="Common" checked> Απλός
                                <input type="radio" id="Manager" name="type_of_user" value="Manager"> Διαχειριστής
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="firstname"  required>
                                <label class="label-control" for="firstname">Όνομα</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="lastname"  required>
                                <label class="label-control" for="lastname">Επίθετο</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="country"  required>
                                <label class="label-control" for="country">Χώρα Διαμονής</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="address"  required>
                                <label class="label-control" for="address">Διεύθυνση Κατοικίας</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="city"  required>
                                <label class="label-control" for="city">Πόλη</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="region"  required>
                                <label class="label-control" for="region">Περιοχή</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control-input" name="postcode"  required>
                                <label class="label-control" for="postcode">ΤΚ</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control-input" name="tel"  required>
                                <label class="label-control" for="tel">Τηλέφωνο</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control-input" name="email" required>
                                <label class="label-control" for="email">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input type="password" id="password" name="password"  placeholder="Κωδικός" required>
                                <div class="help-block with-errors"></div>
                                <br>
                            </div>

                            <div class="form-group">
                                <input type="password" id="confirmation" name="confirmation"  placeholder="Επιβεβαίωση" required>
                                <div class="help-block with-errors"></div>
                                <br>
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


                            <div class="form-group checkbox">
                                <input type="checkbox" id="sterms" value="Agreed-to-Terms" required>Συμφωνώ με τους <a href="privacy-policy.html" style="color:blue !important">Όρους</a> του ΔΟΑΤΑΠ
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit_signup" class="btn">ΕΓΓΡΑΦΗ</button>
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