<?php 

$pdo = new PDO(
    'mysql:host=localhost;dbname=entreprise;charset=UTF8;port=3306', // driver mysql, serveur de la BDD (host), nom de la BDD (dbname) à changer
    'root', 
    '', 
    array(
        // option 1 : on affiche les erreurs SQL 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  
        // option 2 : on définit le jeu de caractères des échanges avec la BDD
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' 
    )
);

// 1er exercice

// $resultat = $pdo->prepare(
// "   SELECT *
//     FROM employes
//     WHERE sexe = :sexe "
// );
// $f = 'f';
// $resultat->bindParam('sexe', $f);

// $resultat->execute();

// $data = $resultat->fetchAll(PDO::FETCH_ASSOC);
// debugV_Dump($pdo->lastInsertId());

// include '../../views/content.php';



