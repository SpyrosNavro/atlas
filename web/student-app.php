<?php
    session_start();
    require_once './php/connect.php'; // connect to db
    unset($_SESSION['failure']);


    // take advert info
    if(isset($_SESSION['id'])){

        $gotid = $_GET['id'];
        $myad = mysqli_query($conn, "SELECT * FROM advert WHERE id_of_ad=$gotid");
        
         
        $arr = mysqli_fetch_array($myad);

    }

    if(isset($_POST['reasoning'])) {
        $reasoning = $_POST["reasoning"];
        $_SESSION['reasoning'] = $reasoning;
    }

    if(isset($_POST['submit_studentapp']))
	{   
        $fullname = $_SESSION['fullname'];
        $email = $_SESSION['email'];
        $phone = $_SESSION["phone"];
        $university = $_SESSION['university_of_student'];
        $department = $_SESSION['university_of_student'];
        $position = $arr[2];
        $payment = $arr[3];
        $full_part = $arr[5];
        $duration = $arr[4];
        $loc = $arr[6];
        $id_of_agency=$arr[7];
        $photo = $_POST["photo"];
        $university_id = $_POST["university_id"];
        $grading = $_POST["grading"];
        $university_certificate = $_POST["university_certificate"];
         
        $accept_refuse = "none"; 
        
        $_SESSION["photo"] = $photo;
        
        $_SESSION["university_certificate"] = $university_certificate; 
    

		$query = "INSERT INTO app (fullname, email, phone, university, department, position, payment, full_part,
         duration, loc, photo, university_id, grading, university_certificate, reasoning, accept_refuse, id_of_agency, cause, temporary_app) VALUES ('$fullname', '$email', '$phone', '$university', '$department', '$position', '$payment', '$full_part', '$duration', '$loc', '$photo', '$university_id', '$grading', '$university_certificate', '$reasoning', '$accept_refuse', $id_of_agency,'', 'permanent');";
        $result = mysqli_query($conn,$query);

        header("Location: ./student-page.php");
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
    <title>ΑΤΛΑΣ</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--<script src="scriptform.js" defer></script> -->
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
                        
                        <a class="navbar-brand logo-image" href="index.php"><img src="images/atlas_logo.png" alt="ATLAS logo"></a> 

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
                    <a class="btn-outline-sm" id="login-btn" href="log-in-seperation.php">ΣΥΝΔΕΣΗ</a>
                </span>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="signup-btn" href="sign-up.php">ΕΓΓΡΑΦΗ</a>
                </span>

                <span class="nav-item" >
                    <a class="btn-outline-sm" id="edit-profile-btn" href="php/edit-profileistudent.php"><?php echo $_SESSION['fullname'];?></a>
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
    
    </br></br></br>


    <ul class="breadcrumb">
        <li><a href="index.php">Αρχική </a></li>
        <li><div class="breadcrumb-item">/</div>
    
        <li> Αναζήτηση Θέσεων</li>
    </ul>


    <div class="navbar2 nav-link active">
        <a href="student-page.php" style="color:rgb(255, 0, 0);">Αναζήτηση θέσεων</a>
        <div class="subnav2 active">
            <button class="subnavbtn">Οι Αιτήσεις μου <i class="fa fa-caret-down"></i></button>
            <div class="subnav2-content">
            <a href="Sprocessing.php">Υπο Επεξεργασία</a>
            <a href="Scommited.php">Υποβεβλημένες</a>
            </div>
        </div> 
    </div>

    
    <button class="btn btn5"  style="text-decoration:none">
        <h6 style="text-decoration:none"><a text-decoration:none href="saved.php">Αποθηκευμένες</a></h6>
    </button>
    

    
        

    <!-- Header -->
    <header id="header" class="ex-2-header">
        
            <h1>Υποβολή Αίτησης</h1>


                    <!-- Application Form -->
            <div class="form-container">
                        <div class="step-row">
                            <div id="progress"></div>
             
                                <div class="step-col"><a href="home.php"><small><b>Βήμα 1</b>
                                    </br>
                                    Προσωπικά Στοιχεία Φοιτητή</small></a>
                                </div>
                    
                                <div class="step-col"><small><b>Βήμα 2</b>
                                    </br>
                                    Στοιχεία Αγγελίας</small>
                                </div>
            
                                <div class="step-col"><small><b>Βήμα 3</b>
                                    </br>
                                    Ζητούμενα Στοιχεία</small>
                                </div>

                                <div class="step-col"><small><b>Τελικό Βήμα</b>
                                    </br>
                                    Προεπισκόπηση</small>
                                </div>

                        </div>

                    <form action="#" class="form" method="post">
                        <div class="form-step form-step-active">

                            <hr class="hr-line">

                            <h6> Προσωπικά Στοιχεία Φοιτητή</h6>

                            </br>
                            <div class="form-group">
                                <label class="label-above" for="name-lastname">Oνοματεπώνυμο</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['fullname'] ?> </label>

                                <input type="text" class="form-control-input mandatory" name="fullname"  readonly>


                                <div class="help-block with-errors"></div>
                            </div>

                           </br>
                            <div class="form-group">
                                
                                <label class="label-above" for="name-lastname">Πανεπιστήμιο</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['university_of_student']; ?> </label>
                                
                                <input type="text" class="form-control-input mandatory" name="university"   readonly>
                                <div class="help-block with-errors"></div>
                            </div>

                            </br>
                            <div class="form-group">
                                <label class="label-above" for="name-lastname">Τμήμα</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['department_of_student']; ?> </label>

                                <input type="text" class="form-control-input mandatory" name="department"   readonly>
                                <div class="help-block with-errors"></div>
                            </div>

                            </br>
                            <div class="form-group">
                                <label class="label-above" for="email">Email</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['email']; ?> </label>

                                <input type="text" class="form-control-input mandatory" name="email"  readonly>
                                
                                <div class="help-block with-errors"></div>
                            </div>

                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Τηλέφωνο Επικοινωνίας</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['phone']; ?> </label>
                                
                                <input type="text" class="form-control-input" name="phone"  readonly>

                                <div class="help-block with-errors"></div>
                            </div>

                        <!---    <script>
                                $(".mandatory").on("keyup",function(){
                                    if($(this).val()==''){
                                        $(".btn").css({  background: 'red'})
                                    }
                                    else{
                                        $(".btn").css({  background: 'transparent'})
                                        
                                    }
                                });
                            </script> --->

                            <br>
                            <div class ="">
                                <button class="btn bfirst width-30 btn-next ml-auto btn-next">Αποθήκευση και Συνέχεια</button>
                            </div>

                            
                        </div>
                        
                    

                        <div class="form-step">
                        

                            <hr class="hr-line">

                            <h6> Στοιχεία Αγγελίας</h6>
                            </br>
                            <div class="form-group">
                                
                                <label class="label-above" for="number">Τίτλος</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[2]; ?> </label>
                                
                                <input type="text" class="form-control-input" name="position"  readonly>
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Πληρωμή</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[3]; ?> </label>
                        
                                <input type="text" class="form-control-input" name="payment"  readonly>

                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Διάρκεια Πρακτικής</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[4]; ?> </label>
                        
                                <input type="text" class="form-control-input" name="duration"  readonly>
                     
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Τοποθεσία</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[6]; ?> </label>
                                <input type="text" class="form-control-input" name="loc"  readonly>
                                
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Part-time/ Full-time</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[5]; ?> </label>
                                <input type="text" class="form-control-input" name="full_part"  readonly>
                               
                                <div class="help-block with-errors"></div>
                            </div>

                        

                            <br>

                            <div class="btns-box">
                                <button class="btn btn2 width-50 btn-prev">Προηγούμενο</button>
                            
                                <button class="btn bt2 width-80 ml-auto btn-next">Αποθήκευση και Συνέχεια</button>
                            </div>
                            <?php 
                            if (isset($_SESSION['failure']) && ($_SESSION['failure']!="")) {?>                               
                                <div class="failure" style="margin-bottom: 10px;font-size: 18px;color: red;"><?php echo $_SESSION['failure']; ?></div>
                            <?php }?>
                        </div>

                        <div class="form-step">

                            <hr class="hr-line">

                            <h6> Ζητούμενα Στοιχεία</h6>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number"> Φωτογραφία </label>

                                <input type="file" class="form-control-input pleft" name="photo"  accept=".pdf" >
                                
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number"> Φοιτητική Ταυτότητα </label>
                                
                                <input type="file" class="form-control-input pleft" type="upload" name="university_id"  accept="application/pdf/vnd.ms-excel" >
                                 
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number"> Αναλυτική Βαθμολογία </label>
                                
                                <input type="file" class="form-control-input pleft" type="upload" name="grading"  accept="application/pdf/vnd.ms-excel" >
                                
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">  Βεβαίωση Πανεπιστημίου </label>

                                <input type="file" class="form-control-input pleft" type="upload" name="university_certificate"  accept="application/pdf/vnd.ms-excel" >
                                 
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">  Περιγράψτε τους λόγους που ενδιαφέρεστε για τη θέση</label>

                                <input type="text" class="form-control-input" name="reasoning"  required>
                                 
                                <div class="help-block with-errors"></div>
                            </div>



                            <br>

                            <div class="btns-box">
                                <button class="btn btn2 width-50  btn-prev">Προηγούμενο</button>

                                <button class="btn bt2 btn-next width-80 ml-auto">Αποθήκευση και Συνέχεια</button>
                            </div>

                        
                        </div>
                        <div class="form-step">

                            <hr class="hr-line">

                            <h6> Προεπισκόπιση </h6>

                            

                                    
                            <h6> Προσωπικά Στοιχεία Φοιτητή</h6>

                            </br>
                            <div class="form-group">
                                <label class="label-above" for="name-lastname">Oνοματεπώνυμο</label>
                                <input type="text" class="form-control-input mandatory" name="fullname"  readonly>

                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['fullname'] ?> </label>

                                <div class="help-block with-errors"></div>
                            </div>

                            </br>
                            <div class="form-group">
                                
                                <label class="label-above" for="name-lastname">Πανεπιστήμιο</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['university_of_student']; ?> </label>
                                
                                <input type="text" class="form-control-input mandatory" name="university"   readonly>
                                <div class="help-block with-errors"></div>
                            </div>

                            </br>
                            <div class="form-group">
                                <label class="label-above" for="name-lastname">Τμήμα</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['department_of_student']; ?> </label>

                                <input type="text" class="form-control-input mandatory" name="department"   readonly>
                                <div class="help-block with-errors"></div>
                            </div>

                            </br>
                            <div class="form-group">
                                <label class="label-above" for="email">Email</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['email']; ?> </label>

                                <input type="text" class="form-control-input mandatory" name="email"  readonly>
                                
                                <div class="help-block with-errors"></div>
                            </div>

                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Τηλέφωνο Επικοινωνίας</label>
                                <label class="label-control" for="name-lastname"> <?php echo $_SESSION['phone']; ?> </label>
                                
                                <input type="text" class="form-control-input" name="phone"  readonly>

                                <div class="help-block with-errors"></div>
                            </div>



                            <br>







                            <hr class="hr-line">

                            <h6> Στοιχεία Αγγελίας</h6>

                            </br>
                            <div class="form-group">
                                
                                <label class="label-above" for="number">Τίτλος</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[2]; ?> </label>
                                
                                <input type="text" class="form-control-input" name="position"  readonly>
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Πληρωμή</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[3]; ?> </label>

                                <input type="text" class="form-control-input" name="payment"  readonly>

                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Διάρκεια Πρακτικής</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[4]; ?> </label>

                                <input type="text" class="form-control-input" name="duration"  readonly>

                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Τοποθεσία</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[6]; ?> </label>
                                <input type="text" class="form-control-input" name="loc"  readonly>
                                
                                <div class="help-block with-errors"></div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label class="label-above" for="number">Part-time/ Full-time</label>
                                <label class="label-control" for="name-lastname"> <?php echo $arr[5]; ?> </label>
                                <input type="text" class="form-control-input" name="full_part"  readonly>

                                <div class="help-block with-errors"></div>
                            </div>



                            <br>



                            

                            <hr class="hr-line">








                            <div class="form-group checkbox">
                                <input type="checkbox" id="sterms" value="Agreed-to-Terms" required>Συμφωνώ με τους <a href="privacy-policy.html" style="color:blue !important">Όρους</a> του ΑΤΛΑΣ
                                <div class="help-block with-errors"></div>
                            </div>




                            <br>

                            <div class="btns-box">
                                <button class="btn btn2 width-50  btn-prev">Προηγούμενο</button>

                                <button class="btn width-50 ml-auto">Προσωρινή Αποθήκευση</button>
                            </div>
                            </br>
                            <?php  $accept_refuse=0; ?>
                            <button class="btn btn3" name="submit_studentapp">Οριστική Υποβολή</button>
                
                            <?php 
                            if (isset($_SESSION['failure']) && ($_SESSION['failure']!="")) {?>                               
                                <div class="failure" style="margin-bottom: 10px;font-size: 18px;color: red;"><?php echo $_SESSION['failure']; ?></div>
                            <?php }?>
                        </div>
                    </form>



            </div> <!-- end of form container -->
                    <!-- end of form -->

    


    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <script type="text/javascript">
            const prevBtns = document.querySelectorAll(".btn-prev");
            const nextBtns = document.querySelectorAll(".btn-next");
            const progress = document.getElementById("progress");
            const formSteps = document.querySelectorAll(".form-step");
            const progressSteps = document.querySelectorAll(".progress-step");
            

            
            let formStepsNum = 0;

            console.log(nextBtns);
            
            


            nextBtns.forEach((btn) => {
                btn.addEventListener("click", () => {
                    formStepsNum++;
                    if(formStepsNum==1){
                        progress.style.width="360px";
                    }
                    if(formStepsNum==2){
                        progress.style.width="540px";
                    }
                    if(formStepsNum==3){
                        progress.style.width="725px";
        
                    }
                    updateFormSteps();
                });
            });

            prevBtns.forEach((btn) => {
                btn.addEventListener("click", () => {
                    formStepsNum--;
                    if(formStepsNum==0){
                        progress.style.width="180px";
                    }
                    if(formStepsNum==1){
                        progress.style.width="360px";
                    }
                    if(formStepsNum==2){
                        progress.style.width="540px";
                    }
                    if(formStepsNum==3){
                        progress.style.width="725px";
        
                    }
                    updateFormSteps();
                });
            });
            


            function updateFormSteps() {
                formSteps.forEach((formStep) => {
                    formStep.classList.contains("form-step-active") &&
                    formStep.classList.remove("form-step-active");
                });

                formSteps[formStepsNum].classList.add("form-step-active");
                
            }
            
            console.log(nextBtns)
    
    </script>

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