<?php
function isPrimeNumber($n){
    if ($n < 2){
        return false;
    }
    for ($i = 2; $i <= $n; $i++ ){
        if ($n % $i === 0){
            return false;
        }
    }
    return true;
}
echo ("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($j =0 ; $j < 100; $j++){
    if (isPrimeNumber($j)){
        echo ($j . " ");
    }
}
?>
