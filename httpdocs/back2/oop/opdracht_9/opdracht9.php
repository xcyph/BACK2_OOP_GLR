<?php
include 'Auto.php';
//FORMULIER VERSTUURD?
if (isset($_POST['voegtoe']))
{
    //ZET GEGEVENS IN EEN AUTO
    $merk         =     $_POST ['merk'];
    $type         =     $_POST ['type'];
    $kleur        =     $_POST ['kleur'];
    $trekhaak     =     $_POST ['trekhaak'];
    $kenteken     =     $_POST ['kenteken'];
    $kilometers   =     $_POST ['kilometers'];
    $tankinhoud   =     $_POST ['tankinhoud'];
    $benzine      =     $_POST ['benzine'];
    $verbruik     =     $_POST ['verbruik'];


    $auto1 = new Auto();

    //ZET AUTO IN ARRAY


}


//TOON ALLE AUTOS OP HET SCHERM



//FORMULIER
?>
<h1>Auto toevoegen</h1>
<form method="post" action="">
    <table>
        <tr>
            <td>Merk:</td>
            <td><input type="text" name="merk" value="Spyker" required /></td>
        </tr>
        <tr>
            <td>Type:</td>
            <td><input type="text" name="type" value="C8" required /></td>
        </tr>
        <tr>
            <td>Kleur:</td>
            <td><input type="text" name="kleur" value="Rood" required /></td>
        </tr>
        <tr>
            <td>Trekhaak:</td>
            <td><input type="radio" name="trekhaak" value="true" />Ja <input type="radio" name="trekhaak" value="false" />Nee</td>
        </tr>
        <tr>
            <td>Kenteken:</td>
            <td><input type="text" name="kenteken" value="S-844-T" required /></td>
        </tr>
        <tr>
            <td>Gereden:</td>
            <td><input type="number" name="kilometers" value="0" />km</td>
        </tr>
        <tr>
            <td>Tankinhoud:</td>
            <td><input type="number" name="tankinhoud" value="50" required />liters</td>
        </tr>
        <tr>
            <td>Benzine:</td>
            <td><input type="number" name="benzine" value="0" required />liters</td>
        </tr>
        <tr>
            <td>Verbruik:</td>
            <td><input type="number" name="verbruik" value="12" required />liters/100km</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="voegtoe" value="VOEG TOE" /></td>
        </tr>
    </table>
</form>
