<?php 
    require "connection.php";
    session_start();

    $id = $_POST["idCultivo"];
    $tc = $_POST["tipoCultivo"];
    $dc = $_POST["dataCultivo"];
    $qc = $_POST["quantCultivo"];

    $stmt = $connection->prepare("UPDATE cultivo SET tipoCultivo = :tc,dataCultivo = :dc, quantidadeCultivo = :qc WHERE idCultivo = :id");
    $stmt->bindValue(":id", $id);            
    $stmt->bindValue(":tc", $tc);
    $stmt->bindValue(":dc", $dc);
    $stmt->bindValue(":qc", $qc);
    $stmt->execute();
            header("Location: cultivo.php");

?>