<?php
require "./config.php";

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$deleteSql = "deletr from contact where ";

?>