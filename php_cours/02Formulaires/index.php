<?php 
include '../views/formulaires_view.php';
// include 'formulaires1.php';
include '../fonctions/fonctions.php';

var_dump(session_status()); die();

if( session_status() !== PHP_SESSION_ACTIVE ) session_start();

// if(!isset($_SESSION)){ session_start(); }  wrong way to verify a session status


// action vaut $_GET['action']
// $action = array_key_exists('action',$_GET) ? $_GET['action'] :'formulaires1';

if(array_key_exists('action',$_GET)){
    $action = $_GET['action'];
}else{
    $action = 'formulaires1';
}

require $action.'.php';


