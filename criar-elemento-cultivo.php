<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
</head>
<body>
<form action="create-cultivo.php" method="POST">
    <label for="cultura">tipo de cultura</label>
    <input type="text" name="tipoCultura" id="cultura" required>

    <label for="data">data de cultura</label>
    <input type="date" name="dataCultura" id="data" required>

    <label for="quant">quantidade de cultura</label>
    <input type="number" name="quantCultura" id="quant" required>

    <label for="area">área de cultura</label>
    <input type="number" name="areaCultura" id="area" required>

    <input type="submit">

</form>
</body>
</html>