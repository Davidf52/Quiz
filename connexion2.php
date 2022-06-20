<?php
session_start(); 
require('./co_bdd.php');

// 1ere chose a faire : verifier si l'email existe dans la base de données 
// On prepare 1 requetes : SELECTIONNE TOUT DANS LA TABLE USERS où L'email = ?
$req = "SELECT * FROM users WHERE email = ?";

$bg = $bdd -> prepare($req); 

$bg -> execute(array(
    $_POST['email']
));

$user = $bg -> fetch(); 

if($user){


    // Verification le mot de passe haché et le mot de passe entré par l'utilisateur.
    if(password_verify($_POST['mdp'],$user['password'])){
    // tableau de session disponible car crée grace a la session.
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email']; 
          
            header('location: index.php'); 

    }else{
        header('location: index.php'); 
    }
}else{
    header('location: index.php'); 
}
?>