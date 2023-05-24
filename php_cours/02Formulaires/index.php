<?php 
include '../views/formulaires_view.php';
// include 'formulaires1.php';
include '../fonctions/fonctions.php';
session_start();

// action vaut $_GET['action']
$action = array_key_exists('action',$_GET) ? $_GET['action'] :'formulaires1';

require $action.'.php';





