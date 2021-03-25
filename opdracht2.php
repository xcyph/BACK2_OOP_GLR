<?php 
// hier maak je een function die de datum in het nederlands maakt.

function nlDatum($datum , $jaarhalf = ""){

    $maanden=array('01'=>'Januari','02'=>'Februari','03'=>'Maart','04'=>'April','05'=>'Mei','06'=>'Juni',
    '07'=>'Juli','08'=>'Augustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'December');

    // hier doe je met explode 1 ding uit de string pakken, dus bij deze de cijfer van de maand.
    list($y, $m, $d) = explode('-', $datum);
    $timestamp = strtotime($datum);
    $maand = $maanden[$m];

    if (($jaarhalf) > 0) {
        $datum = $d . " " . $maand . " " . date('y', $timestamp);
    } else {
        $datum = $d . " " . $maand  . " " . $y; 
    }
    return $datum;
}
echo nlDatum("1994-05-14");
echo "<br>";
echo nlDatum("1994-05-14" , $jaarhalf = 1);