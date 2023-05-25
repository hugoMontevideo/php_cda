<?php 
$error = [];

if(isset( $_POST )){
    
    if(!empty( $_POST['pseudo'] )){
        $_SESSION['user']['pseudo']= $_POST['pseudo'] ;   
        // debugV_Dump($_SESSION['user']['pseudo']) ;
        
    }else{
        $_SESSION['user']['errorPseudo'] = "*Le pseudo est obligatoire";
    }
    // var_dump($_SESSION);
    
    if(empty($_SESSION['user']['password'])){
        if(!empty( $_POST['password'] )){
            $_SESSION['user']['password']= $_POST['password'] ;            
        }else{
            $_SESSION['user']['errorPassw'] = "*Le mdp est obligatoire";
        }    
    }
    
    if(isset($_SESSION['user']['errorPseudo'] )
    || isset($_SESSION['user']['errorPassw'])
    ){
            header('Location:index.php?action=formulaires1');
            exit();
    }


    include '../views/traitement.phtml';
    exit();
};
header('Location:index.php?action=formulaires1');
exit();

