<?php 
session_start();
require('./co_bdd.php');
require('./header.php');
$req = "SELECT * FROM quiz WHERE id_categorie = ?"; 
$req = $bdd -> prepare($req); 
$req -> execute(array(
    $_GET['id']
)); 

$quizs = $req -> fetchAll(); 

?>
<div class="titreformquiz">
<h1>Voici la liste des<span> Quiz</span> correspondant à ta recherche ! </h1>
</div>


<?php foreach($quizs as $quiz){ 
    ?>
<div class="choix">
<h3> <?= $quiz['title'] ?></h3>
<?php if (!empty($_SESSION)) { ?>
<a class="choixduquiz" href="affichagequiz.php?id=<?php echo $quiz['id'] ?>" >Choisir ce Quiz ! </a>
<?php } else{ ?>
   <a href="connexion.php"> Connecte toi pour répondre aux Quiz ! </a>
<?php } ?>
</div>
<?php } ?>


<style>
.choix{
    /* display: flex; */
    justify-content: space-around;
    justify-content: center;
    border: 1px black solid;
    border-radius: 4px;
    margin: 20px;
    padding: 5px;
    border-color: #376092 ;
    color: white;
}

.choixduquiz{
text-decoration: none;

}

.titreformquiz{
    margin-top: 7rem;
    margin-bottom: 6rem;
    text-align: center;
    color: white;
}

.titreformquiz span{
color: #c5de49;
}

</style>


<?php
require('./footer.php');
?>

