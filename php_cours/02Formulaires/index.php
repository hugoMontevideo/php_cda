<?php 
include '../views/formulaires_view.php';
// include 'formulaires1.php';
include '../fonctions/fonctions.php';

// var_dump($_SESSION); die();

if(!isset($_SESSION)){
    session_start();
}

// action vaut $_GET['action']
// $action = array_key_exists('action',$_GET) ? $_GET['action'] :'formulaires1';



if(array_key_exists('action',$_GET)){
    $action = $_GET['action'];
}else{
    $action = 'formulaires1';
}

require $action.'.php';




// if ($_GET['action'] == 'traitement'){
//     $action = 'traitement';
// }else{
//     $action = 'formulaires1';
// }


// require $action . '.php';