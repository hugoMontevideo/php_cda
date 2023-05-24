<?php 
include '../../views/formulaires_view.php';
include 'formulaires1.php';
session_start();

function debugV_Dump($var):void
{
    echo '<pre>';
     var_dump($var);
     echo '</pre>';   
 } 

 function debug($var):void
{
    echo '<pre>';
     print_r($var);
     echo '</pre>';   
 } 


