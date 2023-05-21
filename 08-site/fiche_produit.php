<?php
require_once 'inc/init.php';
//------------------------------ TRAITEMENT PHP --------------------------
$panier = '';  // pour afficher le formulaire d'ajout au panier
$suggestion = '';  // pour la suggestion des produits

// 1- Contrôle de l'existence du produit demandé (un produit en favori a pu être supprimé de la BDD...) :
// debug($_GET);

if (isset($_GET['id_produit'])) {  // si "id_produit" est dans l'URL, c'est que l'on a demandé le détail d'un produit
    $resultat = executeRequete("SELECT * FROM produit WHERE id_produit = :id_produit", array(':id_produit' => $_GET['id_produit']));

    if ($resultat->rowCount() == 0) {  // s'il n'y a pas de produit en BDD avec cet identifiant, nous redirigeons vers la boutique
        header('location:index.php');
        exit(); 
    }

    // 2- Affichage et mise en forme des informations du produit :
    $produit = $resultat->fetch(PDO::FETCH_ASSOC);  // on "fetche" les données du produit sans faire de boucle car il y en a qu'un par identifiant.
    // debug($produit);
    extract($produit);  // crée des variables nommées comme les indices du tableau associatif, et qui prennent les valeurs. 
    
    // 3- formulaire d'ajout au panier si le stock est supérieur 0 :
    if ($stock > 0) {  // s'il y a du stock sur le produit, on affiche le bouton
        // Pour panier.php il nous faut l'identifiant du produit et la quantité ajoutée au panier:
        $panier .= '<form method="post" action="panier.php">';    
            $panier .= '<input type="hidden" name="id_produit" value="'. $id_produit .'">'; // pour renseigner $_POST avec l'id_produit de l'article ajouté

            // Sélecteur de quantité
            $panier .= '<select name="quantite" class="custom-select col-3">';
                for ($i = 1; $i <= $stock && $i <= 10; $i++) { // on fait 10 tours de boucles max à concurrence du stock disponible (exemple : si le stock est de 3, on ne fait que 3 tours)
                    $panier .= "<option>$i</option>";
                }
            $panier .= '</select>';

            // Bouton d'ajout au panier
            $panier .= '<input type="submit" name="ajout_panier" value="ajouter au panier" class="btn btn-info col-8 offset-1">';
        $panier .= '</form>';
    } else {
        // si le sotck est nul
        $panier.= '<p>produit indisponible</p>';
    }
    
    
} else { // si l'id_produit n'est pas dans l'URL, on redirige vers la boutique
    header('location:index.php');
    exit();
}


// Exercice : afficher 2 produits (photo et titre) aléatoirement appartenant à la catégorie du produit affiché au-dessus. Ces 2 produits doivent être différents du produit consulté. La photo est cliquable, et mène à la fiche détaillée du produit. Vous utilisez la variable $suggestion pour afficher le contenu.  



//------------------------------   AFFICHAGE    --------------------------
require_once 'inc/header.php';
?>
<div class="row">

    <div class="col-12">
        <h1><?php echo $titre; // on accède à cette variable grâce à extract() fait sur le tableau $produit ?></h1>
    </div>

    <div class="col-md-8">
        <img src="<?php echo $photo; ?>" alt="<?php echo $titre; ?>" class="img-fluid w-100">
    </div>

    <div class="col-md-4">
        <h2>Description</h2>
        <p><?php echo $description; ?></p>

        <h2>Détails</h2>
        <ul>
            <li>Catégorie : <?php echo $categorie; ?></li>
            <li>Couleur : <?php echo $couleur; ?></li>
            <li>Taille : <?php echo $taille; ?></li>
        </ul>
        <h3>Prix : <?php echo number_format($prix, 2, ',', ''); ?> €TTC</h3>    

        <?php echo $panier;  // formulaire d'ajout au panier ?>    

    </div><!-- .col-md-4 -->

</div><!-- .row -->

<hr>

<div class="row">
    <div class="col-12">
        <h2>Suggestion de produits</h2>
    </div>
    <?php echo $suggestion; ?>
</div>


<?php
require_once 'inc/footer.php';