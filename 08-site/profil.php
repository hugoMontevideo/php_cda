<?php
require_once 'inc/init.php';
/* Exercice :
   1- si le visiteur accède à cette page et qu'il n'est pas connecté, vous le redirigez vers la page de connexion.
   2- Dans cette page, vous affichez toutes les informations de son profil. Par ailleurs vous ajoutez un message de bienvenue juste après le <h1> : "Bonjour [prenom] [nom] !".      
   3- Ajoutez un lien "supprimer mon compte". Quand on clique, vous supprimez le membre en BDD après avoir demandé confirmation de la suppression en JavaScript. Une fois le profil supprimé, vous détruisez la session et redirigez le membre vers la page inscription.php.
*/

//  1- si le visiteur accède à cette page et qu'il n'est pas connecté, vous le redirigez vers la page de connexion
if (!estConnecte()) {
    header('location:connexion.php');  // on envoie dans le header du texte HTTP qui transite entre serveur et client le "message" 'location:connexion.php'. Celui-ci spécifie au navigateur qu'il doit demander la page connexion.php. 
    exit();
}

// 2- Affichage des infos
// debug($_SESSION);  // dès lors que l'on fait un session_start() (il est dans init.php), les données stockées dans cette session sur le serveur sont disponibles partout sur le site. Ici il s'agit d'un tableau multidimensionnel, ce pourquoi nous écrivons $_SESSION['membre']['ville'] pour accéder à la ville du membre.


// 3- suppression du compte
// debug($_GET);
if (isset($_GET['action']) && $_GET['action'] == 'supprimer') { // le isset() est nécessaire car si "action" n'existe pas dand l'URL, donc dans $_GET, la condiotn s'arrête immédiatement sans regarder si "action" contient "supprimer". Dans le cas contraire (si on ne met pas isset), nous aurions une erreur "undefined index".

    $id_membre = $_SESSION['membre']['id_membre']; // je vais chercher mon id_membre dans la session car je suis connecté.

    $supprimer = executeRequete("DELETE FROM membre WHERE id_membre = $id_membre");
    session_destroy();   // on déconnecte le membre en supprimant sa session
    header('location:inscription.php'); // redirection vers inscription
    exit(); // on quitte le script
}




require_once 'inc/header.php';
?>
<h1 class="mt-4">Profil</h1>

<h2>Bonjour <?php echo $_SESSION['membre']['prenom'] . ' ' . $_SESSION['membre']['nom']; ?> !</h2>

<?php  
if (estAdmin()) {
    echo '<p>Vous êtes ADMINISTRATEUR.</p>';
}    
?>

<hr>
<h3>Vos coordonnées</h3>
<ul>
    <li>Email : <?php echo $_SESSION['membre']['email']; ?></li>
    <li>Adresse : <?php echo $_SESSION['membre']['adresse']; ?></li>
    <li>Code postal : <?php echo $_SESSION['membre']['code_postal']; ?></li>
    <li>Ville : <?php echo $_SESSION['membre']['ville']; ?></li>
</ul>

<hr>

<p><a href="profil.php?action=supprimer" onclick="return (confirm('Etes-vous sûr de vouloir supprimer votre compte ?'))">supprimer mon compte</a></p><!-- confirm retourne true quand on valide : return true déclenche le lien. En revanche quand on annule, confirm retourne false : return false bloque le lien (équivaut à e.preventDefault()). -->

<?php
require_once 'inc/footer.php';