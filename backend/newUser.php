<?php
    session_start();
    require 'dbconnection.php';

   if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
        header("location: http://localhost/thinkwizz/index.php");
   }else{
        //check user from the database with given email
        $query = "SELECT * from users where email='".$_POST['email']."'";
        $statement = $pdo->prepare($query);
        $statement->execute();
        if(!$statement->rowCount()){
            // Insert User
            $query = "INSERT INTO users (name, email, gender, mobile, date_of_birth, password) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["gender"]."','".$_POST["mobile"]."','".$_POST["date_of_birth"]."','".$_POST["password"]."')";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $userId = $pdo->lastInsertId();

            //Insert Batch
            $query = "INSERT into batch_users (user_id, batch_id, course_id) values (".$pdo->lastInsertId().", ".$_POST['batchtime'].", ".$_POST['course'].")";
            $statement = $pdo->prepare($query);
            $statement->execute();

            //Insert Role
            $query = "INSERT into roles (name, description, user_id, display_name) values ('student', 'Student Role', ".$userId.", 'Student')";
            $statement = $pdo->prepare($query);
            $statement->execute();

            //set session
            $_SESSION['email'] = $_POST['email'];
            header("location: http://localhost/thinkwizz/index.php");
        }else{
            $_SESSION['error'] = 'User already exists!';
            header("location: http://localhost/thinkwizz/signup.php");
        }

    }
 ?>
