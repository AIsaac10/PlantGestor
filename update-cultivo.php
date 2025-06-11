<?php 
    require "connection.php";
    session_start();
    $ui = $_SESSION["usuario_id"];
    $id = $_POST["idCultivo"];
    $tc = $_POST["tipoCultivo"];
    $dc = $_POST["dataCultivo"];
    $qc = $_POST["quantCultivo"];
    $ac = $_POST["areaCultivo"];

    $stmt = $connection->prepare("UPDATE cultivo SET tipoCultivo = :tc, dataCultivo = :dc, quantidadeCultivo = :qc, areaCultivo = :ac, usuario_id = :ui WHERE id = :id");
    $stmt->bindValue(":id", $id);            
    $stmt->bindValue(":tc", $tc);
    $stmt->bindValue(":dc", $dc);
    $stmt->bindValue(":qc", $qc);
    $stmt->bindValue(":ac", $ac);
    $stmt->bindValue(":ui", $ui);
    
    $stmt->execute();
    header("Location: cultivo.php");

?>