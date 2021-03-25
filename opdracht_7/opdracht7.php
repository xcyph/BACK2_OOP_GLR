<?php
//Display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'auto.php';

//Maak nieuwe auto
$auto1 = new Auto("Volkswagen", "Up", "Wit");

//Eigenschappen
$auto1->tankInhoud = 40;

//Laat de auto zien
echo "<h1>Auto1:</h1>";
echo "Merk: " . $auto1->getMerk() . "<br/>";
echo "Type: " . $auto1->type . "<br/>";
echo "TankInhoud: " . $auto1->tankInhoud . "liter <br/>";
echo "Benzine: " . $auto1->benzinepeil() . "<br/>";
echo "<hr/>";
/** TEST METHODS */
echo "Tank 30 liters:<br/>";
$overschot = $auto1->tanken(30);
echo "Ik heb $overschot liter te veel getankt. <br/>";
echo "Hoeveelheid benzine in de tank: " . $auto1->benzinepeil() . "liter<br/>";
echo "Tank 30 liters:<br/>";

