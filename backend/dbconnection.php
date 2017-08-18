<?php
    try {
        $pdo= new PDO('mysql:host=127.0.0.1;dbname=thinkwizz', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    // $statement = $pdo->prepare("select * from student_registration");
    // $statement->execute();
    // var_dump($statement->fetchAll());
?>
