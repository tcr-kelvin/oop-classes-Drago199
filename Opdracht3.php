<?php

class prijs{
    public $prijs1;
    public $prijs2;
    public $prijs3;
    public $BTW;

    public function __construct($prijs1, $prijs2, $prijs3, $BTW)
    {
        $this->prijs1 = $prijs1;
        $this->prijs1 = $prijs2;
        $this->prijs1 = $prijs3;
        $this->BTW = $BTW;
    }

}




$prijs1 = $_POST['prijs1'];
$prijs2 = $_POST['prijs2'];
$prijs3 = $_POST['prijs3'];
$BTW = 1.10;

$kosten = $prijs1 + $prijs2 + $prijs3;
$kostenBTW = $kosten * $BTW;

echo date('l');
echo "<br/>";
echo "prijs 1: $prijs1";
echo "<br/>";
echo "prijs 2: $prijs2";
echo "<br/>";
echo "prijs 3: $prijs3";
echo "<br/>";
echo "kosten exl BTW: $kosten";
echo "<br/>";
echo "kosten inc BTW: $kostenBTW";
echo "<br/>";
