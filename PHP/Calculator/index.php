<?php
// Definindo os nomes e valores dos cookies
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

// Inicializando a variável JavaScript de erro
$javascriptError = null;

// Inicializando a variável de resultado
$result = 0;

// Verificando se 'num' foi enviado via POST e construindo o número atual
$num = isset($_POST['num']) ? $_POST['input'] . $_POST['num'] : '';

// Verificando se 'op' foi enviado via POST e configurando os cookies
if (isset($_POST['op'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "");
}

// Verificando se 'equal' foi enviado via POST e realizando a operação
if (isset($_POST['equal'])) {
    $num = $_POST['input'];
    switch ($_COOKIE['op']) {
        case "+":
            $result = $_COOKIE['num'] + $num;
            break;
        case "-":
            $result = $_COOKIE['num'] - $num;
            break;
        case "*":
            $result = $_COOKIE['num'] * $num;
            break;
        case "/":
            if ($num != 0) {
                $result = $_COOKIE['num'] / $num;
            } else {
                // Define a mensagem de erro para divisão por zero
                $javascriptError = "Erro: Divisão por zero.";
            }
            break;
        default:
            // Define a mensagem de erro para operação inválida
            $javascriptError = "Operação inválida.";
    }
    $num = $result;
}

// Verificando se 'clear' foi enviado via POST e limpando os cookies
if (isset($_POST['clear'])) {
    setcookie($cookie_name1, "", time() - 3600, "/");
    setcookie($cookie_name2, "", time() - 3600, "/");
    $num = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num ?>" readonly>
            <br> <br>
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+">
            <br><br>
            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="-">
            <br><br>
            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="calbtn" name="op" value="*">
            <br><br>
            <input type="submit" class="c" name="clear" value="C">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="op" value="/">
        </form>
    </div>

    <script>
        var errorMessage = "<?php echo $javascriptError; ?>"; // Obtém a mensagem de erro do PHP

        // Verifica se há uma mensagem de erro válida e mostra um pop-up
        if (errorMessage !== null && errorMessage !== "") {
            alert(errorMessage);
            
            // Define a errorMessage como nula para evitar a exibição repetida
            errorMessage = null;
        }
    </script>
</body>
</html>
