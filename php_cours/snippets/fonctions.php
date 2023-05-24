<?php
//*** FONCTIONS ***//

/**
 * generer un joli affichage debug
 * @param array $maVar à debuger avec var_dump
 * @return void
 */
// function debugV_Dump($var):void
// {
//     echo '<pre>';
//      var_dump($var);
//      echo '</pre>';   
//  } 

/**
 * generer un joli affichage debug
 * @param array $maVar à debuger avec var_dump
 * @return void
 */
// function debug($var):void
// {
//     echo '<pre>';
//      print_r($var);
//      echo '</pre>';   
//  } 

/**
 * EQUIVAUT IMPLODE ()
 * Transformer un array en string avec choix du separateur.
 * @param array $monArray à transformer 
 * @param string $separator
 * @return string
 */
// function arrayToString($monArray, $separator): string
// {
//     $str='';
//     for($i = 0; $i<count($monArray); $i++ ){

//         $str .= $monArray[$i];
//         if(next($monArray)){
//             $str .= $separator;
//         }
//     }
//     return $str;
// }

// $trait = ';';
// $aDrapeau = ['bleu', 'blanc', 'rouge'];
// $strDrapeau = arrayToString($aDrapeau, $trait);
// echo $strDrapeau;

//*** SELECT EN ECHO ***//
// echo '<select>';
//     echo '<option>valeur 1</option>';
//     echo '<option>valeur 2</option>';
//     echo '<option>valeur ...</option>';
// echo '</select>';

// $annee = 1920;
// echo '<select>';
//     while ($annee <= date('Y')) { // date('Y') retourne l'année en cours (2020)
//         echo '<option>'. $annee . '</option>';
//         $annee++;
//     }
// echo '</select>';

