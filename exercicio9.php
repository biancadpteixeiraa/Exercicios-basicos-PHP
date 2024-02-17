<?php
// Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.

$termo1 = 0;
$termo2 = 1;

echo "$termo1 $termo2 <br>";

for ($i = 3; $i <= 10; $i++) {
    $termo_atual = $termo1 + $termo2;
    echo "$termo_atual <br>";

    $termo1 = $termo2;
    $termo2 = $termo_atual;
}
?>
