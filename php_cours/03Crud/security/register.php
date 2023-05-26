<?php      
require_once '../config/function.php';
require_once '../inc/header.inc.php';  

if( session_status() !== PHP_SESSION_ACTIVE ) session_start();

if(!empty($_POST)){
    $error = false;
    // debugV_Dump($_FILES);
    
    if(empty($_POST['nickname'])){
        $nickname = 'Le pseudo est obligatoire';
        $error = true;
    }else{
        if( strlen($_POST['nickname']) <3 || strlen($_POST['nickname']) >10  ){
            $nickname = 'La longueur du pseudo doit être comprise entre 3 et 10 caractères inclus';
            $error = true;
        }
    }
        
    if(empty($_POST['email'])){
        $email = 'Email obligatoire';
        $error = true;
    }else{
        $user = execute('SELECT * FROM user WHERE email= :email', 
                array(':email'=> $_POST['email']) );
        
        if($user->rowCount()==0){
            
            if( !filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL) ){
                $email = 'Email format invalide';
                $error = true;
            }

        }else{
            $unique_email = '<div class="alert alert-danger w-50 mx-auto mt-5">Un compte avec cet email existe deja</div>';
            $error=true;
        }

    }

    if(empty($_POST['password'])){
        $password = 'MDP obligatoire';
        $error = true;
    }else{
        if( !isValidMDP( $_POST['password'] ) ){
            $password = 'Votre mot de passe doit contenir entre 6 et 15 caractères dont au minimum une minuscule, une majuscule, un caractère spécial';
            $error = true;
        }
    }
    
    if(empty($_FILES['picture_profil']['name'])){
        $picture = 'Photo obligatoire';
        $error = true;
    }else{
        $format = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif','image/webp'];
        $picture = '';
        if(!in_array($_FILES['picture_profil']['type'], $format)){
            $picture.='Les formats autorisés sont : png, jpeg, jpg, gif, webp .<br>';
            $error = true;
        }
        if($_FILES['picture_profil']['size'] > 2000000 ){
            $picture .= 'Taille maximale autorisé : 2M .';
            $error = true;
        }
    }
 
    if (!$error){
        // renommer photo
        $picture_bdd = 'upload/'. uniqid() . date_format( new DateTime(),'d_m_y_h_i_s' ) . $_FILES['picture_profil']['name'] ;
        // var_dump($picture_bdd);
        // copier dans upload 
        //copy($_FILES['picture_profil']['tmp_name'], '../assets/'. $picture_bdd);
        // cette fonction equivalente a copy mais efface fichier temp du buffer
        move_uploaded_file($_FILES['picture_profil']['tmp_name'], '../assets/'. $picture_bdd);
    
        // on hash le mot de passe
        $mdp = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        // on lance l'insertion
    
        $resultat = execute('INSERT INTO user (nickname, email, password, picture_profil, role )
                            VALUES (:nickname, :email, :password, :picture_profil, :role )',
                            array(
                                ':nickname' => $_POST['nickname'],
                                ':email' => $_POST['email'],
                                ':password' => $mdp,
                                ':picture_profil' => $picture_bdd,
                                ':role' => 'ROLE_USER'
                            ), 
                            'true'
                        ); // rappel : le dernier argument permet d'obtenir lastId

        // debugV_Dump($resultat);
    }
    
} ?>

<!-- affiche l'erreur si l'email est déjà utilisé -->
<?= $unique_email ?? '' ?>

<form class="mt-5 w-75 mx-auto" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo*</label>
        <input name="nickname" type="text" class="form-control" id="pseudo">
        <small class="text-danger"><?= $nickname ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email*</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small class="text-danger"><?= $email ?? '' ?></small>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe*</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        <small class="text-danger"><?= $password ?? '' ?></small>
    </div>
    <div class="mb-3">
        <label for="picture_profil" class="form-label">Photo de profil*</label>
        <input name="picture_profil" type="file" class="form-control" id="picture_profil">
        <small class="text-danger"><?= $picture ?? '' ?></small>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php require_once '../inc/footer.inc.php'; ?>

