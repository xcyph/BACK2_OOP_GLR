<?php
class Auto
{
    /** Properties */
    private $merk;
    public $type;
    public $kleur;
    public $heeftTrekhaak = false;
    private $kenteken;
    public $kilometers = 0;
    public $tankInhoud;
    private $benzine = 0;
    public $verbruik;

    /** OPDRACHT 7 - CLASS MET CONSTRUCTOR */
    public function __construct($merk, $type, $kleur, $kenteken, $tankInhoud, $verbruik, $kilometers=0, $benzine=0, $trekhaak=false)
    {
        $this->merk = $merk;
        $this->type = $type;
        $this->kleur = $kleur;
        $this->setKenteken($kenteken);
        $this-> tankInhoud = $tankInhoud;
        $this->verbruik = $verbruik;
        $this->kilometers = $kilometers;
        $this->benzine = $benzine;
        $this->trekhaak = $trekhaak;

    }



    /** Methods */

    public function tanken($liters)
    {
        //Aantal liters toevoegen aan de tank
        $this->benzine += $liters;
        //Controleren of er teveel is toegevoegd
        if ($this->benzine > $this->tankInhoud)
        {
            $teveel = $this->benzine - $this->tankInhoud;
            $this->benzine = $this->tankInhoud;
            return $teveel;
        }
        else{
            return 0;
        }
    }

    public function benzinepeil()
    {
        return $this->benzine;
    }

    public function rijden($aantalKm)
    {
        $maximaleAfstand = $this->benzine / ($this->verbruik * 100);
        //Als km groter is dan maxKm
        if($aantalKm > $maximaleAfstand){
            $totaalGereden = $maximaleAfstand;
//            $teveelKM = $aantalKm - $maximaleAfstand;
        }
        //Anders normale km gereden
        else{
            $totaalGereden = $aantalKm;
        }
        //Kmteller aanpassen
        $this->kilometers += $totaalGereden;
        //Tankinhoud aanpassen
        $verbruikt = ($totaalGereden/100) * $this->verbruik;
        $this->benzine -= $verbruikt;
        //Geef aantal gereden kilometers terug
        return $totaalGereden;
    }

    public function setMerk ($nieuweMerk)
    {
        $this->merk = $nieuweMerk;
    }
    public function getMerk ()
    {
        return $this->merk;
    }

    public function getKenteken()
    {
        return $this->kenteken;
    }
    public function setKenteken($kt)
    {
        //Maak alle letters hoofdletters
        $kt = strtoupper($kt);
        //Verwijder alles wat geen letter, getal of streepje is
        $kt = preg_replace('/[^A-Z0-9\-]/','',$kt);
        //Sla het kenteken op
        $this->kenteken = $kt;
    }




}
