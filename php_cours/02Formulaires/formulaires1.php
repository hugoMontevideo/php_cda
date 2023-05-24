<!-- $_POST, $_GET, $_SESSION, $_SERVER, $_FILES, $_COOKIE -->

<?php 
// debugV_Dump($_FILES) ;

if(!empty( $_POST )){
    
    if(!empty( $_POST['password'] )){
        // debugV_Dump($_POST) ;
        $_SESSION['user'] = ['prenom' => 'cesaire', 'pseudo' => 'ildoctor'];
        
        
    }else{
        $error = "*Le mdp est obligatoire";
    }
    
};

if( isset($_GET['action']) && $_GET['action'] == 'deco' ){
    unset($_SESSION['user']);
    header('Location:/');
    exit();
}

include '../../views/content.phtml';






