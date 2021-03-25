<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 4 || OOP</title>
</head>
<body>
    <?php 
    // Maak class aan
    class Auto 
{   
    // Maak eigenschappen aan
    private $merk;
    public $type;
    public $kleur;
    public $heeftTrekhaak = false;
    public $tankInhoud;
    public $benzine;
    private $kenteken;
    public $kilometers;

    public function __construct($mk, $tp, $kl, $hth=false)
    {
        $this->merk = $mk;
        $this->type = $tp;
        $this->kleur = $kl;
        $this->heeftTrekhaak = $hth;
        $this->kilometers = 0;
        $this->benzine = 0;
    }


}
    ?>
</body>
</html>