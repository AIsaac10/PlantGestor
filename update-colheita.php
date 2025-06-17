<?php 
    require "connection.php";
    session_start();
    $ui = $_SESSION["usuario_id"];
    $id = $_POST["idColheita"];
    $ic = $_POST["idCultivo"];
    $dc = $_POST["dataColheita"];
    $qc = $_POST["quantColheita"];
    $mc = $_POST["maneiraColheita"];

        if (isset($_POST["dataColheita"]) && $dc != "" && $qc != "" && $mc != "") {
            $stmt = $connection->prepare("SELECT * FROM cultivo WHERE id = :id");
            $stmt->bindValue(":id", $idCultivo);
            $stmt->execute();
            $ic = $stmt->fetch();
            if ($ic) {
                try{
                    $stmt = $connection->prepare("UPDATE colheita SET dataColheita = :dc, quantidadeColheita = :qc, maneiraColheita = :mc, cultivo_id = :ic, usuario_id = :ui WHERE id = :id");
                    $stmt->bindValue(":id", $id);            
                    $stmt->bindValue(":dc", $dc);
                    $stmt->bindValue(":qc", $qc);
                    $stmt->bindValue(":mc", $mc);
                    $stmt->bindValue(":ic", $ic);
                    $stmt->bindValue(":ui", $ui);
                    $stmt->execute();
                    header("Location: colheita.php");

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