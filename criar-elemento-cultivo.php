<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="create-cultivo.php" method="POST">
    <label for="cultura">tipo de cultura</label>
    <input type="text" nome="cultura" id="cultura" required>

    <label for="dataCultura">data de plantio</label>
    <input type="date" nome="dataCultura" id="data" required>

    <label for="quant">quantidade do plantio</label>
    <input type="number" nome="quantCultura" id="quant" required>

    <input type="submit">

</form>
</body>
</html>