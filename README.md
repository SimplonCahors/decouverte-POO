# Decouverte-POO

	
- Simulation de deux voitures qu'il faut faire avancer
	- Actions que l'on doit pouvoir faire dans le cadre de la simulation
		- creer voiture // Permet de créer une voiture ( les variables nécessaires pour une voiture )
		- mettreEssence // Permet de mettre un nombre de littre defini dans une voiture, affiche un message à l'écran de l'action effectué ( ex: la voiture 1
		- rouler // Permet de faire rouler un nombre de kilometre à une voiture
		- afficherTableauDeBord // Permet d'afficher le nom de la voiture, l'état du kilometrage, indicateur de reserve et contenu du reservoir
		
	- Données dont vous allez avoir besoins pour une voiture:
		- nomVoiture // Contiendra la marque et la puissance de la voiture
		- capacitéReservoir // Capacité maximale du réservoir de la voiture
		- contenuReservoir // Contient le contenu courrant du réservoir
		- kilometrage // Nombre de kilometre total effectué par la voiture
		- passageIndicateurReserveRouge // Volume en dessous du quel l'indicateurReserveRouge doit être alumé 
		- indicateurReserveRouge // Alumé si on est passé en réserve ( true ), si non eteint ( false )
		- consommationLitreAu100 // Donne la consommation moyenne en nombre de litre pour 100 kilometre
		
	- Faites votre simulation
		- Creez une voiture Ferarri F430
			- capacitéReservoir de 90 litres
			- contenuReservoir de 0 à la création
			- kilometrage de 0
			- passageIndicateurReserveRouge à 15 litres
			- indicateurReserveRouge alumé ( puisqu'il n'y a pas d'essence )
			- consommationLitreAu100 de 11 litres ( car c'est une super sportive )
		- Creez une Citroen 2 CV
			- capacitéReservoir de 28 litres
			- contenuReservoir de 0
			- kilometrage de 0
			- passageIndicateurReserveRouge à 7 litres
			- indicateurReserveRouge alumé
			- consommationLitreAu100 de 6.5 litres
		- faites le plein pour les deux voitures
		- Faite une itération
			- faire rouler 100 km à chaque voiture
			- jusqu'à ce qu'une des deux voitures n'ait plus d'essence ou soit en indicateurRouge alumé
			
		- Point tous ensemble sur les failles du code
			- lisibilité
			- accès aux variables non sécurisé 
				- probleme de types de données
				- probleme de variation de constante
				- probleme d'integrité
				
- Introduction à la POO ( ensemble au tableau )
	- Point tous ensemble 
		sur les  2 grands types de caractéristiques d'un objet
	- Définition d'un objet ( Usine )
		- Propriétés, methodes
		- setters getters
	- Utilisation d'un objet
		- Création d'un objet
		- Accès aux propriétés et méthodes
	
- Reprendre la simulation des voitures en POO
	- Coder et tester
	- Conclusion
		- Voir que tous les problèmes de la programmation procédural sont résolu
