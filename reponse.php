<?php
session_start();
require('./co_bdd.php');
$tab = [];
var_dump($_GET); 

$req = 'SELECT question,reponse FROM quiz INNER JOIN quizz ON quizz.id_quiz = quiz.id WHERE quiz.id=?';
$req = $bdd->prepare($req);
$req->execute(array(
    $_GET['id_quiz']

));


$reponse = $req->fetchAll();


$req = "SELECT * FROM quizz WHERE id_quiz = ? AND nq = 1"; 
$req = $bdd -> prepare($req);
$req -> execute(array($_GET['id_quiz']));
$q1 = $req -> fetch();


$req = "SELECT * FROM quizz WHERE id_quiz = ? AND nq = 2"; 
$req = $bdd -> prepare($req);
$req -> execute(array($_GET['id_quiz']));
$q2 = $req -> fetch();

$total = 0; 

if((strtolower($_GET['reponse1']) == strtolower($q1['reponse']))){  
    $total++;
}
if((strtolower($_GET['reponse2']) == strtolower($q2['reponse']))){
    $total++;
}

if($total == 2){
    header('location: question2.php');
}elseif($total == 1){
    if((strtolower($_GET['reponse1']) != strtolower($q1['reponse']))){  
        header('location: affichagequiz.php?id='.$_GET['id_quiz'].'&error=q1&rep2='.$_GET['reponse2']); 
    }
    if(strtolower(($_GET['reponse2']) != strtolower($q2['reponse']))){
        header('location: affichagequiz.php?id='.$_GET['id_quiz'].'&error=q2&rep1='.$_GET['reponse1']); 
    }
}else{
    header('location: affichagequiz.php?id='.$_GET['id_quiz'].'&error=complet'); 
}
