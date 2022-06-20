<?php
session_start();
require('./co_bdd.php');
require('./header.php');
?>


<div class="inscriptions">
    <div class="inscription">
        <h1> Inscription </h1>
        <form action="inscription2.php" method="post">
            <input type="text" name="name" placeholder="Votre nom">
            <input type="email" name="email" placeholder="Votre email">
            <input type="password" name="mdp" placeholder="Votre mot de passe">
            <input type="submit" value="S'inscrire">
        </form>
    </div>
