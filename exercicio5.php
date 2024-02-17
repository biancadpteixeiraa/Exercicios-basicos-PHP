<?php
$frase = "Quando vamos tomar nosso café conceitual, Gil do vigor?";

$palavras = explode(" ", $frase);

foreach ($palavras as $palavra) {
    echo $palavra . "<br>"; 
}

?>
