<?php

function calsuma($valor1,$valor2){
    return $valor1+$valor2;
}

function calresta($valor1,$valor2){
    return $valor1-$valor2;
}
function calmulti($valor1,$valor2){
    return $valor1*$valor2;
}
function caldivision($valor1,$valor2){
    return $valor1/$valor2;
}
function calmodulo($valor1,$valor2){
    return $valor1%$valor2;
}
function calpotencia($valor1,$valor2){
    $poten=1;
    for ($i = 1; $i <= $valor2; $i++) {
        $poten=$poten*$valor1;
    }
    return $poten;    
}