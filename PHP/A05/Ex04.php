<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Investimento</title>
</head>
<body>
    <h1>Cálculo de Investimento</h1>

    <form method="post" action="">
        <label for="tipoInvestimento">Tipo de Investimento:</label>
        <select id="tipoInvestimento" name="tipoInvestimento" required>
            <option value="1">Poupança</option>
            <option value="2">Fundos de Renda Fixa</option>
        </select>
        <br>
        <label for="valorInvestimento">Valor do Investimento (em R$):</label>
        <input type="number" id="valorInvestimento" name="valorInvestimento" step="0.01" required>
        <br>
        <input type="submit" value="Calcular Rendimento">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenha o tipo de investimento e o valor do formulário
        $tipoInvestimento = $_POST["tipoInvestimento"];
        $valorInvestimento = $_POST["valorInvestimento"];

        // Inicialize a variável de rendimento mensal
        $rendimentoMensal = 0;

        // Use uma estrutura switch para determinar o rendimento com base no tipo de investimento
        switch ($tipoInvestimento) {
            case 1: // Poupança
                $rendimentoMensal = 0.03; // 3% de rendimento mensal
                break;
            case 2: // Fundos de renda fixa
                $rendimentoMensal = 0.04; // 4% de rendimento mensal
                break;
            default:
                echo "Tipo de investimento inválido.";
                break;
        }

        // Calcule o valor corrigido
        $valorCorrigido = $valorInvestimento + ($valorInvestimento * $rendimentoMensal);

        // Exiba o resultado
        echo "<h2>Resultado do Cálculo</h2>";
        echo "Tipo de Investimento: ";
        switch ($tipoInvestimento) {
            case 1:
                echo "Poupança";
                break;
            case 2:
                echo "Fundos de Renda Fixa";
                break;
        }
        echo "<br>";
        echo "Valor do Investimento: R$" . number_format($valorInvestimento, 2, ',', '.') . "<br>";
        echo "Rendimento Mensal: " . ($rendimentoMensal * 100) . "%<br>";
        echo "Valor Corrigido: R$" . number_format($valorCorrigido, 2, ',', '.');
    }
    ?>
</body>
</html>
