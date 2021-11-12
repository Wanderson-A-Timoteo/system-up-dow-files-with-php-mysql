<?php

$server = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "up_dow_files";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

$base_url = "http://localhost/AAAAAAAA/Complete%20File%20Upload%20&%20Download%20System%20Using%20PHP%20&%20MySQL/"; // Website url
