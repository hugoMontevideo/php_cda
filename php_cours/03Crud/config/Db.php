<?php 
require_once 'init.php';

class Db{

    public static function getDB()
    {
        try{
            return $pdo = new PDO(
                'mysql:host='. CONFIG['db']['HOST'] . ';dbname='. CONFIG['db']['NAME'] .';charset=UTF8;port='.CONFIG['db']['PORT'], 
                CONFIG['db']['USER'], 
                CONFIG['db']['PWD'], 
                array(
                    // option 1 : on affiche les erreurs SQL 
                    //PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  
                    // option 2 : on définit le jeu de caractères des échanges avec la BDD
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' 
                )
            );
        }catch (Exception $e){
            var_dump($e);
            die();
        }

    }
}