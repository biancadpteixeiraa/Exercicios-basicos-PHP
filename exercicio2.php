<?php 
function isPrimo($num){
    for($i = 2; $i < $num; $i++){
        if($num % $i === 0){
            return false;
        }
    }
    return true;
}
echo"<br>";
echo"<br>";
$numero = 19;
if(isPrimo($numero)){
    echo "$numero é um número primo.";
}else {
    echo "$numero nâo é um numero primo!";
}?>