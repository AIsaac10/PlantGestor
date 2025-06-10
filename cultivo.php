<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
    <link rel="stylesheet" href="style-dashboard.css">
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
            <a class="linkNav" href="criar-elemento-cultivo.php">criar elemento</a>
        </div>
        <a class="linkNav" href="cultivo.php">cultivo</a>
        <a class="linkNav" href="colheita.php">colheita</a>
        <a class="linkNav" href="adubacao.php">adubação</a>
        <a class="linkNav" href="dashboard.php">dashboard</a>
    </nav>
    <div class="h1">
        <h1>
            cultivo
        </h1>
    </div>
    <main>

            <table border = 1px>
                <thead>
                    <tr>
                        <th>
                            ID do Cultivo
                        </th>
                        <th>
                            Tipo de Cultura
                        </th>
                        <th>
                            Data do Plantio
                        </th>
                        <th>
                            Quantidade de Plantio
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "connection.php";

                        $stmt = $connection->prepare("SELECT * FROM cultivo");
                        $stmt->execute();
                        
                        
                        while ($cultivo = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                        <tr>
                            <td>
                                <?php echo $cultivo->IDCultivo ?>
                            </td>
                            <td>
                                <?php echo $cultivo->tipoCultura ?>
                            </td>
                            <td>
                                <?php echo $cultivo->dataPlantio ?>
                            </td>
                            <td>
                                <?php echo $cultivo->quantidadePlantio ?>
                            </td>
                            <td>
                                <form action="update-cultivo-form.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $cultivo->IDCultivo ?>">
                                    <input type="hidden" name="tc" value="<?php echo $cultivo->tipoCultura ?>">
                                    <input type="hidden" name="dp" value="<?php echo $cultivo->dataPlantio ?>">
                                    <input type="hidden" name="qp" value="<?php echo $cultivo->quantidadePlantio ?>">
                                    <input type="submit" value="editar">
                                </form>
                            </td>
                            <td>
                                <form action="delete.php" method="post">
                                    <input type="submit" value="excluir">
                                </form>
                            </td>
                        </tr>
                        <?php }?>
                </tbody>
            </table>       
    </main>
</body>
</html>