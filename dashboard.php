<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-dashboard.css">
</head>
<body>
    <header id="headerSecurity">
        <div id="h1PlantGestor">
        <h1 id="headerTitle">
            PlantGestor
        </h1>
        </div>

        <?php
            require "lock.php";
            echo "Bem-vindo " . $_SESSION['usuario_nome'];
        ?>
        <div id="logoutInput">
    <form action="logout.php">
        <input type="submit" value="sair" id="logout">
    </form>
        </div>
    </header>

<nav>
    <div id="criarElemento">
<a href="">criar elemento</a>

    </div>
<a href="cultivo.php">cultivo</a>
<a href="colheita.php">colheita</a>
<a href="adubação.php">adubação</a>
<a href="dashboard.php">dashboard</a>
</nav>




</body>
</html>