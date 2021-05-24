<?php
require "db_auth.php";

$labId = $_POST['labId'];
$taskDescription = $_POST['taskDescription'];
$answerType = $_POST['answerType'];
$rightAnswer = $_POST['rightAnswer'];

$result = $mysqli->query("INSERT INTO `task`(`lab_id`, `task_description`, `answer_type`, `right_answer`) VALUES ($labId, $taskDescription, $answerType, $rightAnswer)");
$row = $result->fetch_assoc();