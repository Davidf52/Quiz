<?php 
session_start();

require('./co_bdd.php');

$req= "SELECT question FROM quizz WHERE id_quiz=?";
$req = $bdd ->prepare($req);
$req ->execute(array(
  $_GET['id']
));

$questions = $req->fetchAll();

