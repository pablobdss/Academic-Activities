<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Comissão</title>
</head>
<body>
    <h1>Calculadora de Comissão</h1>
    
    <?php
    // Inicialize as variáveis
    $salarioFixo = 0;
    $valorVendas = 0;
    $comissao = 0;
    $salarioFinal = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Verifique se os campos foram preenchidos
        if (isset($_GET["salarioFixo"]) && isset($_GET["valorVendas"])) {
            // Obter os valores do formulário
            $salarioFixo = $_GET["salarioFixo"];
            $valorVendas = $_GET["valorVendas"];
            
            // Calcular a comissão (4% das vendas)
            $comissao = 0.04 * $valorVendas;
            
            // Calcular o salário final (salário fixo + comissão)
            $salarioFinal = $salarioFixo + $comissao;
        }
    }
    ?>

    <!-- Formulário para coletar os dados -->
    <form method="get" action="">
        <label for="salarioFixo">Salário Fixo:</label>
        <input type="number" id="salarioFixo" name="salarioFixo" step="0.01" required value="<?php echo $salarioFixo; ?>">
        <br>
        <label for="valorVendas">Valor Total de Vendas:</label>
        <input type="number" id="valorVendas" name="valorVendas" step="0.01" required value="<?php echo $valorVendas; ?>">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Exibir os resultados
    if ($comissao > 0) {
        echo "<h2>Resultado do Cálculo</h2>";
        echo "Salário Fixo: $" . number_format($salarioFixo, 2) . "<br>";
        echo "Comissão (4% das vendas): $" . number_format($comissao, 2) . "<br>";
        echo "Salário Final: $" . number_format($salarioFinal, 2);
    }
    ?>
</body>
</html>
