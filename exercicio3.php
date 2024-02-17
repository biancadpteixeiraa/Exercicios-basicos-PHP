<?php 

//inverter uma string sem usar a função strrev
$string = "Gil do vigor";
$invertida = "";

for($i = strlen($string) - 1; $i >= 0; $i--){
    $invertida .= $string[$i];
}
echo "<br>";
echo $invertida;
?>