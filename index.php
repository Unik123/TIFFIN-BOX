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
    <link rel="stylesheet" href="css/index.css">
    <title> Tiffin Box</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body class="d-flex flex-column h-100">

    <?php include('nav_header.php') ?>

    <div class="position-relative d-flex text-center text-white promo-banner-bg py-3">
        <div class="p-lg-2 mx-auto my-5">
            <h1 class="display-5 fw-normal">Welcome to Tiffin Box</h1>
            <p class="lead fw-normal">Online Food ordering system of Tiffin Box</p>
        </div>
    </div>

    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Foods</em></h2>
                        <br>
                        <p>We provide best quality foods from different kitchens at best prices.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/2323.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Combo</h4>




                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/10_1.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Chicken Barbeque</h4>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/22_3.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Chicken Biryani</h4>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/14_2.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Meat Bowl </h4>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/29_3.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Plain Rice</h4>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/16_2.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Vegetable Boil</h4>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/38_2.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Chicken Pizza</h4>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/13_2.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Rice Bowl</h4>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="img/40_5.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                            </span>

                            <h4>Cheese Pizza</h4>


                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="container p-5" id="recommended-shop">
            <h2 class="border-bottom pb-2"><i class="bi bi-shop align-top"></i>Recommended For You</h2>

            <!-- GRID SHOP SELECTION -->
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

                <?php
                $query = "SELECT s_id,s_name,s_openhour,s_closehour,s_status,s_preorderstatus,s_pic FROM shop
            WHERE (s_preorderstatus = 1) OR (s_preorderstatus = 0 AND (CURTIME() BETWEEN s_openhour AND s_closehour));";
                $result = $mysqli->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {
                ?>
                        <!-- GRID EACH SHOP -->
                        <div class="col">
                            <a href="<?php echo "shop_menu.php?s_id=" . $row["s_id"] ?>" class="text-decoration-none text-dark">
                                <div class="card rounded-25">
                                    <img <?php
                                            if (is_null($row["s_pic"])) {
                                                echo "src='img/default.png'";
                                            } else {
                                                echo "src=\"img/{$row['s_pic']}\"";
                                            }
                                            ?> style="width:100%; height:175px; object-fit:cover;" class="card-img-top rounded-25 img-fluid" alt="<?php echo $row["s_name"] ?>">
                                    <div class="card-body">
                                        <h4 name="shop-name" class="card-title"><?php echo $row["s_name"] ?></h4>
                                        <p class="card-subtitle">
                                            <?php
                                            $now = date('H:i:s');
                                            if ((($now < $row["s_openhour"]) || ($now > $row["s_closehour"])) || ($row["s_status"] == 0)) {
                                            ?>
                                                <span class="badge rounded-pill bg-danger">Closed</span>
                                            <?php } else { ?>
                                                <span class="badge rounded-pill bg-success">Open</span>
                                            <?php }
                                            if ($row["s_preorderstatus"] == 1) {
                                            ?>
                                                <span class="badge rounded-pill bg-success">Pre-order Available</span>
                                            <?php } else { ?>
                                                <span class="badge rounded-pill bg-danger">Pre-order Unavailable</span>
                                            <?php } ?>
                                        </p>
                                        <?php
                                        $open = explode(":", $row["s_openhour"]);
                                        $close = explode(":", $row["s_closehour"]);
                                        ?>
                                        <p class="card-text my-2">Open hours:
                                            <?php echo $open[0] . ":" . $open[1] . " - " . $close[0] . ":" . $close[1]; ?></p>
                                        <div class="text-end">
                                            <a href="<?php echo "shop_menu.php?s_id=" . $row["s_id"] ?>" class="btn btn-sm btn btn-primary">Go to shop</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END GRID EACH SHOPS -->
                    <?php }
                } else {
                    ?>
                    <div class="row row-cols-1 w-100">
                        <div class="col mt-4 pt-3 px-3 bg-danger text-white rounded text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            <p class="ms-2 mt-2">No shop currently available to order.</p>
                        </div>
                    </div>
                <?php
                }
                $result->free_result();
                ?>
            </div>
            <!-- END GRID SHOPS SELECTION -->

            <section class="last-content py-5">
                <div class="container py-md-3 text-center">
                    <div class="last-lavi-inner-content px-lg-5 ">
                        <h3 class="mb-4 tittle-wthree">Get started with <span>Online </span> Ordering !</h3>
                        <p class="px-lg-5">You are only few steps away from getting close to us. <br>If you haven't registerd yet, what are you waiting for... Just simply register and order our products online <br></p>
                        <div class="buttons mt-md-4 mt-3">


                            <?php if (!isset($_SESSION['cid'])) { ?>
                                <a class="btn btn-primary me-2" href="cust_regist.php">Register</a>
                                <a class="btn btn-success" href="cust_login.php">Log In</a>
                            <?php } else { ?>


                                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                                    <li class="nav-item">
                                        <a class="nav-link px-2 text-dark">
                                            Welcome <?= $_SESSION['firstname']; ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                            </svg>
                                            , You Have logged in.
                                        </a>
                                        <!-- </li>
                    <li class="nav-item"> -->
                                        <a class="mx-2 mt-1 mt-md-0 btn btn-outline-danger" href="logout.php">Log Out</a>
                                    </li>
                                </ul>
                            <?php } ?>


                        </div>
                    </div>
                </div>
            </section>
            <br>

            <div class="position-relative d-flex text-center text-white promo-banner-bg py-3">
                <div class="p-lg-2 mx-auto my-5">
                    <h2>Send Us A Message</h2>
                    <p class="lead fw-normal"><i>"Good food is the foundation of genuine happiness and laughter."</i></p>
                    <center><a class="btn btn-primary me-1" href="contact.php">Contact Us</a></center>
                </div>
            </div>

        </div>
        <footer class=" text-center text-white">
            <!-- Copyright -->
            <div class="text-center p-2 p-2 mb-1 bg-dark text-white absolute">
                <p class="text-white">Copyright © 2023 Tiffin Box. All Rights Reserved. </p>

            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>