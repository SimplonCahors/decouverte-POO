<?php

class Voiture 
{
    private $nomVoiture;
    private $capaciteReservoir;
    private $contenuReservoir;
    private $kilometrage;
    private $passageIndicateurReserveRouge;
    private $indicateurReserveRouge;
    private $consommationLitreAu100;
    private $conducteur;

    public function __construct(
                                    $nomVoiture,
                                    $capaciteReservoir,
                                    $passageIndicateurReserveRouge,
                                    $consommationLitreAu100
                                ){
        echo "Construction de la voiture " . $nomVoiture . "<br>";

        $this->nomVoiture = $nomVoiture;
        $this->capaciteReservoir = $capaciteReservoir;
        $this->passageIndicateurReserveRouge = $passageIndicateurReserveRouge;
        $this->consommationLitreAu100 = $consommationLitreAu100;
        $this->contenuReservoir = 0;
        $this->kilometrage = 0;
        $this->indicateurReserveRouge = true;
        $this->conducteur = null;
    }

    public function mettreEssence( $nbLitre)
    {
        echo "On met " . $nbLitre . " litres dans la voiture " . $this->nomVoiture ."<br>";
    
        $this->setContenuReservoir($nbLitre);
    }

    public function rouler( $nbKilometre )
    {
        echo "La voiture " . $this->nomVoiture . " a roulé " . $nbKilometre . " kilometres<br>";
        
        $this->kilometrage += $nbKilometre;
        $this->setContenuReservoir( $this->contenuReservoir - 
                                    ($this->conducteur->isConduiteSportive() ? 1.3 : 1) * 
                                    $this->consommationLitreAu100 * $nbKilometre / 100 );
    
        $this->afficherTableauDeBord();
    }

    public function afficherTableauDeBord()
    {
        echo "*********************************************************************<br>";
        echo "Tableau de bord de la voiture " . $this->nomVoiture . ": <br>";
        echo "Volume reservoir: " . $this->contenuReservoir . "<br>";
        echo "Indicateur Reserve Rouge: " . ($this->indicateurReserveRouge ? "Allumé" : "Etteint") . "<br>";
        echo "*********************************************************************<br>";
    }

    public function getContenuReservoir()
    {
        return $this->contenuReservoir;
    }

    public function setContenuReservoir( $nbLitre )
    {
        $this->contenuReservoir = $nbLitre;
        $this->setIndicateurReserveRouge( $this->contenuReservoir < $this->passageIndicateurReserveRouge );
    }
    
    public function getIndicateurReserveRouge()
    {
        return $this->indicateurReserveRouge;
    }

    public function setIndicateurReserveRouge()
    {
        $this->indicateurReserveRouge = $this->contenuReservoir < $this->passageIndicateurReserveRouge;
    }

    public function setConducteur( $conducteur )
    {
        echo "On affecte le conducteur " . $conducteur->getNom() . " à la voiture " . $this->nomVoiture . "<br>";

        $this->conducteur = $conducteur;
    }
}

class Conducteur 
{
    private $nom;
    private $conduiteSportive;

    public function __construct($nom, $conduiteSportive)
    {
        echo "Construction du conducteur " . $nom . "<br>";

        $this->nom = $nom;
        $this->conduiteSportive = $conduiteSportive;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function isConduiteSportive()
    {
        return $this->conduiteSportive;
    }
}


///////////////////////////////////////////////////////////////////
// Simulation
///////////////////////////////////////////////////////////////////

// Création des voitures
$ferrari = new Voiture("Ferarri F430", 90, 15, 11);
$citroen = new Voiture("2 CV", 28, 7, 6.5);

// Création des conducteurs
$louis = new Conducteur("Louis", true);
$marie = new Conducteur("Marie", false);

// Ajout d'essence
$ferrari->mettreEssence(90);
$citroen->mettreEssence(28);

// Affectation des conducteurs
$ferrari->setConducteur($louis);
$citroen->setConducteur($marie);


// On fait rouler les deux voitures 100 km par itération jusqu'à ce qu'une voiture ait son indicateur de reserve allumé
for( $i = 0; $i < 10 && !$ferrari->getIndicateurReserveRouge() && !$citroen->getIndicateurReserveRouge(); $i++) {
    echo "<br>Itération numéro " . ($i + 1) . "<br>";
    $ferrari->rouler(100);
    $citroen->rouler(100);
}

