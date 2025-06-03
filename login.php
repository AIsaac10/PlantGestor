<?php
    session_start();
    include "connection.php";

    $email = trim($_POST["email"] ?? '');
    $senha = trim($_POST["senha"] ?? '');

        if (empty($email) || empty($senha)) {
            echo "Preencha todos os campos.";
            exit;
        }

        $stmt = $connection->prepare("SELECT * FROM usuario WHERE email = :email");
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            $_SESSION["erro"] = "usuário não encontrado";
            header("Location: index.php");
            exit;
        }


        if (!password_verify($senha, $usuario["senha"])) {
            $_SESSION["erro2"] = "senha incorreta";
            header("Location: index.php");
        exit;
        }

    $_SESSION["usuario_id"] = $usuario["id"];
    $_SESSION["usuario_nome"] = $usuario["nome"];
    header("Location: dashboard.php");
    exit;




?>