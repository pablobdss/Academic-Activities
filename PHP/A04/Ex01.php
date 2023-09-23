<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média</title>
</head>
<body>
    <h1>Cálculo de Média</h1>
    <!-- Formulário para coletar informações do aluno -->
    <form method="post" action="">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="0.01" required>
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="0.01" required>
        <br>
        <input type="submit" name="calcular" value="Calcular Média">
    </form>

    <?php
    // Verifica se o formulário foi enviado via método POST e se o botão "Calcular Média" foi pressionado
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calcular"])) {
        $nome = $_POST["nome"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];

        // Calcular a média
        $media = ($nota1 + $nota2) / 2;

        // Exibir o resultado da média formatado
        echo "O aluno $nome ficou com " . number_format($media, 1) . " de média.";
    }
    ?>
</body>
</html>
