<?php
require_once '../src/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Bin2Dec</title>
</head>

<body>
    <div class="containter">
        <h1>Conversor Binário para Decimal</h1>
        <form action="" method="post">
            <label for="binary">Digite um número binário (até 8 dígitos): </label>
            <input type="text" name="binary" id="binary" maxlength="8" required>
            <button type="submit">Converter</button>
        </form>

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $binary = $_POST['binary'];
        }

        if (isBinary($binary)) {
            $decimal = binToDec($binary);
            echo "<p>O equivalente decimal é: " . $decimal;
        } else {
            echo "<p style='color-red;'>Por favor, insira apenas 0 ou 1</p>";
        }

        ?>
    </div>
</body>

</html>