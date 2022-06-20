<?php session_start();
if(empty($_SESSION['admin']) && !isset($_SESSION['admin'])){
    header('location: connexion.php'); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Parti admin
    <br><br>

    <a href="selection.php">Vasi clique ici si tu veux voir qui s'est inscrit nani nana bro tavu </a>

    <table class="table table-dark">
  <thead>
    ...
  </thead>
  <tbody>
    <tr class="table-active">
      ...
    </tr>
    <tr>
      ...
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2" class="table-active">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    
</body>
</html>

