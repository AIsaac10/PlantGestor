<?php 
    require "lock.php";
    require "connection.php";
    $id = $_POST["id"];

    $stmt = $connection->prepare("DELETE FROM colheita WHERE id = :id");
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    header("Location: colheita.php");
?>