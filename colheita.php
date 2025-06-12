<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
    <link rel="stylesheet" href="css/style-dashboard.css">
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
        <h1>
            colheita
        </h1>
    <main>

            <table border = 1px>
                <thead>
                    <tr>
                        <th>
                            ID do Cultivo
                        </th>
                        <th>
                            Data da Colheita
                        </th>
                        <th>
                            Quantidade da Colheita
                        </th>
                        <th>
                            Maneira de Colheita
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "connection.php";
                        
                        $ui = $_SESSION["usuario_id"];

                        $stmt = $connection->prepare("SELECT * FROM colheita WHERE usuario_id = :ui");
                        $stmt->bindValue(":ui", $ui);
                        $stmt->execute();
                        
                        
                        while ($colheita = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                        <tr>
                            <td>
                                <?php echo $colheita->cultivo_id ?>
                            </td>
                            <td>
                                <?php echo $colheita->dataColheita ?>
                            </td>
                            <td>
                                <?php echo $colheita->quantidadeColheita ?>
                            </td>
                            <td>
                                <?php echo $colheita->maneiraColheita ?>
                            </td>


                            <td>
                                <form action="update-colheita-form.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $colheita->id ?>">
                                    <input type="hidden" name="ci" value="<?php echo $colheita->cultivo_id ?>">
                                    <input type="hidden" name="tc" value="<?php echo $colheita->tipoCultivo ?>">
                                    <input type="hidden" name="dc" value="<?php echo $colheita->dataCultivo ?>">
                                    <input type="hidden" name="qc" value="<?php echo $colheita->quantidadeCultivo ?>">
                                    <input type="submit" value="editar">
                                </form>
                            </td>
                           <td>
                                <form action="delete-colheita.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $colheita->id ?>">
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