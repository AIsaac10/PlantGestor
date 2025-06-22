<?php 
    require "lock.php";
    require "connection.php";
    $ic = $_POST["ci"] ?? "";
    $dc = $_POST["dc"] ?? "";
    $qc = $_POST["qc"] ?? "";
    $mc = $_POST["mc"] ?? "";

?>

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
        <form action="update-colheita.php" method="POST">
            <fieldset class="fieldsetCreate">
            <legend class="legendCreate">
                <b>Update Colheita</b>
            </legend>
                <br><br>
                <div class="inputBox">
                    <label for="id">id do cultivo</label>
                    <input type="int" name="idCultivo" id="id" class="input" required value="<?php echo $ic ?>">
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="data">data de colheita</label>
                    <input type="date" name="dataColheita" id="data" class="input" required value="<?php echo $dc ?>">
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="quant">quantidade de colheita</label>
                    <input type="int" name="quantColheita" id="quant" class="input" required value="<?php echo $qc ?>">
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="maneira">maneira que foi colhida</label>
                    <input type="text" name="maneiraColheita" id="maneira" class="input" required value="<?php echo $mc ?>">
                </div>
                <br><br>
                <input type="hidden" name="idColheita" value="<?php echo $id ?>">

                <input type="submit" class="submitCreate">
            </fieldset>
        </form>
    </div>
    <a class="aVoltar" href="colheita.php">voltar para colheita</a>
</body>
</html>    