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
    $stmt->execute([':email' => $email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);


    if (!$usuario) {
        echo "Usuário não encontrado.";
        exit;
    }

    if (!password_verify($senha, $usuario["senha"])) {
        echo "Senha incorreta.";
        exit;
    }

    $_SESSION["usuario_id"] = $usuario["id"];
    $_SESSION["usuario_nome"] = $usuario["nome"];
    header("Location: security.php");
    exit;
?>