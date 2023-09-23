<?php
// Criar um array com os nomes dos estados
$estados = array("Paraíba", "Pernambuco", "Ceará", "Rio de Janeiro", "São Paulo");

// Encontrar e escrever "Rio de Janeiro"
foreach ($estados as $estado) {
    if ($estado == "Rio de Janeiro") {
        echo $estado;
        break; // Parar a iteração após encontrar "Rio de Janeiro"
    }
}
?>
