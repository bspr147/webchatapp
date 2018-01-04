<?php

session_start();
$con = mysqli_connect("localhost","id4005687_vimal","King3333","id4005687_mydb");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$mail_webmaster = 'example@example.com';
$url_root = 'http://www.example.com/';
$url_home = 'index.php';
$design = 'default';
?>