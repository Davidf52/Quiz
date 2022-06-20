<?php
require('../co_bdd.php');

$req = "SELECT * FROM users";
$req = $bdd->query($req);
$select = $req->fetchall(); ?>

<?php
foreach ($select as $sel) { ?>
    <ol>
        <div class="">
            <option value="<?php echo $sel['id'] ?>">
        </div>

        <li> <?php echo $sel['email'] ?></li>
        <li> <?php echo $sel['name']  ?></li>
        <li> <?php echo $sel['password'] ?> </li>

    </ol>

    </option>
<?php } ?>