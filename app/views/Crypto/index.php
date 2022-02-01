<?php
namespace  Crypto;
use Models\Metier\Crypto;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
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
            <a class="navbar-brand" href="#">Les Cryptomonnaies</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#"></a></p>
            <p><a href="#"></a></p>
            <p><a href="#"></a></p>
        </div>
        <div class="col-sm-8 text-left">
            <table class="table table-dark">
                <caption>Liste des Cryptos-monnaies</caption>
                <thead>
                <tr>
                    <th scope="col">Identifiant</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Symbole</th>
                    <th scope="col">Date de Création</th>
                    <th scope="col">Créateur</th>
                    <th scope="col">Minable</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $json = file_get_contents("../../../web/crypto.json");
                $json_split = json_decode($json, true);

                ?>



                <?php
                foreach ($json_split as $key => $val) {
                    echo "<tr>";
                    echo "<td>";
                    echo $val['idCrypto'];
                    echo "</td>";

                    echo "<td>";
                    echo $val['nom'];
                    echo "</td>";

                    echo "<td>";
                    echo $val['symbole'];
                    echo "</td>";

                    echo "<td>";
                    echo $val['dateCreation'];
                    echo "</td>";

                    echo "<td>";
                    echo $val['createur'];
                    echo "</td>";


                    echo "<td>";
                    echo $val['minable'];
                    echo "</td>";

                    echo "<td>";
                    echo "<a href='index.php?controller=CryptoControllers&method=read&id=".$val['idCrypto'].">afficher</a>";
                    echo "</td>";

                    echo "</tr>";

                }

                ?>


                </tbody>
            </table>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p></p>
            </div>
            <div class="well">
                <p></p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>LORIOT Damien et MENADIER Mélodie</p>
</footer>

</body>
</html>








