<?php 
// debugV_dump($_POST);

if(!empty( $_POST )){
    if(!empty( $_POST['pseudo'] )){
        $_SESSION['user']['pseudo']= $_POST['pseudo'] ;   
        // debugV_Dump($_SESSION['user']['pseudo']) ;
        
    }else{
        $error = "*Le pseudo est obligatoire";
    }
    
    if(!empty( $_POST['password'] )){
        $_SESSION['user']['password']= $_POST['password'] ;            
    }else{
        $error = "*Le mdp est obligatoire";
    }    
};

include '../views/traitement.phtml';
