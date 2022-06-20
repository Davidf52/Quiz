<?php
session_start();
require('./co_bdd.php');
require('./header.php');

$req = "SELECT * FROM categorie";

$req = $bdd->query($req);

$categories = $req->fetchAll();

?>
<div class="pourback">
    <?php if (!empty($_SESSION)) { ?>
        <div class="banniereco">
            <div class="ajoutquiz">
                <a href="ajout.php"> Ajoute tes propres Quiz </a><br>
            <?php } ?>
            </div>

        </div>
        <div class="banentier">
            <div class="bg banniere">
                <div class="form">
                    <form action="" method="get">
                        <input class="inputrr" type="text" placeholder="Recherche par thème">

                        <input class="inputsi" value="Rechercher" type="submit">
                    </form>
                    <div class="text_centrer">
                        <h1><span>QuizStart</span> !</h1><br>
                        <p>Recherche les <span>Quiz</span> par thème et relève le défi ! </p>
                    </div>
                </div>
            </div>
        </div>

</div>

<div class="titrecat">
    <h1> Catégories de Quiz ! </h1>
</div>

<div class="cards">
    <?php foreach ($categories as $categorie) { ?>
        <div class="card">

            <div class="card-body">
                <h5 class="card-title"><?= $categorie['theme'] ?></h5>
                <p class="description">Voici la liste des Quiz de Sport, ajoutés par nos utilisateurs !</p>
                <a href="formquiz.php?id=<?= $categorie['id'] ?>" class="btn btn-primary">Rechercher</a>
            </div>
        </div>
    <?php } ?>

    <div class="card">

        <div class="card-body">
            <h5 class="card-title">Mes Quiz </h5>
            <p class="description">Voici la liste de mes Quiz !</p>
            <a href="mesquiz.php" class="btn btn-primary">Rechercher</a>
        </div>
    </div>
</div>











<?php
require('./footer.php');
?>