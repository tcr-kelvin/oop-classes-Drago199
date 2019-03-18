<?php

class Figuur
{
    public $kleur;
    public $hoogte;
    public $breedte;

    public function __construct($kleur, $hoogte, $breedte)
    {
        $this->kleur = $kleur;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
    }
}

class Vierkant extends Figuur
{
    public function __construct($kleur, $hoogte, $breedte)
    {
        parent::__construct($kleur, $hoogte, $breedte);
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
        $this->kleur = $kleur;
    }
}

class Driekoek extends Figuur
{
    public $border_left;
    public $border_right;
    public $border_bottom;

    public function __construct($kleur, $hoogte, $breedte, $border_left, $border_right, $border_bottom)
    {
        parent::__construct($kleur, $hoogte, $breedte);
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
        $this->kleur = $kleur;

        $this->border_left = $border_left;
        $this->border_right = $border_right;
        $this->border_bottom = $border_bottom;
    }
}

class Rechthoek extends Figuur
{

    public function __construct($kleur, $hoogte, $breedte)
    {
        parent::__construct($kleur, $hoogte, $breedte);
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
        $this->kleur = $kleur;
    }
}

class Cirkel extends Figuur
{
    public $radius;

    public function __construct($kleur, $hoogte, $breedte, $radius)
    {
        parent::__construct($kleur, $hoogte, $breedte);
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
        $this->kleur = $kleur;

        $this->radius = $radius;
    }
}

$Vierkant = new Vierkant("red", 100, 100);
$Rechthoek = new Rechthoek("blue", 100, 200);
$Driehoek = new Driekoek("transparent", 0, 0, "100px solid transparent", "100px solid transparent", "100px solid green");
$Cirkel = new Cirkel("yellow", 150, 150, 50);

?>

<html lang="en">
<body>

<div style="width:<?php echo $Vierkant->breedte ?>px; height:<?php echo $Vierkant->hoogte ?>px; background-color:<?php echo $Vierkant->kleur ?>; "></div>

<div style="width:<?php echo $Rechthoek->breedte ?>px; height:<?php echo $Rechthoek->hoogte ?>px; background-color:<?php echo $Rechthoek->kleur ?>; "></div>

<div style="width:<?php echo $Driehoek->breedte ?>px; height:<?php echo $Driehoek->hoogte ?>px; background-color:<?php echo $Driehoek->kleur ?>; border-left: <?php echo $Driehoek->border_left ?>; border-right: <?php echo $Driehoek->border_right ?>; border-bottom: <?php echo $Driehoek->border_bottom ?>;"></div>

<div style="width:<?php echo $Cirkel->breedte ?>px; height:<?php echo $Cirkel->hoogte ?>px; background-color:<?php echo $Cirkel->kleur ?>; border-radius: <?php echo $Cirkel->radius ?>%; "></div>

</body>
</html>