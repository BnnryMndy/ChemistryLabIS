<?
require "db_auth.php";
$login = $_COOKIE['Login'];

$result = $mysqli->query("SELECT * FROM `teachers` WHERE lower(`teacher_login`) = lower('$login') ");
$row = $result->fetch_assoc();

$firstName = $row['Second_Name'];
$fatherName = $row['Father_Name'];