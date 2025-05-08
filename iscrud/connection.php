<?php 
try {
$connection = new PDO("mysql:host=localhost;dbname=iscrud;charset=utf8mb4", "root", "");
}catch (PDOException $e) {
    echo "Erro na conexão:". $e->getmessage();
}
?>