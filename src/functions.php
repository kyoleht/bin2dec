<?php 

function isBinary($binary) {
    return preg_match('/^[01]{1,8}+$/', $binary);
}

function binToDec($binary) {
    $decimal = 0;
    $length = strlen($binary);

    for ($i = 0; $i < $length; $i++) {
        $decimal += (int)$binary[$i] * pow(2, $length - $i - 1);
    }
    
    return $decimal;
}



?>