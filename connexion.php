<?php
require('./header.php')?>

<div class="connexion">
<h1>Connexion</h1>
<form action="connexion2.php" method="post">
    <input type="email" name="email" placeholder="Votre email">
    <input type="password" name="mdp" placeholder="Votre mot de passe">
    <input type="submit" value="Se connecter">
</form>
</div>
</div>

<?php
require('./footer.php');
?>

