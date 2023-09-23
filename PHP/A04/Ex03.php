<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área de Trapézio</title>
</head>
<body>
    <h1>Calculadora de Área de Trapézio</h1>
    
    <?php
    $baseMaior = isset($_POST["baseMaior"]) ? $_POST["baseMaior"] : "";
    $baseMenor = isset($_POST["baseMenor"]) ? $_POST["baseMenor"] : "";
    $altura = isset($_POST["altura"]) ? $_POST["altura"] : "";
    $area = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar se os campos foram preenchidos
        if (!empty($baseMaior) && !empty($baseMenor) && !empty($altura)) {
            // Calcular a área do trapézio
            $area = (($baseMaior + $baseMenor) * $altura) / 2;
        }
    }
    ?>

    <!-- Formulário para coletar os dados e exibir a área -->
    <form method="post" action="">
        <label for="baseMaior">Base Maior:</label>
        <input type="number" id="baseMaior" name="baseMaior" step="0.01" required value="<?php echo $baseMaior; ?>">
        <br>
        <label for="baseMenor">Base Menor:</label>
        <input type="number" id="baseMenor" name="baseMenor" step="0.01" required value="<?php echo $baseMenor; ?>">
        <br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" step="0.01" required value="<?php echo $altura; ?>">
        <br>
        <input type="submit" value="Calcular Área">
    </form>

    <?php
    // Exibir a área calculada
    if (!empty($area)) {
        echo "<h2>Resultado do Cálculo</h2>";
        echo "Base Maior: $baseMaior<br>";
        echo "Base Menor: $baseMenor<br>";
        echo "Altura: $altura<br>";
        echo "Área do Trapézio: $area";
    }
    ?>
</body>
</html>
