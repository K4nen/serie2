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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
        .buttonAccept {
            background-color: #369901;
            border: none;
            color: white;
            padding: 8px 18px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
            font-family: Arial;
        }

        .buttonDecline {
            background-color: #f9021f;
            border: none;
            color: white;
            padding: 8px 18px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
            font-family: Arial;
        }
    </style>
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
            <h1>Ajouter un crypto : </h1>
            <hr>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Nom</label>
                        <input type="text" class="form-control" id="inputNom" placeholder="Nom">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSymbole">Symbole</label>
                        <input type="text" class="form-control" id="inputSymbole" placeholder="Symbole">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDateCrea">Date de Création</label>
                    <input type="text" class="form-control" id="inputDateCrea" placeholder="JJ/MM/AAAA">
                </div>
                <div class="form-group">
                    <label for="inputCreateur">Créateur</label>
                    <input type="text" class="form-control" id="inputCreateur" placeholder="Prenom Nom">
                </div>
                <div class="form-row">
                    <legend class="col-form-label col-sm-2 pt-0">Minable</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Non
                        </label>
                    </div>

                </div>

                <button type="submit" class="buttonAccept">Ajouter</button>
                <button class="buttonDecline" onclick="window.location.href = 'index.php';">Annuler</button>
            </form>
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






