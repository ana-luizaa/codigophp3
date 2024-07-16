<?php
// Programa que lê 5 valores, soma os 4 primeiros e divide pelo quinto.

$valores = []; 

for ($i = 1; $i <= 5; $i++) {
    $valores[] = (float)readline("Digite o valor $i: ");
}

if ($valores[4] == 0) {
    echo "Erro: divisão por zero não é permitida.\n";
} else {
    $soma = array_sum(array_slice($valores, 0, 4)); 
    $resultado = $soma / $valores[4]; 
    echo "A soma dos 4 primeiros valores é: $soma\n";
    echo "A soma dividida pelo 5º valor é: $resultado\n";
}
?>
