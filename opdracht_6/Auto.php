<?php
class Auto
{
    // Maak eigenschappen aan
    private $merk;
    public $type;
    public $kleur;
    public $heeftTrekhaak = false;
    private $kenteken;
    public $kilometers = 0;
    public $tankInhoud;
    private $benzine = 0;
    public $verbruik;

    //Set de private classes public

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
    public function benzinepeil()
    {
        return $this->benzine;
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
