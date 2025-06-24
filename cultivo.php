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
            <a class="linkNav" href="criar-elemento-cultivo.php">Criar Elemento</a>
        </div>
        <a class="linkNav" href="cultivo.php">Cultivo</a>
        <a class="linkNav" href="colheita.php">Colheita</a>
        <a class="linkNav" href="dashboard.php">Dashboard</a>
    </nav>
    <div class="h1">
        <h1 class="h1Tipo">
            Cultivo
        </h1>
    </div>
    <main>

<?php 
    include "connection.php";
    
    $ui = $_SESSION["usuario_id"];

    $stmt = $connection->prepare("SELECT * FROM cultivo WHERE usuario_id = :ui");
    $stmt->bindValue(":ui", $ui);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
?>
    <table>
        <thead>
            <tr>
                <th>Tipo de Cultura</th>
                <th>Data do Plantio</th>
                <th>Quantidade de Plantio</th>
                <th>Área de Cultura</th>
                <th>Maneira de Plantio da Cultura</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while ($cultivo = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                    <td><?php echo $cultivo->tipoCultivo ?></td>
                    <td><?php echo $cultivo->dataCultivo ?></td>
                    <td><?php echo $cultivo->quantidadeCultivo ?></td>
                    <td><?php echo $cultivo->areaCultivo ?></td>
                    <td><?php echo $cultivo->maneiraCultivo ?></td>
                    <td>
                        <form action="criar-elemento-colheita.php" method="post">
                            <input type="hidden" name="ic" value="<?php echo $cultivo->id ?>">
                            <input type="submit" value="Criar Colheita" class="submitTableCO">
                        </form>
                    </td>
                    <td>
                        <form action="update-cultivo-form.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $cultivo->id ?>">
                            <input type="hidden" name="tc" value="<?php echo $cultivo->tipoCultivo ?>">
                            <input type="hidden" name="dc" value="<?php echo $cultivo->dataCultivo ?>">
                            <input type="hidden" name="qc" value="<?php echo $cultivo->quantidadeCultivo ?>">
                            <input type="hidden" name="ac" value="<?php echo $cultivo->areaCultivo ?>">
                            <input type="hidden" name="mc" value="<?php echo $cultivo->maneiraCultivo ?>">
                            <input type="submit" value="Editar" class="submitTableED">
                        </form>

                    </td>

                    <td>
                        <form action="delete-cultivo.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $cultivo->id ?>">
                            <input type="submit" value="Excluir" class="submitTableEX">
                        </form>
                    </td>
                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    } else {
        echo "<p class='p'>Crie um cultivo</p>";
    }
?>     
    </main>
</body>
</html>