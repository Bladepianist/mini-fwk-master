<?php

	class Utilisateur {
	
		public $idUtilisateur; //Clé primaire
		public $nomUtilisateur;
		public $prenomUtilisateur;
		public $dateNaissanceUtilisateur;
		public $emailUtilisateur;
		public $dateInscription;
		public $password;
		public $idStatutUtilisateur; //Clé secondaire vers classe statutUtilisateur
		public $idNiveauUtilisateur; //Clé secondaire vers classe niveauetude
		public $idDepartement; //Clef secondaire vers classe Departement
		public $idGroupeUtilisateur; // Clef secondaire vers classe GroupeUtilisateur
	}

?>