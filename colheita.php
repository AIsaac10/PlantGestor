<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
    <link rel="stylesheet" href="css/style-page.css">
</head>
<body>
    <header class="headerSecurity">
        <div class="h1PlantGestor">
            <h1 class="headerTitle">
                PlantGestor
            </h1>
        </div>

        <?php
                require "lock.php";
                echo "Bem-vindo " . $_SESSION['usuario_nome'];
        ?>
        <div class="logoutInput">
            <form action="logout.php">
                <input type="submit" value="sair" class="logout">
            </form>
        </div>
    </header>
    <nav>
        <div class="criarElemento">
            <a class="linkNav" href="criar-elemento-colheita.php ">criar elemento</a>
        </div>
        <a class="linkNav" href="cultivo.php">cultivo</a>
        <a class="linkNav" href="colheita.php">colheita</a>
        <a class="linkNav" href="dashboard.php">dashboard</a>
    </nav>
        <div class="h1">
        <h1 class="h1Tipo">
            colheita
        </h1>
    <main>
<?php 
    include "connection.php";
    
    $ui = $_SESSION["usuario_id"];

    $stmt = $connection->prepare("SELECT * FROM colheita WHERE usuario_id = :ui");
    $stmt->bindValue(":ui", $ui);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
?>
    <table>
        <thead>
            <tr>
                <th>ID do Cultivo</th>
                <th>Data da Colheita</th>
                <th>Quantidade da Colheita</th>
                <th>Maneira de Colheita</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while ($colheita = $stmt->fetch(PDO::FETCH_OBJ)) {
            ?>
            <tr>
                <td><?php echo $colheita->cultivo_id ?></td>
                <td><?php echo $colheita->dataColheita ?></td>
                <td><?php echo $colheita->quantidadeColheita ?></td>
                <td><?php echo $colheita->maneiraColheita ?></td>
                <td>
                    <form action="update-colheita-form.php" method="post">
                        <input type="hidden" name="ci" value="<?php echo $colheita->cultivo_id ?>">
                        <input type="hidden" name="dc" value="<?php echo $colheita->dataColheita ?>">
                        <input type="hidden" name="qc" value="<?php echo $colheita->quantidadeColheita ?>">
                        <input type="hidden" name="mc" value="<?php echo $colheita->maneiraColheita ?>">
                        <input type="submit" value="editar" class="submitTableED">
                    </form>
                </td>
                <td>
                    <form action="delete-colheita.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $colheita->id ?>">
                        <input type="submit" value="excluir" class="submitTableEX">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    } else {
        echo "<p class='p'>Crie uma colheita</p>";
    }
?>
     
    </main>
</body>
</html>