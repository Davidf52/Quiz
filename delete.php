<?php 
session_start();
require('./co_bdd.php');
$variable = $bdd -> prepare('DELETE FROM quiz WHERE id=?');
$variable -> execute(array($_GET['id']));

header('location: mesquiz.php');