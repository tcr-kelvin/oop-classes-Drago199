<?php

class huis
{
    public $verdiepingen;
    public $kamers = [];
    public $breedte;
    public $hoogte;
    public $diepte;
    public $kubiek;
    public $prijs;

    public function __construct($verdiepingen, $breedte, $hoogte, $diepte, $kubliek, $prijs)
    {
        $this->verdiepingen = $verdiepingen;
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
        $this->diepte = $diepte;
        $this->kubiek = $kubliek;
        $this->prijs = $prijs;
    }

    public function AddKamers($placeholder)
    {
        $this->kamers[] = $placeholder;
    }
}

class kamers
{
    public $aantalKamers;
    public $grootte;

    public function __construct($aantalKamers)
    {
        $this->aantalKamers = $aantalKamers;

    }
}

$huis1 = new huis(2, 500, 500, 500, 250000, 3000);
$huis1Kamers = new kamers(4);
$huis1Kamers->aantalKamers['aantalKamers'];

$huis1->AddKamers($huis1Kamers);

$huis2 = new huis(3, 600, 600, 600, 360000, 5000);
$huis2Kamers = new kamers(5);

$huis2->AddKamers($huis2Kamers);

$huis3 = new huis(4, 800, 800, 800, 480000, 8000);
$huis3Kamers = new kamers(6);

$huis3->AddKamers($huis3Kamers);


echo "Huis 1";
echo "<br/>";
echo "Verdiepingen: $huis1->verdiepingen";
echo "<br/>";
echo "Kamers:" . $huis1->kamers;
echo "<br/>";
echo "Breedte: $huis1->breedte";
echo "<br/>";
echo "Hoogte: $huis1->hoogte";
echo "<br/>";
echo "Diepte: $huis1->diepte";
echo "<br/>";
echo "Kubiek: $huis1->kubiek";
echo "<br/>";
echo "Prijs: $huis1->prijs";
echo "<br/>";
echo "<br/>";
echo "Huis 2";
echo "<br/>";
echo "Verdiepingen: $huis2->verdiepingen";
echo "<br/>";
echo "Kamers: " . $huis2->kamers;
echo "<br/>";
echo "Breedte: $huis2->breedte";
echo "<br/>";
echo "Hoogte: $huis2->hoogte";
echo "<br/>";
echo "Diepte: $huis2->diepte";
echo "<br/>";
echo "Kubiek: $huis2->kubiek";
echo "<br/>";
echo "Prijs: $huis2->prijs";
echo "<br/>";
echo "<br/>";
echo "huis 3";
echo "<br/>";
echo "Verdiepingen: $huis3->verdiepingen";
echo "<br/>";
echo "Kamers: " . $huis3->kamers;
echo "<br/>";
echo "Breedte: $huis3->breedte";
echo "<br/>";
echo "Hoogte: $huis3->hoogte";
echo "<br/>";
echo "Diepte: $huis3->diepte";
echo "<br/>";
echo "Kubiek: $huis3->kubiek";
echo "<br/>";
echo "Prijs: $huis3->prijs";
echo "<br/>";

//
//$huis1 = (string)new huis("2", "5", "600", "600", "300", "1500", "125000");
//$huis2 = (string)new huis("4", "7", "750", "1200", "300", "3000", "250000");
//$huis3 = (string)new huis("3", "6", "800", "900", "300", "2000", "180000");
//
//echo "Huis: $huis1";
//echo "<br/>";
//echo "Huis: $huis2";
//echo "<br/>";
//echo "Huis: $huis3";
//echo "<br/>";