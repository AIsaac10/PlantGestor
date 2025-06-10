<?php 
    require "connection.php";
    $id = $_POST["id"];
    $tc = $_POST["tc"];
    $dp = $_POST["dp"];
    $qp = $_POST["qp"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <label for="cultura">tipo de cultura</label>
        <input type="text" name="tipoCultura" id="cultura" required value="<?php echo $tc ?>">

        <label for="dataCultura">data de plantio</label>
        <input type="date" name="dataPlantio" id="data" required value="<?php echo $dp ?>">

        <label for="quant">quantidade do plantio</label>
        <input type="number" name="quantPlantio" id="quant" required value="<?php echo $qp ?>">

        <input type="hidden" name="idCultivo" id="id" value="<?php echo $id ?>">

        <input type="submit">     
    </form>
</body>
</html>