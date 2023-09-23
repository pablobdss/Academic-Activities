<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Verificação</title>
</head>
<body>
    <h1>Resultado da Verificação</h1>

    <?php
    // Verifique se o formulário foi enviado (método POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtenha o número do formulário
        $numero = $_POST["numero"];

        // Verifique se o número é maior ou igual a zero ou menor que zero
        if ($numero > 0) {
            echo "O número $numero é maior que zero e positivo.";
        } elseif ($numero < 0) {
            echo "O número $numero é menor que zero e negativo.";
        } else {
            echo "O número é igual a zero.";
        }
    }
    ?>
</body>
</html>
