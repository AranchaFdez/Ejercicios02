<?php

function calsuma($valor1,$valor2,&$resultado){
    $resultado= $valor1+$valor2;
    return $resultado;
}

function calresta($valor1,$valor2,&$resultado){
    return $valor1-$valor2;
}
function calmulti($valor1,$valor2,&$resultado){
    $resultado= $valor1*$valor2;
    return $resultado;
}
function caldivision($valor1,$valor2,&$resultado){
    $resultado= $valor1/$valor2;
    return $resultado;
}
function calmodulo($valor1,$valor2,&$resultado){
    $resultado= $valor1%$valor2;
    return $resultado;
}
function calpotencia($valor1,$valor2,&$resultado){
    $resultado=1;
    for ($i = 1; $i <= $valor2; $i++) {
        $resultado=$resultado*$valor1;
    }
    return $resultado;    
}