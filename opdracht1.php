<?php
// Hier maak  je een functie genaamd bereken kamer
function berekenKamer($lengte, $breedte, $hoogte = 1)
{   
    // Hier maak je die parameters aan maar van de hoogte maak je een optionele parameter aan.
    if (is_numeric($lengte) && is_numeric($breedte) && is_numeric($hoogte) > 0) {
        $uitkomst = $lengte * $breedte;
        // Hier maak je die optionele parameter aan.
        if (strlen($hoogte) > 0) {
            $uitkomst = $lengte * $breedte * $hoogte;
        }
        // Hier zorg je dat ie de uitkomst berekent.
        return $uitkomst;
    }
}
// Hier laat je die uitkomst zien en voer je de cijfers in waar ie mee moet berekenen.
echo berekenKamer(2, 2, 10);
?>
