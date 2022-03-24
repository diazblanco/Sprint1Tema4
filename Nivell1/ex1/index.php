<?php

include 'Employee.php';

/* Así instanciaríamos si utilizaramos el constructor
$employee1 = new Employee("Irene",6000);
$employee2 = new Employee("Marc",6001); */

$employee1 = new Employee(); //En el ejemplo sin constructor, 1ero instanciamos el objeto
$employee2 = new Employee(); 

$employee1->initialize("Irene",6000); // Y con el método initialize lo inicializamos
$employee2->initialize("Marc",6001);

$employee1->print();
$employee2->print();

?>