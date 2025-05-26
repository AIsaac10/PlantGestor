<?php
session_start();
include "connection.php";

$name = trim($_POST["name"] ?? '');
$email = trim($_POST["email"] ?? '');
$senha = trim($_POST["senha"] ?? '');

    if (empty($email) || empty($senha) || empty($name)) {
        echo "Preencha todos os campos.";
        exit;
    }

    $stmt = $connection->prepare("SELECT * FROM usuario WHERE nome = :nome AND email = :email");
    $stmt->bindValue(":nome", $name);
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$usuario) {
        echo "usuário não encontrado";
        exit;
    }

    if ($name !== $usuario["nome"] ) {
        echo "nome de usuário incorreto.";
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