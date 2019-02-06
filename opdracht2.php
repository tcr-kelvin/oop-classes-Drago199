<?php

class auto{
    public $merk;
    public $model;
    public $kenteken;
    public $deuren;
    public $kleur;
    public $verkocht;

    public function __construct($merk, $model, $kenteken, $kleur, $verkocht)
    {
        $this->merk = $merk;
        $this->model = $model;
        $this->kenteken = $kenteken;
        $this->kleur = $kleur;
        $this->verkocht = $verkocht;
    }
}

$auto = new auto("BMW", "gta", "zzq44qwe", "wit",5);

var_dump($auto);

class klant{
    public $naam;
    public $id;
    public $telNummer;
    public $email;
    public $adres;
    public $autos;
    public $APKDatum;

    public function __construct($naam, $id, $telNummer, $email, $adres, $APKDatum)
    {
        $this->naam = $naam;
        $this->id = $id;
        $this->telNummer = $telNummer;
        $this->email = $email;
        $this->adres = $adres;
        $this->APKDatum= $APKDatum;
    }
}

$klant = new klant("Plop", "4", 0633333333, "Plop@kabouter.koek", "Paddenstoel 5", 28/7/2099);

var_dump($klant);