<?php
// Crie uma função que remova os espaços em branco de uma string.
function removerEspacos($string) {
    $string_sem_espacos = trim($string);
    
    return $string_sem_espacos;
}

$string_com_espacos = "  Este é um exemplo de string com espaços  ";
$string_sem_espacos = removerEspacos($string_com_espacos);
echo "String original: '$string_com_espacos'<br>";
echo "String sem espaços: '$string_sem_espacos'";
?>
