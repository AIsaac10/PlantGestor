<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
    <link rel="stylesheet" href="css/style-create-form.css">
</head>
<body>
    <h1 id="titulo">PlantGestor</h1>
    <div class="box">
        <form action="create.php" method="POST">
            <fieldset id="fieldsetCreate">
            <legend id="legendCreate"><b>Cadastrar</b></legend>
                    <br><br>
            <div class="inputBox">
                <label for="name" class="labelInput">Usuário:</label>
                <input type="text" name="name" id= "name" class="input" required>
            </div>
        <br><br>
            <div class="inputBox">
                <label for="email" class="labelInput">E-mail:</label>
                <input type="email" name="email" id= "email" class="input" required>
            </div>
        <br><br>
            <div class="inputBox">
                <label for="senha" class="labelInput">Senha:</label>
                <input type="password" name="senha" id= "senha" class="input" required>
            </div>
        <br><br>
            <input type="submit" id="submitCreate">
            </fieldset>
        </form>
        </div>
        <br>
        <?php
            session_start();

            if (isset($_SESSION["erro"])) {
                echo $_SESSION["erro"];
                session_destroy();
            }
            if (isset($_SESSION["erro2"])) {
                echo $_SESSION["erro2"];
                session_destroy();
            }
        ?>

</body>
</html>