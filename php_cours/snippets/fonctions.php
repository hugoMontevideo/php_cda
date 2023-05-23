<?php

/**
 * EQUIVAUT IMPLODE ()
 * Transformer un array en string avec choix du separateur.
 * @param array $monArray à transformer 
 * @param string $separator
 * @return string
 */
function arrayToString($monArray, $separator): string
{
    $str='';
    for($i = 0; $i<count($monArray); $i++ ){

        $str .= $monArray[$i];
        if(next($monArray)){
            $str .= $separator;
        }
    }
    return $str;
}


$trait = ';';

$aDrapeau = ['bleu', 'blanc', 'rouge'];

$strDrapeau = arrayToString($aDrapeau, $trait);

echo $strDrapeau;