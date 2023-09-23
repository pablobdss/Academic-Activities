<?php
// Defina um array com os números
$numeros = array(2, 4, 5, 1, 9, 16);

// Inicialize uma variável para armazenar a soma
$soma = 0;

// Use um laço for para percorrer o array e somar os números
for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
}

// Exiba a soma
echo "A soma dos números no array é: " . $soma;
?>
