<?php
ini_set('display_errors', 'off');
$mysqli = new mysqli("localhost", "root", "", "tiffinbox");

if ($mysqli->connect_errno) {
    header("location: db_error.php");
    exit(1);
}

define('SITE_ROOT', realpath(dirname(__FILE__)));
date_default_timezone_set('Asia/Kathmandu');
