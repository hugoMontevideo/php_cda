<?php 
require_once '../inc/header.inc.php'; ?>

<a href="index.php" class="exercices-precedente">Exercices - page précédente</a>
<a href="hello_world.php" class="exercices-suivant">Exercices - page suivante</a>


<p>

    
    /// problématique 1: je veux récupérer les informations d'une table en BDD <br>
    ///  On est donc une requête de selection.<br>
    /// ma requete SQL : "SELECT * FROM la_table"<br>
    ///  en PHP on doit utiliser notre objet PDO qui le pont entre notre script et la BDD.<br>
     On a dans init.inc.php une fonction requête déclarée qui attend<br> 
     en paramètre: 1er la requête SQL entre "" et 2nd un tableau associatif optionnel*<br>
    /// ON utilise donc cette fonction:<br>
    // on declare une variable qui va recevoir un objet PDOstatement dans le cas d'une requête de selection sinon un booléen<br>
    
    //********************************<br>
    
    // $resultat=requete("SELECT * FROM categorie");<br>
    //********************************//<br>
    
    //debug($resultat);=> objet PDOstatement<br>
    // maintenant on convertit ce résultat grace à fetchAll() et en array grace à l'argument PDO::FETCH_ASSOC<br>
    //$resultat->fetchAll(PDO::FETCH_ASSOC);<br>
    
    //debug($resultat->fetchAll(PDO::FETCH_ASSOC)); // array<br>
    
    // on charge dans une variable le résultat<br>
    //********************************//<br>
    
    //    $liste_categories=$resultat->fetchAll(PDO::FETCH_ASSOC);<br>
    //********************************//<br>
    
    // seconde problématique: on souhaite afficher les données d'un jeu de résultat.<br>
    // on sait que le jeu de résultat est retourne sous forme de tableau<br>
// pour parcourir un tableau de manière automatique on utilise la boucle foreach<br>
// pour récupérer une entrée spécifique d'un tableau on appelle son indice entre ['']<br>

// foreach ($liste_categories as $entrée_tableau)<br>
// {<br>
//     // problématique dans une boucle foreach() que souhaite t-on répéter<br>
//     //(une liste, une card, une ligne de tableau ou n'importe quel élément html)<br>
//     foreach ($entrée_tableau as $valeur){<br>

    //        echo $valeur;<br>
    //     }<br>
    // }<br>
    
    
    
    /// problématique 2 : je veux les informations à partir d'un clic effectué sur une autre page. <br>
    D'une page à une autre le plus simple reste de déclarer un passage en get sur un liens afin de faire<br>
     transiter l'information dans mon url.<br>
///  sous la forme :<br>

</p>

<!-- <a href="dossier/fichier.php?nom_de_mon_information=valeur_de_mon_information"></a> -->

<p>

    
    /// généralement sa valeur est dynamique au seins d'une boucle et proviens d'une variable <br>
    (ex: $categorie['id']) et doit donc être concaténée au liens. Ici au click sur le<br>
     liens l'info part dans l'url et le changement de page s'effectue.<br>
    /// on peut donc y récupérer par $_GET['nom_de_mon_information'] la valeur_de_mon_information et l'affecter à une variable<br>
    /// autre problématique à quoi sert cette information, si elle a pour de récupérer un résultat en BDD<br>
     on repart sur problématique 1 avec une clause WHERE<br>
// http://localhost/vinted/logique.php?id=1 (lien à utiliser)<br>

//* *******************************<br>
// $req=requete("SELECT * FROM categorie WHERE id=:id", array(':id'=>$_GET['id']));<br>

//* *******************************<br>

// ensuite on reflechi au nombre de jeu de résultat attendu 1 ou plusieur afin d'utiliser la<br>
 bonne méthode sur $req , notre objet PDOstatement. fetch() pour 1 ou fetchAll() pour plusieur<br>
//debug($req);<br>
// si lors d'une requete de selection , on debug une variable et obtenons un objet PDOstatement,<br>
 il est impératif d'appeler dessus ou fetch() ou fetchAll(), pour convertir en tableau<br>


//    $monResultat=$req->fetch(PDO::FETCH_ASSOC); // puis on l'affecte à une variable représentant ce jeu de résultat<br>


</p>

<a href="index.php" class="exercices-precedente">Exercices - page précédente</a>
<a href="hello_world.php" class="exercices-suivant">Exercices - page suivante</a>

<?php  require_once '../inc/header.inc.php';