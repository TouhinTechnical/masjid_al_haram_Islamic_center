<!-- PHP code -->
<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "donate_db";
    $connection = mysqli_connect($server_name,$user_name,$password,$database_name);
    
    // delect method
    if(isset($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];
        $delete_sql = "DELETE FROM donateList WHERE id = $deleteid";
        if(mysqli_query($connection, $delete_sql) == TRUE){
            header('location:donateList.php');
        }
    }
?>
<!-- Php code end -->

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
    </head>
    <body>
        <!-- Header Part Start -->
        <header>
            <!-- Menu Area -->
            <div class="navAreaMain">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-2">
                            <div class="logoArea">
                                <a href="index.html">
                                    <img src="assets/image/Logo.png" alt="Fatih" class="logoImg">
                                    <span class="fs-30 fw-bold text-deepSapphire">Fatih</span>
                                </a>
                            </div>
                        </div> <!-- col 2 -->
                        <div class="col-8">
                            <nav class="navArea">
                                <div class="navAreaMenu">
                                    <ul>
                                        <li><a href="index.html" class="text-deepSapphire">home</a></li>
                                        <li><a href="#about" class="text-deepSapphire">about</a></li>
                                        <li><a href="#service" class="text-deepSapphire">service</a></li>
                                        <li><a href="donate.php" class="text-deepSapphire">donate</a></li>
                                        <li><a href="#event" class="text-deepSapphire">event</a></li>
                                        <li><a href="#blog" class="text-deepSapphire">blog</a></li>
                                    </ul>
                                </div>
                            </nav> <!-- navArea -->
                        </div> <!-- col 8 -->
                        <div class="col-2">
                            <div class="navAreaBtn">
                                <a href="#" class="themeBtn text-white">contact now</a>
                            </div>
                        </div> <!-- col 2 -->
                    </div> <!-- Row -->
                </div> <!-- container -->
            </div> <!-- navAreaMain -->
        </header>
        <!-- Header Part End -->

        <!-- Donation Part Start -->
        <section class="donateBreadCumbArea">
            <div class="container">
                <div class="row">
                    <div class="col-12 plr-15">
                        <div class="breadcumbWrap tAlign-center">
                            <h2 class="breadcumbWrapTittle fs-40 mb-10 text-Astronaut">donate list</h2>
                            <ul class="breadcumdNav">
                                <li class="breadcumbNavFirst text-Astronaut">
                                    <a href="index.html" class="text-Astronaut">Home</a>
                                </li>
                                <li class="breadcumbNavFirst text-Astronaut">
                                    <a href="donate.php" class="text-Astronaut">Donate</a>
                                </li>
                                <li>
                                    <span class="text-Cerulean">Donate List</span>
                                </li>
                            </ul>
                        </div> <!-- breadcumbWrap -->
                    </div> <!-- col 12 -->
                </div> <!-- row -->
            </div> <!-- container -->
        </section> <!-- donateBreadCumbArea -->
        <!-- Dynamic Part Donation List -->
        <section class="donationList d-flex alignItem-center justify-center ptb-90 bg-Varden">
            <?php
                $sql = "SELECT * FROM donatelist";
                $query = mysqli_query($connection, $sql);
                // html tag
                echo "<table class='border'>
                        <tr>
                            <th class='ptblr-15 bg-Whisper'>ID</th>
                            <th class='ptblr-15 bg-Whisper'>Name</th>
                            <th class='ptblr-15 bg-Whisper'>E-mail</th>
                            <th class='ptblr-15 bg-Whisper'>Moblie Number</th>
                            <th class='ptblr-15 bg-Whisper'>Address</th>
                            <th class='ptblr-15 bg-Whisper'>Message</th>
                            <th class='ptblr-15 bg-Whisper'>Donation Amount</th>
                            <th class='ptblr-15 bg-Whisper'>Action</th>
                            <th class='ptblr-15 bg-Whisper'>Payment</th>
                        </tr>";
                // loop data
                while($data = mysqli_fetch_assoc($query)){
                    $id = $data['id'];
                    $amount = $data['amount'];
                    $fullName = $data['fullName'];
                    $email = $data['email'];
                    $moblieNumber = $data['moblieNumber'];
                    $address = $data['address'];
                    $message = $data['message'];
                    echo 
                        "<tr>
                            <td class='ptblr-15 bg-Whisper'>$id</td>
                            <td class='ptblr-15 bg-Whisper'>$fullName</td>
                            <td class='ptblr-15 bg-Whisper'>$email</td>
                            <td class='ptblr-15 bg-Whisper'>$moblieNumber</td>
                            <td class='ptblr-15 bg-Whisper'>$address</td>
                            <td class='ptblr-15 bg-Whisper'>$message</td>
                            <td class='ptblr-15 bg-Whisper tAlign-center'>$amount</td>
                            <td class='ptblr-15 bg-Whisper'>
                                <span class='mr-5'>
                                    <a href='edit.php?id=$id' class='text-lavender'>
                                        <i class='fa fa-edit'></i>
                                    </a>
                                </span>
                                <span class='bg-red'>
                                    <a href='donateList.php?deleteid=$id' class='text-lavender'>
                                        <i class='fa fa-trash'></i>
                                    </a>
                                </span>
                            </td>
                            <td class='ptblr-15 bg-Whisper'>
                                <span class='mr-5'>
                                    <a href='#' class='text-lavender'>
                                    <i class='fa fa-paypal'></i>
                                    </a>
                                </span>
                                <span class='bg-red'>
                                    <a href='#' class='text-lavender'>
                                        Cash
                                    </a>
                                </span>
                            </td>
                        </tr>";
                };
            ?>
        </section>
        <!-- Donation Part End -->
    </body>
</html>