<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start();
    include("conn_db.php");
    include('head.php'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet">
    <style>
        html {
            height: 100%;
        }
    </style>
    <title>About Us | Tiffin Box</title>
</head>

<body class="d-flex flex-column h-100">
    <?php include('nav_header.php') ?>
    <section class="about py-5">
        <div class="position-relative d-flex text-center text-white promo-banner-bg py-3">
            <div class="p-lg-2 mx-auto my-5">
                <h1 class="display-5 fw-normal">About Us</h1>
                <p class="lead fw-normal">Online Food ordering system of Tiffin Box</p>
            </div>
        </div>

        <!-- About Us Start -->
        <section class="about py-5">
            <div class="container py-md-5">
                <div class="about-w3ls-info text-center mx-auto">
                    <h3 class="tittle-wthree pt-md-5 pt-3">Who we are?</h3>
                    <p class="sub-tittle mt-3 mb-sm-5 mb-4">

                        Tiffin Box is a specially virtual restaurant. We have been serving different various of foods and many more to our customer since 2023. And we have been providing Delivery service.
                        <br> Pokhara-17,Birauta 9816637548
                    </p>
                </div>
            </div>
        </section>
        <!-- About Us End -->
        <!-- Services Start -->

        <!-- Services End -->
    </section>
    <!-- <?php include_once('includes/footer.php'); ?> -->

    <footer class="text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-2 p-2 mb-1 bg-dark text-white">
            <p class="text-white">Copyright © 2023 Tiffin Box. All Rights Reserved. </p>

        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>