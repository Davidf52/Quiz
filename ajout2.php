<?php 
session_start();
require('./co_bdd.php');

// ajout du titre du questionnaire 
$req = 'INSERT INTO quiz (title,id_Users,id_categorie) VALUES (?,?,?)'; 
$bg = $bdd->prepare($req);
$bg -> execute(array(
$_POST['title'],
    $_SESSION['id'],
    $_POST['categorie']
));

 $lastId = $bdd -> lastInsertId(); 
//ajout des questions

$a = $_POST['question1']; 
$b = $_POST['reponse1'];

$c = $_POST['question2']; 
$d = $_POST['reponse2'];

$req = 'INSERT INTO quizz (question,reponse,id_quiz,nq) VALUES (?,?,?,?)'; 
$bg = $bdd->prepare($req);


$bg -> execute([$a,$b,$lastId,1]);
$bg -> execute([$c,$d,$lastId,2]);


header('location: index.php'); 









