
<?php
//Crie um programa que imprima os números de 1 a 20, substituindo múltiplos de 3 por "Fizz" e múltiplos de 5 por "Buzz"
$numero = 1;
while ($numero <= 20) {
    if ($numero % 3 == 0) {
        if ($numero % 5 == 0) {
            echo "FizzBuzz <br> ";
        } else {
            echo "Fizz <br>";
        }
    } elseif ($numero % 5 == 0) {
        echo "Buzz <br>";
    } else {
        echo $numero . "<br>";
    }
    $numero++;
}
?>
