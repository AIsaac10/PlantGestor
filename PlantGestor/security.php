<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-security.css">
</head>
<body>
    <header id="headerSecurity">
        <h1 id="headerTitle">
            PlantGestor
        </h1>
        <?php
            session_start();
            if (!isset($_SESSION['usuario_nome'])) {
                header("Location: login-form.php");
                exit;
            }
            echo "Bem-vindo " . $_SESSION['usuario_nome'];
        ?>
        <div id="logoutInput">
    <form action="logout.php">
        <input type="submit" value="sair" id="logout">
    </form>
        </div>
    </header>


    <section>

    </section>




</body>
</html>