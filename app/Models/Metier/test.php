
<?php
use Models\Metier\Crypto;
include ('Crypto.php');

$testCrypto = new Crypto("1", "Bitcoin", "B", "3 Janvier 2009", "jsp", "crypto-actif" );
$json = json_encode($testCrypto);
//var_dump($testCrypto);
var_dump($json);
?>