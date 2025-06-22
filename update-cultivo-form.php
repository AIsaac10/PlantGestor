<?php
    require "lock.php";
    require "connection.php";
    $id = $_POST["id"] ?? "";
    $tc = $_POST["tc"] ?? "";
    $dc = $_POST["dc"] ?? "";
    $qc = $_POST["qc"] ?? "";
    $ac = $_POST["ac"] ?? "";
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
        <form action="update-cultivo.php" method="POST">
            <fieldset class="fieldsetCreate">
                <legend class="legendCreate">
                    <b>Update cultivo</b>
                </legend>
                <br><br>

                <div class="inputBox">
                    <label for="cultura">tipo de cultivo</label>
                    <input type="text" name="tipoCultivo" id="cultura" class="input" required value="<?php echo $tc ?>">
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="data">data de cultivo</label>
                    <input type="date" name="dataCultivo" id="data" class="input" required value="<?php echo $dc ?>">
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="quant">quantidade do cultivo</label>
                    <input type="number" name="quantCultivo" id="quant" class="input" required value="<?php echo $qc ?>">
                </div>
                <br><br>

                <div class="inputBox">
                    <label for="area">area do cultivo</label>
                    <input type="number" name="areaCultivo" id="area" class="input" required value="<?php echo $ac ?>">
                </div>
                <br><br>
                <div class="inputBox"z>
                    <label for="maneira">maneira de plantio da cultura</label>
                    <input type="text" name="maneiraCultivo" id="maneira" class="input" required value="<?php echo $mc ?>">
                </div>
                <br><br>
                <input type="hidden" name="idCultivo" value="<?php echo $id ?>">

                <input type="submit" class="submitCreate">     
            </fieldset>
        </form>
    </div>
    <a class="aVoltar" href="cultivo.php">voltar para cultivo</a>
</body>
</html>