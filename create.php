<?php 
include "connection.php";

$name = trim($_POST["name"]);
$email = trim( $_POST["email"]);
$senha = trim($_POST["senha"]);
$hashSenha = password_hash($senha, PASSWORD_DEFAULT);

if (isset($_POST["name"]) && $name != "" && $email != "" && $senha != "" ) {
    try{
        $stmt = $connection->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
        
        $stmt->bindValue(":nome", $name);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $hashSenha);
        $stmt->execute();

    }catch (PDOException $e) {
        echo "Erro na conexão:". $e->getMessage();
    }
header("Location: login-form.php");
}else {
    echo "algum campo está vazio";
}
?>