<?php

	class Note {
	
		public $idNote; // Clef Primaire
		public $valeurNote;
		public $dateNote;
		public $idControle; //Clé étrangère vers la classe controle
		public $idUtilisateur; // Clé étrangère vers la classe Utilisateur
		public $idMatiere; //Clé étrangère vers la classe Matière
	}

?>