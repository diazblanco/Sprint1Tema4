<?php
class Employee {
    private $nom;
    private $sou;

/* public function __construct ($nom, $sou){
    $this->nom = $nom;
    $this->sou = $sou;
} */
public function initialize ($nom, $sou){
    $this->nom = $nom;
    $this->sou = $sou;
}
public function print(){
    if ($this->isSalaryGreaterThan6000()){
        //echo $this->nom;
        echo "$this->nom ha de pagar impostos";
    } else { 
        //echo $this->nom;
        echo "$this->nom no ha de pagar impostos";
    }
}
public function isSalaryGreaterThan6000(){
    $isGreater = false;
    if ($this->sou > 6000){
        $isGreater = true;
    }
    return $isGreater;
}

}

?>