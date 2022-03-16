<?php
class Employee {
    private $nom;
    private $sou;

public function initialize ($nom, $sou){
    $this->nom = $nom;
    $this->sou = $sou;
}
public function print (){
    echo $this->nom;
    if ($this->sou >= 6000){
        echo " ha de pagar impostos";
    } else {
        echo " no ha de pagar impostos";
    }
}
}


?>