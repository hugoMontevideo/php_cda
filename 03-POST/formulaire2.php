<?php
// Exercice :
// - Créer un formulaire avec les champs "ville", "code postal" et une zone de texte "adresse" dans cette page formulaire2.php.
// - Afficher les données saisies par l'internaute dans la page formulaire2-traitement.php.
?>

<h1>Formulaire</h1>

<form method="post" action="formulaire2-traitement.php">
    
    <div><label for="ville">Ville</label></div>
    <div><input type="text" name="ville" id="ville"></div>

    <div><label for="cp">Code postal</label></div>
    <div><input type="text" name="cp" id="cp"></div>

    <div><label for="adresse">Adresse</label></div>
    <div><textarea name="adresse" id="adresse"></textarea></div>

    <div><input type="submit" value="envoyer"></div>

</form>