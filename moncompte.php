<?php
session_start();
require('./co_bdd.php');
require('./header.php');


$req = 'SELECT email FROM users WHERE id=?';
$req = $bdd->prepare($req);
$req->execute(array(
    $_SESSION['id']
));
$vas = $req->fetch();
?>
<?php
$req = 'SELECT name FROM users WHERE id=?';
$req = $bdd->prepare($req);
$req->execute(array(
    $_SESSION['id']
));
$va = $req->fetch();
?>

<?php
$req = 'SELECT name FROM users WHERE id =?';
$req = $bdd->prepare($req);
$req->execute(array($_SESSION['id']));

$user = $req->fetch();

?>
<?php
$req = 'SELECT email FROM users WHERE id =?';
$req = $bdd->prepare($req);
$req->execute(array($_SESSION['id']));

$mail = $req->fetch();

?>

<div class="compte">
    <ul>
    <li><p>email : <?php echo $vas['email'] ?> </p></li>
    <li>  <p>pseudo : <?php echo $va['name'] ?></p></li>
    </ul>
</div>
    <div class="formulaire">
    <div class="liencompte"> <a href="mesquiz.php"> Si tu veux voir tes Quiz, clique ici </a></div>
    <p class="pmoncompte">Si tu souhaites modifier ton pseudo, il suffit de le remplacer ci dessous de valider ;)</p>
    <div class="app-form-group ">
        <form class="formmodif" action="modifier.php" method="post">
            <input class="app-form-control" name='name' type='text' value="<?php echo $user['name'] ?>">
            <input class="boutons" type=submit>
        </form>
    </div>
</div>

<div class="formulaire">
    <p class="pmoncompte">Si tu souhaites modifier ton adresse email, il suffit de le remplacer ci dessous de valider ;)</p>
    <div class="app-form-group ">
        <form class="formmodif" action="modifier2.php" method="post">
            <input class="app-form-control" name='email' type='text' value="<?php echo $mail['email'] ?>">
            <input class="boutons" type=submit>
        </form>
    </div>
</div>

























<?php
require('./footer.php');
?>