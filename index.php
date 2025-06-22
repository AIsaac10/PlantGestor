<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
    <link rel="stylesheet" href="css/style-login-form.css">
</head>
<body>
    <div id="login">
        <h1 id="titulo">PlantGestor</h1>
        
        <form action="login.php" method="POST" id ="formLogin">
            
            <div class="inputBox">
                <label for="email" class="labelInput">E-mail:</label>
                <input type="email" name="email" id= "email" class="input" required>
            </div>
            <div class="inputBox">
                <label for="senha" class="labelInput">Senha:</label>
                <input type="password" name="senha" id= "senha" class="input" required>
            </div>
            <input type="submit" id="submitLogin" value="Entrar">
        </form>
        <br>
        <?php
            session_start();

            if (isset($_SESSION["erro"])) {
                echo $_SESSION["erro"];
                session_unset();
            }
            if (isset($_SESSION["erro2"])) {
                echo $_SESSION["erro2"];
                session_unset();
            }
        ?>
    </div>
    <div id="cadastrar">
        <form action="create-form.php" id="formCadastrar">
                    <h1>NOVO AQUI?</h1>
        <p id="pCadastro">crie uma conta e faça parte da nossa equipe</p>
        <input type="submit" id="submitCadastrar" value="Criar">

        </form>
    </div>
</body>
</html>