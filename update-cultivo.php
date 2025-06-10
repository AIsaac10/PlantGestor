<?php 
    require "connection.php";
    session_start();

    $id = $_POST["idCultivo"];
    $tc = $_POST["tipoCultura"];
    $dp = $_POST["dataPlantio"];
    $qp = $_POST["quantPlantio"];

    $stmt = $connection->prepare("UPDATE cultivo SET tipoCultura = :tc,dataPlantio = :dp, quantidadePlantio = :qp WHERE IDCultivo = :id");
    $stmt->bindValue(":id", $id);            
    $stmt->bindValue(":tc", $tc);
    $stmt->bindValue(":dp", $dp);
    $stmt->bindValue(":qp", $qp);
    $stmt->execute();
            header("Location: cultivo.php");

?>