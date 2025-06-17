<?php 
    include "connection.php";
    session_start();
    $idCultivo = trim($_POST["idCultivo"]);
    $dataColheita = trim($_POST["dataColheita"]);
    $quantColheita = trim( $_POST["quantColheita"]);
    $maneiraColheita = trim($_POST["maneiraColheita"]);
    $idUser = $_SESSION["usuario_id"];


        if (isset($_POST["dataColheita"]) && $dataColheita != "" && $quantColheita != "" && $maneiraColheita != "") {
        $stmt = $connection->prepare("SELECT * FROM cultivo WHERE id = :id");
        $stmt->bindValue(":id", $idCultivo);
        $stmt->execute();
        $ic = $stmt->fetch();
        if ($ic) {
            try{
                $stmt = $connection->prepare("INSERT INTO colheita (dataColheita, quantidadeColheita, maneiraColheita, cultivo_id, usuario_id ) VALUES (:dc, :qc, :mc, :ci, :ui)");
                
                $stmt->bindValue(":dc", $dataColheita);
                $stmt->bindValue(":qc", $quantColheita);
                $stmt->bindValue(":mc", $maneiraColheita);
                $stmt->bindValue(":ci", $idCultivo);
                $stmt->bindValue(":ui", $idUser);
                $stmt->execute();

            }catch (PDOException $e) {
                echo "Erro na conexão:". $e->getMessage();
            }
            header("Location: colheita.php");
            exit;
        }else {
            $_SESSION["erroId"] = "O id do cultivo não existe";
            header("Location: criar-elemento-colheita.php");
            exit;

        }
    }



?>