<?php

	class Article {

		public $idArticle;  // Clef Primaire
		public $idUtilisateur; // Clef �trang�re vers classe Utilisateur = idUtilisateur
		public $contenuArticle;
		public $dateArticle;
		public $titreArticle;
	}
	
?>