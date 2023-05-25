<?php 
require_once 'Db.php';

/**
 * *** cela fait partie de la securisation du site
 * requetes preparees
 * @param string $requete  sql
 * @param array $data - donnees du formulaire
 * @param mixed $lastId  si on renseigne ce parametre on obtiendra le last id
 * 
 */
function execute( string $requete, array $data=[], $lastId=null )
{
    // boucle pour echapper les caracteres speciaux
    // neutralise les balises <style>, <script> en entites html
    // et de meme, supprimer les espaces en debut et fin de str
    foreach ($data as $marqueur => $valeur){
        // chaque tour de boucle, affection nouvelle valeur a notre tableau
        $data[$marqueur] = trim( htmlspecialchars($valeur) );
    }
    // connection à BDD provenant de Db.php
    $pdo = Db::getDB();
    // on prepare la requete envoyee avec marqueur (:marqueur)
    $resultat = $pdo->prepare($requete);
    // on execute en passant notre tableau associatif de nos marqueur avec leurs marqueurs
    $success = $resultat->execute($data);
    // si tout s'est bien passe
    if($success){
        // lastId != null 
        if ($lastId){
            // on renvoie le dernier parametre insere
            return $pdo->lastInsertId(); 
        }else{
            // sinon le jeu de resultats
            return $resultat;
        }
      
    }else{
        // on s'assure d'un retour meme si le traitement a echoue
        return false;
    }

} 



/**
 * generer un joli affichage debug
 * @param array $maVar à debuger avec var_dump
 * @return void
 */
function debugV_Dump($var):void
{
    echo '<pre>';
     var_dump($var);
    echo '</pre>';   
} 

/**
 * generer un joli affichage debug
 * @param array $maVar à debuger avec var_dump
 * @return void
 */
function debug($var):void
{
    echo '<pre>';
     print_r($var);
    echo '</pre>';   
 } 



