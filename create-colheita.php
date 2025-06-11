<?php 
    include "connection.php";

    session_start();
    $dataColheita = trim($_POST["dataColheita"]);
    $quantColheita = trim( $_POST["quantColheita"]);
    $maneiraColheita = trim($_POST["maneiraColheita"]);
    $idUser = $_SESSION["usuario_id"];


        if (isset($_POST["cultura"]) && $cultura != "" && $dataCultura != "" && $quantCultura != "" && $areaCultura != "" ) {

            try{
                $stmt = $connection->prepare("INSERT INTO colheita (dataColheita, quantColheita, quantidadeCultivo, areaCultivo, usuario_id) VALUES (:tc, :dc, :qc, :ac, :iu)");
                
                $stmt->bindValue(":tc", $dataColheita);
                $stmt->bindValue(":dc", $quantColheita);
                $stmt->bindValue(":qc", $maneiraColheita);
                $stmt->bindValue(":iu", $idUser);
                $stmt->execute();

            }catch (PDOException $e) {
                echo "Erro na conexão:". $e->getMessage();
            }
            header("Location: cultivo.php");
        }



?>