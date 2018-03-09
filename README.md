# Decouverte-POO

	
## Simulation de deux voitures qu'il faut faire avancer avec leur conducteurs
- Actions que l'on doit pouvoir faire dans le cadre de la simulation ( faire des fonctions )
	- creerVoiture: Permet de créer une voiture ( les variables nécessaires pour une voiture )
	- mettreEssence: Permet de mettre un nombre de littre defini dans une voiture, affiche un message à l'écran de l'action effectué ( ex: Voiture Ferrari ajoute 50 litre d'essence )
	- entreeConducteur: Permet d'affecter un conducteur à la voiture
	- rouler: 
		- Permet de faire rouler un nombre de kilometre défini à une voiture
		- On part des principes suivants:
			- Si le conducteur à une conduite normale sa consommation sera la consommation moyenne de la voiture
			- Si le conducteur a une conduite sportive sa consommation sera de 30% supérieure à la conso normale.
	- afficherTableauDeBord: Permet d'afficher le nom de la voiture, l'état du kilometrage, indicateur de reserve et contenu du reservoir
	
- Données dont vous allez avoir besoin: 
	- Pour chaque conducteur:
		- nom
		- ConduiteSportive: indicateur  booléen ( oui, non)
	- pour chaque voiture:
		- nomVoiture: Contiendra la marque et la puissance de la voiture
		- capacitéReservoir: Capacité maximale du réservoir de la voiture
		- contenuReservoir: Contient le contenu courrant du réservoir
		- kilometrage: Nombre de kilometre total effectué par la voiture
		- passageIndicateurReserveRouge: Volume en dessous du quel l'indicateurReserveRouge doit être allumé 
		- indicateurReserveRouge: Allumé si on est passé en réserve ( true ), si non eteint ( false )
		- consommationLitreAu100: Donne la consommation moyenne en nombre de litre pour 100 kilometre
	
- Faites votre simulation
	- Création des voitures:
		- Creez une voiture Ferarri F430
			- capacitéReservoir de 90 litres
			- contenuReservoir de 0 à la création
			- kilometrage de 0
			- passageIndicateurReserveRouge à 15 litres
			- indicateurReserveRouge allumé ( puisqu'il n'y a pas d'essence )
			- consommationLitreAu100 de 11 litres ( car c'est une super sportive )
		- Creez une Citroen 2 CV
			- capacitéReservoir de 28 litres
			- contenuReservoir de 0
			- kilometrage de 0
			- passageIndicateurReserveRouge à 7 litres
			- indicateurReserveRouge allumé
			- consommationLitreAu100 de 6.5 litres
	- Création de deux conducteurs ( un avec conduite sportive l'autre avec conduite calme)
	- Faites le plein pour les deux voitures
	- Affecter un conducteur à chaque voiture
	- Faites des itération jusqu'à ce qu'une des deux voitures ait son indicateurRouge allumé
		- faire rouler 100 km chaque voiture
- Pour la correction: [simulation_procedurale.php](simulation_procedurale.php)

## Point tous ensemble sur les failles du code procédural
- lisibilité
- accès aux variables non sécurisé 
	- probleme de types de données
	- probleme de variation de constante
	- probleme d'integrité
				
## Introduction à la POO ( ensemble au tableau )
- Point tous ensemble 
	sur les  2 grands types de caractéristiques d'un objet
- Définition d'un objet ( Usine )
	- Propriétés, methodes
	- setters getters
- Utilisation d'un objet
	- Création d'un objet ( Instanciation )
	- Accès aux propriétés et méthodes
	
## Reprendre la simulation des voitures en POO
- Coder et tester
- Conclusion
	- Voir que tous les problèmes de la programmation procédural sont résolu
- Pour la correction: [simulation_poo.php](simulation_poo.php)
