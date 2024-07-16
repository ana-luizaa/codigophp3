<?php
// Programa que calcula a média aritmética simples entre 4 notas

echo "Digite a nota 1: ";
$nota1 = fgets(STDIN);

echo "Digite a nota 2: ";
$nota2 = fgets(STDIN);

echo "Digite a nota 3: ";
$nota3 = fgets(STDIN);

echo "Digite a nota 4: ";
$nota4 = fgets(STDIN);

$nota1 = (float)$nota1;
$nota2 = (float)$nota2;
$nota3 = (float)$nota3;
$nota4 = (float)$nota4;

if ($nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10 || $nota3 < 0 || $nota3 > 10 || $nota4 < 0 || $nota4 > 10) {
    echo "Erro: todas as notas devem estar entre 0 e 10.\n";
} else {
   
    $soma = $nota1 + $nota2 + $nota3 + $nota4;
    $media = $soma / 4;

    echo "A média das 4 notas é: $media\n";
}
?>
