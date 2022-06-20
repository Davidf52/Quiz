<?php 
session_start();
require('./co_bdd.php') ;


$req = 'UPDATE users SET name =? WHERE id = ?';                
$req = $bdd ->prepare($req);
$req ->execute([$_POST['name'], $_SESSION['id']]);

header('location: index.php'); 
?>