<?php
//Display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'auto.php';
include 'EigenAuto.php';
include 'LeaseAuto.php';

/**Maak nieuwe auto **/
$auto1 = new Auto("Opel", "Corsa", "Black");
//echo "<strong>Auto 1</strong>";
//echo $auto1;

/**Lease auto **/
$auto2 = new LeaseAuto("BMW", "M340i", "Red");
$auto2 -> tanken(75);
$auto2 -> rijden("420");
$auto2 -> leaseMaatschappij = "GLR";

/**Eigen auto **/
$auto3 = new EigenAuto("Fiat","500", "Wit");
$auto3 -> aankoopDatum ("03-03-2020");

/** Tonen **/
//AUTO 1
echo "<strong>Auto 1</strong>";
echo $auto1;
echo "Merk:" .$auto1->getMerk(). "<br/>";
echo "Type:" .$auto1->getType(). "<br/>";
echo "Kleur:" .$auto1->getKleur(). "<br/>";

