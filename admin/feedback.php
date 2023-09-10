<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <?php
    session_start();
    include("../conn_db.php");
    include('../head.php');
    if ($_SESSION["utype"] != "ADMIN") {
        header("location: ../restricted.php");
        exit(1);
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../img/ICON_F.png" rel="icon">
    <link href="../css/main.css" rel="stylesheet">
    <title>Feedback List | </title>
</head>

<body class="d-flex flex-column h-100">

    <?php include('nav_header_admin.php') ?>

    <div class="container pt-2" id="cust-table">

        <?php

        //Output Form Entries from the Database
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tiffinbox";

        //creating connection to database
        $con = mysqli_connect($hostname, $username, $password, $dbname);
        $sql = "SELECT * FROM feedback";
        //fire query
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
        ?>
            <table class="table table-bordered">
                <tr>
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                    </thead>
                </tr>
                <?php
                $sn = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $row['Name'] ?? ''; ?></td>
                        <td><?php echo $row['Email'] ?? ''; ?></td>
                        <td><?php echo $row['Subject'] ?? ''; ?></td>
                        <td><?php echo $row['Message'] ?? ''; ?></td>
                        <td><?php echo $row['Status'] ?? ''; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>
            </table>

            <?php
            ?>
    </div>

    <footer class="footer d-flex flex-wrap justify-content-between align-items-center px-5 py-3 mt-auto bg-secondary text-light">
        <span class="smaller-font">&copy; 2023 Tiffin Box<br /><span class="xsmall-font">All Rights Reserved.</span></span>
        <ul class="nav justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-light" target="_blank" href="https://github.com"><i class="bi bi-github"></i></a></li>
        </ul>
    </footer>
</body>

</html>