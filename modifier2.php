<?php 
session_start();
require('./co_bdd.php') ;


$req = 'UPDATE users SET email =? WHERE id = ?';                
$req = $bdd ->prepare($req);
$req ->execute([$_POST['email'], $_SESSION['id']]);

header('location: index.php'); 
?>