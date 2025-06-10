<?php 
    include "connection.php";
    $cultura = trim($_POST["cultura"]);
    $dataCultura = trim( $_POST["dataCultura"]);
    $quantCultura = trim($_POST["quantCultura"]);
    var_dump($_POST);

        if (isset($_POST["cultura"]) && $cultura != "" && $dataCultura != "" && $quantCultura != "" ) {

            try{
                $stmt = $connection->prepare("INSERT INTO cultivo (tipoCultivo, dataCultivo, quantidadeCultivo) VALUES (:tc, :dc, :qc)");
                
                $stmt->bindValue(":tc", $cultura);
                $stmt->bindValue(":dc", $dataCultura);
                $stmt->bindValue(":qc", $quantCultura);
                $stmt->execute();

            }catch (PDOException $e) {
                echo "Erro na conexão:". $e->getMessage();
            }
            header("Location: cultivo.php");
        }



?>