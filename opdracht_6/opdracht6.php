<?php
//Foutmelding
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Auto.php';

//Nieuwe auto
$auto1 = new Auto();
$auto1 = setKenteken("77-GD-X");
//Eigenschappen
$auto1-> setMerk ("Honda");
$auto1->type = "Civic";
$auto1->kleur = "Black";
$auto1->tankInhoud = 40;
//De auto laten zien:
echo "<h1>Auto 1:</h1>";
//KENTEKEN UITLEZEN
echo $auto1->getKenteken();
echo "Merk: " . $auto1->getMerk() . "<br/>";
echo "Type: " . $auto1->type . "<br/>";
echo "TankInhoud: " . $auto1->tankInhoud . "liter <br/>";
echo "Benzine: " . $auto1->benzine . "<br/>";