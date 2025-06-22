<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
    <link rel="stylesheet" href="css/style-create-form.css">
</head>
<body>
    <?php
        require "lock.php";
    ?>
    <div class="box">
        <form action="create-colheita.php" method="POST">
            <fieldset class="fieldsetCreate">
            <legend class="legendCreate">
                <b>Criar Colheita</b>
            </legend>
                <br><br>
                <div class="inputBox">
                    <label for="id" class="labelInput">id do cultivo</label>
                    <input type="int" name="idCultivo" id="id" class="input" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="data" class="labelInput">data de colheita</label>
                    <input type="date" name="dataColheita" id="data" class="input" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="quant" class="labelInput">quantidade de colheita</label>
                    <input type="int" name="quantColheita" id="quant" class="input" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="maneira" class="labelInput">maneira que foi colhida</label>
                    <input type="text" name="maneiraColheita" id="maneira" class="input" required>
                </div>
                <br><br>
                <input type="submit" class="submitCreate">

                <?php 

                    if (isset($_SESSION["erroId"])) {
                        echo $_SESSION["erroId"];
                    }
                    unset($_SESSION["erroId"]);
                ?>

            </fieldset>
        </form>
    </div>
    <a class="aVoltar" href="colheita.php">voltar para colheita</a>
</body>
</html>



