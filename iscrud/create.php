<?php 
$name = $_POST["name"];
$email = $_POST["email"];
include_once "connection.php";

if (isset($_POST["name"]) && $name != "" && isset($_POST["email"]) && $email != "" ) {
    try{
        $stmt = $connection->prepare("INSERT INTO iscrud (nome, email) VALUES (:nome, :email)");
        
        $stmt->bindValue(":nome", $name);
        $stmt->bindValue(":email", $email);

    }catch (PDOException $e) {
        echo "Erro na conexão:". $e->getmessage();
    }

}else {
    echo "algum campo está vazio";
}
?>