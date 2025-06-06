<?php 
    include "connection.php";
    session_start();

    $name = trim($_POST["name"]);
    $email = trim( $_POST["email"]);
    $senha = trim($_POST["senha"]);
    $hashSenha = password_hash($senha, PASSWORD_DEFAULT);

    if (isset($_POST["name"]) && $name != "" && $email != "" && $senha != "" ) {
        $stmt = $connection->prepare("SELECT * FROM usuario WHERE email = :email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch();
        if (!$user) {
            try{
                $stmt = $connection->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
                
                $stmt->bindValue(":nome", $name);
                $stmt->bindValue(":email", $email);
                $stmt->bindValue(":senha", $hashSenha);
                $stmt->execute();

            }catch (PDOException $e) {
                echo "Erro na conexão:". $e->getMessage();
            }
            header("Location: index.php");
        }else {
            $_SESSION["erro"] = "usuário já existe";
            header("Location: create-form.php");
            exit;
        }
    }else {
            $_SESSION["erro2"] = "algum campo está vazio";
            header("Location: create-form.php");
            exit;
    }

?>