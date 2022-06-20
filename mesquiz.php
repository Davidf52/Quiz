<?php
session_start();
require('./co_bdd.php');
require('./header.php');
require('./functions.php');

if (isset($_GET['idq']) && !empty($_GET['idq'])) {
    $lesQuestions = recupereQuestion($_GET['idq']);
}



if (!empty($_SESSION)) {
    $req = "SELECT categorie.theme, categorie.id as cid, quiz.title, quiz.id FROM quiz INNER JOIN categorie ON id_categorie = categorie.id WHERE id_Users = ?";
    $req = $bdd->prepare($req);
    $req->execute(array(
        $_SESSION['id'],

    ));
    $titres = $req->fetchAll();

?>

    <style>
        .liencomptedeux a {
            color: #c5de49;
        }
    </style>


    <div class="titreencore">
        <h1> Voici la liste des questionnaires que tu as créé ! </h1>
    </div>

    <div class="mesquiz">
        <?php

        $t = 'a';
        foreach ($titres as $titre) {

        ?>

            <div class="leQuizz <?= $t ?>">
                <?= $titre['title']; ?>
                <div class="liencomptedeux">

                    <a href="delete.php?id=<?= $titre['id'] ?>">Supprimer ce Quiz </a><br>
                    <a href="mesquiz.php?idq=<?= $titre['id'] ?>">Afficher mon Quiz </a>

                </div>
            </div>

        <?php
            $t++;
        } ?>

        <?php if (isset($_GET['idq']) && !empty($_GET['idq'])) { ?>

            <?php foreach ($lesQuestions as $question) {  ?>

                Question: <?= $question['question'] ?> <br>
                Réponse: <?= $question['reponse'] ?>
                <br>

        <?php }
        } ?>

    </div>
<?php } else { ?>
    <a href="connexion.php">Connecte toi pour avoir accès à tes Quiz !</a>
<?php
}
require('./footer.php');
?>