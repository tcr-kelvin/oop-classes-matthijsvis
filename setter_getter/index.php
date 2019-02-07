<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 07/02/2019
 * Time: 10:32
 */

class opp{
    public $lengte;
    public $breedte;

    public function __construct($lengte, $breedte)
    {
        $this->lengte = $lengte;
        $this->breedte = $breedte;
    }

    public function oppervlak(){
       return $this->breedte * $this->lengte;
    }
}

$opp = new opp(10,10);

var_dump($opp);

?>
<br>
<br>
<?php

echo $opp->oppervlak();


