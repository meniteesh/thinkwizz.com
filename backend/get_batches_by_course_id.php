<?php
    require "./dbconnection.php";
    $id = $_POST['id'];
    $query = "select * from batches where is_active=1 AND course_id=".$id;
    $statement = $pdo->prepare($query);
    $statement->execute();
    $batches = $statement->fetchAll();
    echo json_encode($batches);
?>
