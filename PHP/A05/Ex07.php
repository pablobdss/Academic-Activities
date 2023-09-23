<?php
// Defina um array com os números
$numeros = array(2, 4, 5, 1, 9, 16);

// Inicialize uma variável para armazenar a soma
$soma = 0;

// Use o laço foreach para percorrer o array e somar os números
foreach ($numeros as $numero) {
    $soma += $numero;
}

// Exiba a soma
echo "A soma dos números no array é: " . $soma;
?>
