<?php 
//Crie uma função que verifique se uma palavra é um palíndromo
function isPalindromo($palavra){
    $palavrainvertida = strrev($palavra);
    return strtolower($palavra) === strtolower($palavrainvertida);
}
echo "<br>";
$teste = "radar";
if(isPalindromo($teste)){
    echo"$teste é um palindromo";
}else {
    echo "$teste  não é um palindromo";
}
?>