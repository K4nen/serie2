<?php

namespace Models\Metier;
class Crypto
{
    public $idCrypto;
    public $nom;
    public $symbole;
    public $dateCreation;
    public $createur;
    public $minable;

    /**
     * @param $idCrypto
     * @param $nom
     * @param $symbole
     * @param $dateCreation
     * @param $createur
     * @param $minable
     */
    public function __construct($idCrypto, $nom, $symbole, $dateCreation, $createur, $minable)
    {
        $this->idCrypto = $idCrypto;
        $this->nom = $nom;
        $this->symbole = $symbole;
        $this->dateCreation = $dateCreation;
        $this->createur = $createur;
        $this->minable = $minable;
    }

    /**
     * @return mixed
     */
    public function getidCrypto()
    {
        return $this->idCrypto;
    }

    /**
     * @param mixed $nom
     */
    public function setidCrypto($idCrypto)
    {
        $this->nom = $idCrypto;
    }
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getSymbole()
    {
        return $this->symbole;
    }

    /**
     * @param mixed $symbole
     */
    public function setSymbole($symbole)
    {
        $this->symbole = $symbole;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * @param mixed $createur
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;
    }

    /**
     * @return mixed
     */
    public function getMinable()
    {
        return $this->minable;
    }

    /**
     * @param mixed $minable
     */
    public function setMinable($minable)
    {
        $this->minable = $minable;
    }


}