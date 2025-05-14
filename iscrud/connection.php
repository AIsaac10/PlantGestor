<?php 
try {
    $connection = new PDO("mysql:host=localhost;dbname=PlantGestor;charset=utf8mb4", "root", "");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e) {
    echo "Erro na conexão:". $e->getmessage();
}
?>