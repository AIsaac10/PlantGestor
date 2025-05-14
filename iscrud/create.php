<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$senha = $_POST["senha"];

require_once "connection.php";

if (isset($name) && $name != "" && $email != "" && $senha != "" ) {
    try{
        $stmt = $connection->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:nome, :email, :senha)");
        
        $stmt->bindValue(":nome", $name);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();

    }catch (PDOException $e) {
        echo "Erro na conexão:". $e->getmessage();
    }

}else {
    echo "algum campo está vazio";
}
?>