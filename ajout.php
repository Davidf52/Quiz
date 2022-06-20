<?php session_start();
require('./co_bdd.php'); 

$req = 'SELECT * FROM categorie';
$req = $bdd->query($req);

$categories = $req->fetchAll();
?>



<div class="titreajout">
    <h1> Crée ton propre Quiz ! </h1>
</div>
<a href="index.php">Retour</a>
<form action="ajout2.php" method="post" class="formquiz">
    <div class="titreform">
        <label for="name">Entre le titre de ton Quiz ! </label>
        <input type="text" name="title" required>
    </div><br>
    <div class="liste">
        <label for="liste"> Choix de la catégorie ! </label>
        <select name="categorie" id="liste">
            <?php
            foreach ($categories as $categorie) { ?>
                <option value="<?php echo $categorie['id'] ?>">
                    <?php echo $categorie['theme']; ?>

                </option>
            <?php } ?>


        </select>
    </div>
    <div class="lesdeux">
        <div class="groupe">
            <div class="quizquestion">
                <h2>Ajoute tes propres <span>questions</span></h2>
                <div class="form-ex">
                    <label for="name">Entre ta <span> première </span> question : </label>
                    <input type="text" name="question1" required>
                </div><br>

            </div>
            <div class="quizquestion">
                <h2>Ajoute tes propres <span>réponses</span></h2>

                <div class="form-ex">
                    <label for="name">Entre ta <span>première </span>réponse : </label>
                    <input type="text" name="reponse1" required>
                </div><br>
            </div>
        </div>
        <div class="groupe">
            <div class="quizquestion">
                <h2>Ajoute tes propres <span>questions</span></h2>
                <div class="form-ex">
                    <label for="name">Entre ta <span>seconde</span> question : </label>
                    <input type="text" name="question2" required>
                </div><br>

            </div>
            <div class="quizquestion">
                <h2>Ajoute tes propres <span>réponses</span></h2>

                <div class="form-ex">
                    <label for="name">Entre ta <span>seconde</span> réponse : </label>
                    <input type="text" name="reponse2" required>
                </div><br>
            </div>

            <div class="form-example">
                <input type="submit" value="Envoyer !">
            </div>
        </div>
    </div>
</form>

<style>
    .formquiz h2 span {
        color: #c5de49;
    }

    .lesdeux {
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 2vh;
        align-items: flex-start;
        border: 1px solid black;
        border-radius: 5px;
        margin-top: 80px;

    }

    .titreajout {
        text-align: center;
        margin: 50px;
        color: #c5de49;
    }

    .quizquestion {
        display: block;
        width: 50%;
        align-items: center;


    }

    .formquiz {
        display: flex;
        flex-direction: column;
        padding: 1rem;
        margin: 4vh;
    }

    body {
        background: linear-gradient(#376092, #c5de49);
        color: white;
    }

    .form-example {
        margin: 3rem;
    }

    input[type=submit] {
        background-color: #376092;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
