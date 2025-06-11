<?php 
    include "connection.php";

    session_start();
    $idCultivo = trim($_POST["idCultivo"]);
    $dataColheita = trim($_POST["dataColheita"]);
    $quantColheita = trim( $_POST["quantColheita"]);
    $maneiraColheita = trim($_POST["maneiraColheita"]);


        if (isset($_POST["dataColheita"]) && $dataColheita != "" && $quantColheita != "" && $maneiraColheita != "") {

            try{
                $stmt = $connection->prepare("INSERT INTO colheita (dataColheita, quantidadeColheita, maneiraColheita, cultivo_id ) VALUES (:dc, :qc, :mc, :ci)");
                
                $stmt->bindValue(":dc", $dataColheita);
                $stmt->bindValue(":qc", $quantColheita);
                $stmt->bindValue(":mc", $maneiraColheita);
                $stmt->bindValue(":ci", $idCultivo);
                $stmt->execute();

            }catch (PDOException $e) {
                echo "Erro na conexão:". $e->getMessage();
            }
            header("Location: colheita.php");
        }



?>