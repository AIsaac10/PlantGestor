<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="create-colheita.php" method="POST">
    <label for="data">data de colheita</label>
    <input type="date" name="dataColheita" id="data" required>

    <label for="quant">quantidade de colheita</label>
    <input type="int" name="quantColheita" id="quant" required>

    <label for="maneira">maneira que foi colhida</label>
    <input type="text" name="maneiraColheita" id="maneira" required>

    <input type="submit">

</form>
</body>
</html>