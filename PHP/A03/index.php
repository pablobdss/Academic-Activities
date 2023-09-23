<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>

    <!-- Formulário para coletar dados do usuário -->
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br>
        <label for="operator">Operação:</label>
        <select id="operator" name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    class Calculator {
        // Função para adição
        public function add($num1, $num2) {
            return $num1 + $num2;
        }

        // Função para subtração
        public function subtract($num1, $num2) {
            return $num1 - $num2;
        }

        // Função para multiplicação
        public function multiply($num1, $num2) {
            return $num1 * $num2;
        }

        // Função para divisão com tratamento de divisão por zero
        public function divide($num1, $num2) {
            if ($num2 == 0) {
                return "Erro: Divisão por zero.";
            }
            return $num1 / $num2;
        }
    }

    // Verifica se a solicitação POST foi feita e se os campos estão definidos
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operator"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        $calculator = new Calculator();
        $result = "";
        $operation = ""; // Inicializa a variável de operação

        switch ($operator) {
            case "add":
                $result = $calculator->add($num1, $num2);
                $operation = "Soma";
                break;
            case "subtract":
                $result = $calculator->subtract($num1, $num2);
                $operation = "Subtração";
                break;
            case "multiply":
                $result = $calculator->multiply($num1, $num2);
                $operation = "Multiplicação";
                break;
            case "divide":
                $result = $calculator->divide($num1, $num2);
                $operation = "Divisão";
                break;
            default:
                $result = "Operação inválida.";
                $operation = "";
        }

        // Exibe o resultado para o usuário
        echo "Você inseriu os números $num1 e $num2.<br>";
        echo "A $operation de $num1 e $num2 é igual a: $result";
    }
    ?>
</body>
</html>
