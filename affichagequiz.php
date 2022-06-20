<?php session_start();
require('./co_bdd.php');
require('./header.php');
?>

<div class="titree">
<h1>Voici le Quiz que tu as selectionné ! </h1>
</div>

<?php
$req = 'SELECT * FROM quizz WHERE id_quiz = ?';
$req = $bdd->prepare($req);
$req->execute(array(
    $_GET['id']

));

$var = $req->fetchAll();

?>

<div class="affichages">

    <div class="messageErreur">
        <?php if (isset($_GET['error']) && !empty($_GET['error'])) {
            if ($_GET['error'] == 'q1') {
        ?>
                <div class="alert alert-danger" role="alert">
                La réponse à la question 1 est fausse !
                </div>

            <?php } elseif ($_GET["error"] == "q2") {
            ?>
                <div class="alert alert-danger" role="alert">
                    La réponse à la question 2 est fausse !
                </div>
            <?php
            }elseif($_GET['error'] == 'complet'){
                ?>
                 <div class="alert alert-danger" role="alert">
                    Toutes tes réponses sont fausses !
                </div>

                <?php
            }
            ?>
        <?php } ?>
    </div>




    <form action="reponse.php" method="get">

        <?php
        $nombreId = 1;
        foreach ($var as $va) { ?>
            <div class="affichage">
                <?php echo $va['question'] ?>
            </div>


            <input type="hidden" name="id_quiz" value="<?= $_GET['id'] ?>">
            <input type="hidden" name="id<?= $nombreId ?>" value="<?= $va['id'] ?>">

            <input type="text" placeholder="Votre réponse" value="<?php
                if(isset($_GET['rep1']) && (strtolower($_GET['rep1']) == strtolower($va['reponse']))){echo $_GET['rep1'];}elseif(isset($_GET['rep2']) && (strtolower($_GET['rep2']) == strtolower($va['reponse']))){echo $_GET['rep2'];}
            ?>" name="reponse<?= $nombreId ?>">


        <?php
            $nombreId++;
        }
        ?>

        <input type="submit">
    </form>



</div>


















<?php require('./footer.php') ?>