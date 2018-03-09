<?php

///////////////////////////////////////////////////////////////////
// Définition des fonctions
///////////////////////////////////////////////////////////////////
function creerVoiture(
    $nomVoiture,
    $capaciteReservoir,
    $contenuReservoir,
    $kilometrage,
    $passageIndicateurReserveRouge,
    $indicateurReserveRouge,
    $consommationLitreAu100
)
{
    echo "Création de la voiture " . $nomVoiture . "<br>";

    return [
        "nomVoiture" => $nomVoiture,
        "capaciteReservoir" => $capaciteReservoir,
        "contenuReservoir" => $contenuReservoir,
        "kilometrage" => $kilometrage,
        "passageIndicateurReserveRouge" => $passageIndicateurReserveRouge,
        "indicateurReserveRouge" => $indicateurReserveRouge,
        "consommationLitreAu100" => $consommationLitreAu100
    ];
}

function creerConducteur( $nom, $conduiteSportive)
{
    echo "Création du conducteur " . $nom . "<br>";

    return [
        "nom" => $nom,
        "conduiteSportive" => $conduiteSportive
    ];
}

function mettreEssence( &$voiture, $nbLitre)
{
    echo "On met " . $nbLitre . " dans la voiture " . $voiture["nomVoiture"] ."<br>";

    $voiture["contenuReservoir"] += $nbLitre;
    $voiture["indicateurReserveRouge"] = ($voiture["contenuReservoir"] < $voiture["passageIndicateurReserveRouge"]) ;
}

function affecterConducteur( &$voiture, &$conducteur)
{
    echo "On affecte le conducteur " . $conducteur["nom"] . " à la voiture " . $voiture["nomVoiture"] . "<br>";

    $voiture["conducteur"] = $conducteur;
}

function rouler( &$voiture, $nbKilometre)
{
    echo "La voiture " . $voiture["nomVoiture"] . " a roulé " . $nbKilometre . " kilometres<br>";

    $voiture["kilometrage"] += $nbKilometre;
    $voiture["contenuReservoir"] -= ($voiture["conducteur"]["conduiteSportive"] ? 1.3 : 1) * $voiture["consommationLitreAu100"] * $nbKilometre / 100;
    $voiture["indicateurReserveRouge"] = ($voiture["contenuReservoir"] < $voiture["passageIndicateurReserveRouge"]) ;

    afficherTableauDeBord($voiture);
}

function afficherTableauDeBord( $voiture )
{
    echo "*********************************************************************<br>";
    echo "Tableau de bord de la voiture " . $voiture["nomVoiture"] . ": <br>";
    echo "Volume reservoir: " . $voiture["contenuReservoir"] . "<br>";
    echo "Indicateur Reserve Rouge: " . ($voiture["indicateurReserveRouge"] ? "Allumé" : "Etteint") . "<br>";
    echo "*********************************************************************<br>";
}

///////////////////////////////////////////////////////////////////
// Simulation
///////////////////////////////////////////////////////////////////

// Création des voitures
$ferrari = creerVoiture("Ferarri F430", 90, 0, 0, 15, true, 11);
$citroen = creerVoiture("2 CV", 28, 0, 0, 7, true, 6.5);

// Création des conducteurs
$louis = creerConducteur("Louis", true);
$marie = creerConducteur("Marie", false);

// Ajout d'essence
mettreEssence($ferrari, 90);
mettreEssence($citroen, 28);

// Affectation des conducteurs
affecterConducteur($ferrari, $louis);
affecterConducteur($citroen, $marie);

// On fait rouler les deux voitures 100 km par itération jusqu'à ce qu'une voiture ait son indicateur de reserve allumé
for( $i = 0; $i < 10 && !$ferrari["indicateurReserveRouge"] && !$citroen["indicateurReserveRouge"]; $i++) {
    echo "<br>Itération numéro " . ($i + 1) . "<br>";
    rouler($ferrari, 100);
    rouler($citroen, 100);
}
















