<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Preço de Carro</title>
</head>
<body>
    <h1>Cálculo de Preço de Carro</h1>

    <!-- Formulário para coletar o custo de fábrica do carro -->
    <form method="post" action="">
        <label for="custoFabrica">Custo de Fábrica do Carro (em R$):</label>
        <input type="number" id="custoFabrica" name="custoFabrica" step="0.01" required>
        <br>
        <input type="submit" value="Calcular Preço">
    </form>

    <?php
    // Verifique se o formulário foi enviado (método POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenha o custo de fábrica do formulário
        $custoFabrica = $_POST["custoFabrica"];

        // Inicialize as porcentagens do distribuidor e dos impostos
        $percentagemDistribuidor = 0;
        $percentagemImpostos = 0;

        // Calcule as porcentagens com base no custo de fábrica
        if ($custoFabrica <= 12000) {
            $percentagemDistribuidor = 5;
            $percentagemImpostos = 0;
        } elseif ($custoFabrica > 12000 && $custoFabrica <= 25000) {
            $percentagemDistribuidor = 10;
            $percentagemImpostos = 15;
        } else {
            $percentagemDistribuidor = 15;
            $percentagemImpostos = 20;
        }

        // Calcule o preço final ao consumidor
        $precoConsumidor = $custoFabrica + ($custoFabrica * ($percentagemDistribuidor / 100)) + ($custoFabrica * ($percentagemImpostos / 100));

        // Exiba o resultado
        echo "<h2>Resultado do Cálculo</h2>";
        echo "Custo de Fábrica: R$" . number_format($custoFabrica, 2, ',', '.') . "<br>";
        echo "Porcentagem do Distribuidor: " . $percentagemDistribuidor . "%<br>";
        echo "Porcentagem dos Impostos: " . $percentagemImpostos . "%<br>";
        echo "Preço Final ao Consumidor: R$" . number_format($precoConsumidor, 2, ',', '.');
    }
    ?>
</body>
</html>
