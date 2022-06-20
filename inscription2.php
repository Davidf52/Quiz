<?php
require('./co_bdd.php');


$req = "INSERT INTO users(name,email,password) VALUES (?,?,?)";

$bg = $bdd->prepare($req);

$bg->execute(array(
      $_POST['name'],
      $_POST['email'],
      password_hash($_POST['mdp'], PASSWORD_BCRYPT)
));

header('Location: index.php');


