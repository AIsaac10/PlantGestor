<?php 
    require "connection.php";
    session_start();
    $id = $_POST["id"];

    $stmt = $connection->prepare("DELETE FROM colheita WHERE id = :id");
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    header("Location: colheita.php");
?>