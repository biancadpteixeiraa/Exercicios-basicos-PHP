<?php

function verificarNumero($numero) {
    if ($numero > 0) {
        return "O número $numero é positivo";
    } elseif ($numero < 0) {
        return "O número $numero é negativo";
    } else {
        return "O número $numero é zero";
    }
}
$numero = 0;

echo verificarNumero($numero);
echo"<br>";

?>

