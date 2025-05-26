<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-login-form.css">
</head>
<body>
    <div id="login">
        <h1 id="titulo">PlantGestor</h1>
        
        <form action="login.php" method="POST" id ="formLogin">
            <div class="inputBox">
                <label for="name" class="labelInput">Usuário:</label>
                <input type="text" name="name" id= "name" class="input" required>
            </div>
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