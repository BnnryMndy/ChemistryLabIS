<?php require "php/db_auth.php"?>

<?php
        $login = $_POST['login'];
        $passwrd = $_POST['password'];
 
        $result = $mysqli->query("SELECT COUNT(*) FROM `students` WHERE lower(`Student_login`) = lower('$login') and `Password` = '$passwrd' ");
        $row = $result->fetch_assoc();
        if(1 == $row['COUNT(*)']){
            setcookie('Login', $login, mktime(). time()+60*60*24*30);
            header("Location: http://localhost/ChemistryLabs/StudentCabinet.php");
        }
        else{
            $result = $mysqli->query("SELECT COUNT(*) FROM `teachers` WHERE lower(`teacher_login`) = lower('$login') and `Password` = '$passwrd' ");
            $row = $result->fetch_assoc();
            if(1 == $row['COUNT(*)']){
                setcookie('Login', $login, mktime(). time()+60*60*24*30);
                header("Location: http://localhost/ChemistryLabs/TeacherCabinet.php");
            }
        }
    ?>