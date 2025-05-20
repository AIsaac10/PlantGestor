<?php
session_start();
if (!isset($_SESSION['usuario_nome'])) {
    header("Location: login-form.php");
    exit;
}
echo "Bem-vindo " . $_SESSION['usuario_nome'];
?>

<form action="logout.php">
<input type="submit" value="sair">
</form>