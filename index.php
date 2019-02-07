<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 06/02/2019
 * Time: 10:42
 */

class auto{
    public $apk;
    public $kmstand;
    public $prijs;
    public $vermogen;
    public $kleur;
    public $merk;
    public $model;

    public function __construct($apk, $prijs, $kmstand, $merk, $model)
    {
        $this->apk = $apk;
        $this->kmstand = $kmstand;
        $this->prijs = $prijs;
        $this->merk = $merk;
        $this->model = $model;
    }
}

$auto = new auto (01-05-18, 24.000, 12.000, "mercedes", "C63 AMG");
$auto->kleur = "groen";
$auto->vermogen = "400 PK";

var_dump($auto);

?>
<br>
<br>
<?php


class klanten{
    public $aankopen;
    public $nieuwsbrief;
    public $apkbrief;
    public $adres;
    public $naam;
    public $opmerking;

    public function __construct($aankopen, $adres, $naam)
    {
        $this->aankopen = $aankopen;
        $this->adres = $adres;
        $this->naam = $naam;
    }
}

$klanten = new klanten(2, "navanderstraat 8f", "matthijs");
$klanten->apkbrief = "ja";
$klanten->nieuwsbrief = "ja";
$klanten->opmerking = "goede klant, betaald weinig";

var_dump($klanten);