<?php
// Crie uma função que receba um texto e retorne se é um pangrama (contém todas
//as letras do alfabeto pelo menos uma vez).
function pangrama($texto) {
    return count(array_unique(str_split(str_replace(' ', '', strtolower($texto))))) == 26;
}

$texto = "Obrigada StackOverflow por me ajudar no exercicio 10";

echo "O texto " . ($texto . " " . (Pangrama($texto) ? "é" : "não é")) . " um pangrama.";
?>
