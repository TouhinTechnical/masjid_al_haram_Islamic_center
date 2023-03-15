<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "donate_db";
    $connection = mysqli_connect($server_name,$user_name,$password,$database_name);

    // database take data anlam
    if($_GET['id']) {
        $getid = $_GET['id'];
        $sql_select = "SELECT * FROM donatelist WHERE id=$getid";
        $query = mysqli_query($connection, $sql_select);
        $data = mysqli_fetch_assoc($query);

        $id             = $data['id'];
        $amount        = $data['amount'];
        $fullName      = $data['fullName'];
        $email          = $data['email'];
        $moblieNumber = $data['moblieNumber'];
        $address       = $data['address'];
        $message       = $data['message'];

    }
    // update method
    if(isset($_POST['update'])){
        $id             = $_POST['id'];
        $amount        = $_POST['amount'];
        $fullName      = $_POST['fullName'];
        $email          = $_POST['email'];
        $moblieNumber = $_POST['moblieNumber'];
        $address       = $_POST['address'];
        $message      = $_POST['message'];

        $sql_update = "UPDATE donatelist SET amount='$amount', fullName='$fullName', email='$email', moblieNumber='$moblieNumber', address='$address', message='$message' WHERE id ='$id' ";

        if(mysqli_query($connection, $sql_update) == TRUE) {
            header('location:donateList.php');
            echo "Data updated";
        }else{
           echo $sql_update. "Data not updated";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon">
        <title>Fatih - Islamic center</title>
        <!-- Icon Links -->
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Custom Links -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
        <!-- Header Part Start -->
        <header class="menuFixed">
            <!-- Menu Area -->
            <div class="navAreaMain">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-2">
                            <div class="logoArea">
                                <a href="index.php">
                                    <img src="assets/image/Logo.png" alt="Fatih" class="logoImg">
                                    <span class="fs-30 fw-bold text-deepSapphire">Fatih</span>
                                </a>
                            </div>
                        </div> <!-- col 2 -->
                        <div class="col-8">
                            <nav class="navArea">
                                <div class="navAreaMenu">
                                    <ul>
                                        <li><a href="index.php" class="text-deepSapphire">home</a></li>
                                        <li><a href="donate.php" class="text-deepSapphire">donate</a></li>
                                        <li><a href="donateList.php" class="text-deepSapphire">donate list</a></li>
                                    </ul>
                                </div>
                            </nav> <!-- navArea -->
                        </div> <!-- col 8 -->
                        <div class="col-2">
                            <div class="navAreaBtn">
                                <a href="#contact" class="themeBtn text-white">contact now</a>
                            </div>
                        </div> <!-- col 2 -->
                    </div> <!-- Row -->
                </div> <!-- container -->
            </div> <!-- navAreaMain -->
        </header>
        <!-- Header Part End -->

        <!-- Donation Part Start -->
        <div class="donateBreadCumbArea">
            <div class="container">
                <div class="row">
                    <div class="col-12 plr-15">
                        <div class="breadcumbWrap tAlign-center">
                            <h2 class="breadcumbWrapTittle fs-40 mb-10 text-Astronaut">donate now</h2>
                            <ul class="breadcumdNav">
                                <li class="breadcumbNavFirst text-Astronaut">
                                    <a href="index.php" class="text-Astronaut">Home</a>
                                </li>
                                <li class="breadcumbNavFirst text-Astronaut">
                                    <a href="donate.php" class="text-Astronaut">Donate</a>
                                </li>
                                <li class="breadcumbNavFirst text-Astronaut">
                                    <a href="donateList.php" class="text-Astronaut">Donate List</a>
                                </li>
                                <li>
                                    <span class="text-Cerulean">Donate List Edit From</span>
                                </li>
                            </ul>
                        </div> <!-- breadcumbWrap -->
                    </div> <!-- col 12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- donateBreadCumbArea -->
        <div class="donatePageArea ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-8 ml-16 plr-15">
                        <div class="donateHeader">
                            <h2 class="donateHeaderTittle text-Astronaut fs-36 fw-bold mb-50 tAlign-center">make a donation edit form </h2>
                        </div> <!-- donateHeader -->
                        <div class="donationFromArea">
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <div class="donationAmount">
                                    <h2 class="donateAmountTittle fs-18 fw-semiBold text-Astronaut mb-30 lh-20">your doantion</h2>
                                    <input type="text" class="donationAmountInput" name="amount" id="text" placeholder="Enter Donation Amount" value="<?php echo  $amount ?>">
                                </div> <!-- donationAmount -->
                                <div class="donationDetails">
                                    <h2 class="donationDetailsTittle fs-18 fw-semiBold text-Astronaut mb-30 lh-20">details</h2>
                                    <div class="row d-flex f-wrap">
                                        <div class="col-12 mb-15 plr-15">
                                            <input type="text" name="id" value="<?php echo $id ?>" class="donationDetailsInput">
                                        </div>
                                        <div class="col-6 mb-15 plr-15">
                                            <input type="text" class="donationDetailsInput" name="fullName" id="fullName" placeholder="Full Name" value="<?php echo $fullName ?>">
                                        </div> <!-- col 6 -->
                                        <div class="col-6 mb-15 plr-15">
                                            <input type="email" class="donationDetailsInput" name="email" id="email" placeholder="Enter your email" value="<?php echo $email ?>">
                                        </div> <!-- col 6 -->
                                        <div class="col-6 mb-15 plr-15">
                                            <input type="text" class="donationDetailsInput" name="moblieNumber" id="moblieNumber" placeholder="Enter valid Moblie Number" value="<?php echo $moblieNumber ?>">
                                        </div> <!-- col 6 -->
                                        <div class="col-6 mb-15 plr-15">
                                            <input type="text" class="donationDetailsInput" name="address" id="address" placeholder="Enter Your Address" value="<?php echo $address ?>">
                                        </div> <!-- col 6 -->
                                        <div class="col-12 mb-15 plr-15">
                                            <textarea name="message" id="message" cols="30" rows="10" class="donationDetailsInput h-135" placeholder="Message">
                                                <?php echo $message ?>
                                            </textarea>
                                        </div> <!-- col 12 -->
                                    </div> <!-- row -->
                                </div> <!-- donationDetails -->
                                <div class="submitArea tAlign-center">
                                    <button type="submit" class="themeBtn submitBtn text-white" name="update">update</button>
                                </div> <!-- submitArea -->
                            </form> <!-- form -->
                        </div> <!-- donationFromArea -->
                    </div> <!-- col 8 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- donatePageArea -->
        <!-- Donation Part End -->

        <!-- Footer Part Start -->
        <section class="footerArea bg-polar" id="contact">
            <div class="topFooter">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-3 plr-15">
                            <div class="widget">
                                <div class="logoArea mb-30">
                                    <a href="index.php">
                                        <img src="assets/image/Logo.png" alt="Fatih" class="logoImg">
                                        <span class="fs-30 fw-bold text-deepSapphire">Fatih</span>
                                    </a>
                                </div>
                                <p class="lh-30 mb-10 text-MineShaft">I have found that among its other benefits, giving liberates the soul of the giver.</p>
                                <ul class="pt-10 of-hidden">
                                    <li>
                                        <a href="#" class="text-Cerulean">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-Cerulean">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-Cerulean">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-Cerulean">
                                            <i class="ti-google"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> <!-- widget -->
                        </div> <!-- col 3 -->
                        <div class="col-3 plr-15">
                            <div class="linkWidget pl-20 of-hidden">
                                <div class="widgetTittle mb-30">
                                    <h3>Service</h3>
                                </div> <!-- widgetTittle -->
                                <ul>
                                    <li>
                                        <a href="#service">
                                            islamic school
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#service">
                                            our causes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            our mission
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            contact us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#event">
                                            our events
                                        </a>
                                    </li>
                                </ul>
                            </div> <!-- linkWidget -->
                        </div> <!-- col 3 -->
                        <div class="col-2 plr-15">
                            <div class="linkWidget pl-20 of-hidden">
                                <div class="widgetTittle mb-30">
                                    <h3>Useful Links</h3>
                                </div> <!-- widgetTittle -->
                                <ul>
                                    <li>
                                        <a href="#about">
                                            about us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#service">
                                            services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            semester
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#timer">
                                            Prayers Times
                                        </a>
                                    </li>
                                </ul>
                            </div> <!-- linkWidget -->
                        </div> <!-- col 2 -->
                        <div class="col-3 plr-15 ml-8">
                            <div class="contactWidget">
                                <div class="widgetTittle mb-30">
                                    <h3>Contact</h3>
                                </div> <!-- widgetTittle -->
                                <p class="lh-30 mb-10 text-MineShaft">I have found that among its other benefits, giving liberates the soul of the giver.</p>
                                <div class="contact-ft mt-20">
                                    <ul>
                                        <li>
                                            <i class="fi ti-location-pin"></i>
                                            28 Street, New York City, USA
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            +000123456789
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            fatih@gmail.com
                                        </li>
                                    </ul>
                                </div> <!-- contact-ft -->
                            </div> <!-- contactWidget -->
                        </div> <!-- col 3 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- topFooter -->
            <div class="buttomFooter tAlign-center">
                <div class="container">
                    <div class="row p-20">
                        <div class="col-12 plr-15">
                            <p class="copyright">© 2023 Fatih. All rights reserved</p>
                        </div> <!-- col 12 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- buttomFooter -->
        </section> <!-- footerArea -->
        <!-- Footer Part End -->
    </body>
</html>