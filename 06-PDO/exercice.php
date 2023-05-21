<h1>Les commerciaux et leur salaire</h1>

<?php
// Exercice :
// 1- affichez dans une liste <ul><li> le prénom, le nom et le salaire des commerciaux (1 commercial par <li>). Pour cela, vous faites une requête préparée.
// 2- Affichez le nombre de commerciaux.

// 1- Connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '',  
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ));

// 2- Requête
$service = 'commercial';

$resultat = $pdo->prepare("SELECT prenom, nom, salaire FROM employes WHERE service = :service");
$resultat->bindParam(':service', $service);
$resultat->execute();

echo '<ul>';
while ($employe = $resultat->fetch(PDO::FETCH_ASSOC)) {
    
    echo '<li>' . $employe['prenom'] . ' ' . $employe['nom'] . ' ' . $employe['salaire'] . ' euros</li>';

}
echo '</ul>';

// Nombre de commerciaux :
echo 'Nombre de commerciaux : ' . $resultat->rowCount() . '<br>';