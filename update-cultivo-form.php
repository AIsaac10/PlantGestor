<?php 
    require "connection.php";
    $id = $_POST["id"];
    $tc = $_POST["tc"];
    $dc = $_POST["dc"];
    $qc = $_POST["qc"];
    $ac = $_POST["ac"];
    $mc = $_POST["mc"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
</head>
<body>
    <form action="update-cultivo.php" method="POST">
        <label for="cultura">tipo de cultivo</label>
        <input type="text" name="tipoCultivo" id="cultura" required value="<?php echo $tc ?>">

        <label for="data">data de cultivo</label>
        <input type="date" name="dataCultivo" id="data" required value="<?php echo $dc ?>">

        <label for="quant">quantidade do cultivo</label>
        <input type="number" name="quantCultivo" id="quant" required value="<?php echo $qc ?>">

        <label for="area">area do cultivo</label>
        <input type="number" name="areaCultivo" id="area" required value="<?php echo $ac ?>">

        <label for="maneira">maneira de plantio da cultura</label>
        <input type="text" name="maneiraCultivo" id="maneira" required value="<?php echo $mc ?>">

        <input type="hidden" name="idCultivo" value="<?php echo $id ?>">

        <input type="submit">     
    </form>
</body>
</html>