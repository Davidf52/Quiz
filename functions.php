<?php

function recupereQuestion($tt)
{

    global $bdd; 
    $req = "SELECT question,reponse FROM quizz WHERE id_quiz=?";
    $req = $bdd->prepare($req);
    $req->execute(array(
        $tt
    ));
    $questions = $req->fetchAll();
    return $questions; 
}



