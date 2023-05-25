<?php 
// debugV_dump($_POST);
$error = [];

if(!empty( $_POST )){

    if(!empty( $_POST['pseudo'] )){
        $_SESSION['user']['pseudo']= $_POST['pseudo'] ;   
        // debugV_Dump($_SESSION['user']['pseudo']) ;
        
    }else{
        $_SESSION['errorPseudo'] = "*Le pseudo est obligatoire";
    }
    
    if(!empty( $_POST['password'] )){
        $_SESSION['user']['password']= $_POST['password'] ;            
    }else{
        $_SESSION['errorPassw'] = "*Le mdp est obligatoire";
        exit();
    }    
    
    if(isset($_SESSION['errorPseudo'] )
    || isset($_SESSION['errorPassw'])
    ){
            header('Location:index.php?action=formulaires1');
    }


};

include '../views/traitement.phtml';
