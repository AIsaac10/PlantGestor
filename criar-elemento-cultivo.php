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
        <form action="create-cultivo.php" method="POST">
            <fieldset class="fieldsetCreate">
            <legend class="legendCreate">
                <b>Criar Cultivo</b>
            </legend>
                <br><br>
                <div class="inputBox">
                    <label for="cultura">tipo de cultura</label>
                    <input type="text" name="tipoCultura" id="cultura" class="input" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="data" class="labelInput">data de cultura</label>
                    <input type="date" name="dataCultura" id="data" class="input" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="quant" class="labelInput">quantidade de cultura</label>
                    <input type="number" name="quantCultura" id="quant" class="input" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="area" class="labelInput">área de cultura</label>
                    <input type="number" name="areaCultura" id="area" class="input" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="maneira" class="labelInput">maneira de plantio da cultura</label>
                    <input type="text" name="maneiraCultura" id="maneira" class="input" required>
                </div>
                <br><br>
                <input type="submit" class="submitCreate">
            </fieldset>

        </form>
    </div>
    <a class="aVoltar" href="cultivo.php">voltar para cultivo</a>
</body>
</html>
