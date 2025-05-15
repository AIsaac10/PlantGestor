<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-login-form.css">
</head>
<body>
    <h1 id="titulo">PlantGestor</h1>
    <div class="box">
        <form action="create.php" method="POST">
            <fieldset>
            <legend><b>Login</b></legend>
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
            <input type="submit" id="submit">
            </fieldset>
        </form>
    </div>

<form action="">
    
</form>


</body>
</html>