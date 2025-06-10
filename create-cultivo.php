<?php 
    include "connection.php";
    $cultura = trim($_POST["cultura"]);
    $dataCultura = trim( $_POST["dataCultura"]);
    $quantCultura = trim($_POST["quantCultura"]);
    var_dump($_POST);

        if (isset($_POST["cultura"]) && $cultura != "" && $dataCultura != "" && $quantCultura != "" ) {

            try{
                $stmt = $connection->prepare("INSERT INTO cultivo (tipoCultura, dataPlantio, quantidadePlantio) VALUES (:tc, :dp, :qp)");
                
                $stmt->bindValue(":tc", $cultura);
                $stmt->bindValue(":dp", $dataCultura);
                $stmt->bindValue(":qp", $quantCultura);
                $stmt->execute();

            }catch (PDOException $e) {
                echo "Erro na conexão:". $e->getMessage();
            }
            header("Location: cultivo.php");
        }



?>