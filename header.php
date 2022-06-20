<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="sstyle.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        
    <div class="pourback">
        <?php if (!empty($_SESSION)) { ?>

            <a href="deconnexion.php">Deconnexion</a>

        <?php } ?>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a href="index.php" class="navbar-brand "> QuizStart</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
                            </li>

                            <li class="nav-item">
                                <?php if (!empty($_SESSION)) { ?>
                                    <a class="nav-link" href="moncompte.php">Mon Compte </a>
                                <?php } ?>

                                <?php if (empty($_SESSION)) { ?>
                                    <a class="nav-link" href="connexion.php">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inscription.php">Inscription</a>
                            </li>
                        <?php } ?>


                        </ul>
                    </div>
                </div>
            </nav>
    </div>
    </header>