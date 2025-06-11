<?php 
    require "connection.php";
    $id = $_POST["id"];
    $tc = $_POST["tc"];
    $dc = $_POST["dc"];
    $qc = $_POST["qc"];
    $ac = $_POST["ac"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update-cultivo.php" method="POST">
        <label for="cultura">tipo de cultura</label>
        <input type="text" name="tipoCultivo" id="cultura" required value="<?php echo $tc ?>">

        <label for="data">data de plantio</label>
        <input type="date" name="dataCultivo" id="data" required value="<?php echo $dc ?>">

        <label for="quant">quantidade do plantio</label>
        <input type="number" name="quantCultivo" id="quant" required value="<?php echo $qc ?>">

                <label for="area">area do plantio</label>
        <input type="number" name="areaCultivo" id="area" required value="<?php echo $ac ?>">

        <input type="hidden" name="idCultivo" value="<?php echo $id ?>">

        <input type="submit">     
    </form>
</body>
</html>