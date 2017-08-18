<?php
    session_start();

    if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
        header("location: http://localhost/thinkwizz/dashboard.php");
   }else{
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];

        $password = "SELECT * from users where password=".$_POST['password']. " AND email=".$_POST['email'];
        $statement = $pdo->prepare($password);
        $statement->execute();
        $user = $statement->fetchAll();
        var_dump($user);

?>
