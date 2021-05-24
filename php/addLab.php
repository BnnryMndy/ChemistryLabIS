<?php
require "db_auth.php";

$teacherLogin = $_POST['Login'];
$labNumber = $_POST['labNumber'];
$labName = $_POST['labName'];
$classId = $_POST['labClass'];
$releaseDate = $_POST['releaseDate'];
$deadline = $_POST['deadline'];


$result = $mysqli->query("INSERT INTO `labs`(`teacher_login`, `class_id`, `deadline`, `lab_number`, `lab_name`, `release_date`) VALUES ( $teacherLogin, $classId, $deadline, $labNumber, $labName, $releaseDate)");
$row = $result->fetch_assoc();

$result = $mysqli->query("SELECT max(lab_id) as last_id FROM `labs`");
$row = $result->fetch_assoc();

echo $row['max(lab_id)'];