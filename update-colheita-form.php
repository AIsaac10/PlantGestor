<?php 
    require "connection.php";
    $id = $_POST["id"];
    $ic = $_POST["ci"];
    $tc = $_POST["tc"];
    $dc = $_POST["dc"];
    $qc = $_POST["qc"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantGestor</title>
</head>
<body>
    <form action="update-colheita.php" method="POST">
    <label for="id">id do cultivo</label>
    <input type="int" name="idCultivo" id="id" required>

    <label for="data">data de colheita</label>
    <input type="date" name="dataColheita" id="data" required>

    <label for="quant">quantidade de colheita</label>
    <input type="int" name="quantColheita" id="quant" required>

    <label for="maneira">maneira que foi colhida</label>
    <input type="text" name="maneiraColheita" id="maneira" required>

    <input type="hidden" name="idColheita" value="<?php echo $id ?>">

    <input type="submit">
   
    </form>
</body>
</html>