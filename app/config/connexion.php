<?php
$host = "localhost";
$dbname = "crypto";
$user = "root";
$mdp = "root";
try
{
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $mdp);
    $bdd->query("SET CHARACTER SET utf8");
}
catch (PDOException $e){
    echo 'erreur:'.$e->getMessage() . "<br />";
    $bdd = null;
}
?>
