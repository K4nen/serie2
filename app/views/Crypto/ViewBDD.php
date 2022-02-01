<!DOCTYPE html>
<html lang="en">
<head>
    <title>Serie 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="color: #f1f1f1">
                <li></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p>  </p>
            <p>  </p>
            <p>  </p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Affichage des Cryptomonnaies</h1>
            <hr>


            <?php
            require_once ('../../config/connexion.php');
            $response = $bdd->prepare('Select * from Crypto');
            $response->execute();
            ?>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Symbole</th>
                    <th scope="col">Date de Création</th>
                    <th scope="col">Créateur</th>
                    <th scope="col">Minable</th>
                    <th scope="col">Editer</th>
                    <th scope="col">Supprimer</th>
                </tr>
                </thead>
                <?php
                $lesCryptos = $response->fetchAll(); //on récupère toutes les lignes en une seule fois
                foreach ($lesCryptos as $uneCrypto) {
                    ?>

                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $uneCrypto['id']; ?></th>
                        <td><?php echo $uneCrypto['Nom']; ?></td>
                        <td><?php echo $uneCrypto['Symbole']; ?></td>
                        <td><?php echo $uneCrypto['DateCreation']; ?></td>
                        <td><?php echo $uneCrypto['Createur']; ?></td>
                        <td><?php echo $uneCrypto['Minable'] ?></td>
                        <td><button type="button" class="btn btn-default" onclick="window.location.href = 'update.php?id=<?php echo $uneCrypto['id'] ?>'" aria-label="Left Align" style="color: cornflowerblue;">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </button></td>
                        <td><button type="button" class="btn btn-default" onclick="window.location.href = 'delete.php?id=<?php echo $uneCrypto['id'] ?>'" aria-label="Left Align" style="color: firebrick">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </button></td>
                    </tr>
                    </tbody>
                <?php } ?>
            </table>








        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>LORIOT Damien et MENADIER Mélodie   688R</p>
</footer>

</body>
</html>


