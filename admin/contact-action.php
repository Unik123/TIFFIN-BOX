<?php
require "../conn_db.php";


if (isset($_POST['contact-name'])) {
    // Datas from form
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $subject = $_POST['contact-subject'];
    $message = $_POST['contact-message'];


    // $contact->addContactInformation();
    // exit;
    $sql = "INSERT INTO feedback (name, email, subject, message, status)
    VALUES ('" . $name . "', '" . $email . "', '" . $subject . "', '" . $message . "', 'notseen')";

    echo $sql;
    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }


    $mysqli->close();
    header("Location:http://localhost/TIFFIN-BOX/index.php");
}
