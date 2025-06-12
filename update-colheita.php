<?php 
    require "connection.php";
    session_start();
    $ui = $_SESSION["usuario_id"];
    $id = $_POST["idColheita"];
    $ic = $_POST["idCultivo"];
    $dc = $_POST["dataColheita"];
    $qc = $_POST["quantColheita"];
    $mc = $_POST["maneiraColheita"];


    $stmt = $connection->prepare("UPDATE colheita SET dataColheita = :dc, quantidadeColheita = :qc, maneiraColheita = :mc, cultivo_id = :ic, usuario_id = :ui WHERE id = :id");
    $stmt->bindValue(":id", $id);            
    $stmt->bindValue(":dc", $dc);
    $stmt->bindValue(":qc", $qc);
    $stmt->bindValue(":mc", $mc);
    $stmt->bindValue(":ic", $ic);
    $stmt->bindValue(":ui", $ui);
    $stmt->execute();
    header("Location: colheita.php");

?>