<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
    <link rel="stylesheet" href="css/style-create-form.css">
</head>
<body>
    <div class="box">
        <form action="create-colheita.php" method="POST">
            <fieldset class="fieldsetCreate">
            <legend class="legendCreate">
                <b>Criar Colheita</b>
            </legend>
                <br><br>
                <label for="id" class="labelInput">id do cultivo</label>
                <input type="int" name="idCultivo" id="id" class="input" required>
                <br><br>
                <label for="data" class="labelInput">data de colheita</label>
                <input type="date" name="dataColheita" id="data" class="input" required>
                <br><br>
                <label for="quant" class="labelInput">quantidade de colheita</label>
                <input type="int" name="quantColheita" id="quant" class="input" required>
                <br><br>
                <label for="maneira" class="labelInput">maneira que foi colhida</label>
                <input type="text" name="maneiraColheita" id="maneira" class="input" required>
                <br><br>
                <input type="submit" class="submitCreate">

            </fieldset>
        </form>
    </div>
    <a class="aVoltar" href="colheita.php">voltar para colheita</a>
</body>
</html>



