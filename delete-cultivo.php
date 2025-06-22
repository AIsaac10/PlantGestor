<?php 
    require "lock.php";
    require "connection.php";
    $id = $_POST["id"];

    $stmt = $connection->prepare("DELETE FROM cultivo WHERE id = :id");
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    header("Location: cultivo.php");
?>