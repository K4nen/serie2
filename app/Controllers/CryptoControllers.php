<?php
namespace Controllers;

class CryptoControllers
{
    private $vue;

    public function __construct()
    {
        $this->vue = "index.php";
    }

    public function read(){
        $infos
        $this->vue = render('ViewRead',$infos);
    }
}