<?php 
    include "connection.php";
    session_start();
    $tipoCultura = trim($_POST["tipoCultura"]);
    $dataCultura = trim( $_POST["dataCultura"]);
    $quantCultura = trim($_POST["quantCultura"]);
    $areaCultura = trim($_POST["areaCultura"]);
    $idUser = $_SESSION["usuario_id"];


        if (isset($_POST["tipoCultura"]) && $tipoCultura != "" && $dataCultura != "" && $quantCultura != "" && $areaCultura != "" ) {

            try{
                $stmt = $connection->prepare("INSERT INTO cultivo (tipoCultivo, dataCultivo, quantidadeCultivo, areaCultivo, usuario_id) VALUES (:tc, :dc, :qc, :ac, :iu)");
                
                $stmt->bindValue(":tc", $tipoCultura);
                $stmt->bindValue(":dc", $dataCultura);
                $stmt->bindValue(":qc", $quantCultura);
                $stmt->bindValue(":ac", $quantCultura);
                $stmt->bindValue(":iu", $idUser);
                $stmt->execute();

            }catch (PDOException $e) {
                echo "Erro na conexão:". $e->getMessage();
            }
            header("Location: cultivo.php");
        }



?>