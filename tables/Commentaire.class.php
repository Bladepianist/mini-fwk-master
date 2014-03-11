<?php
	
	class Commentaire {
	
		public $idCommentaire; // Clef Primaire
		public $commentaire;
		public $datecommentaire;
		public $idUtilisateur; // Clef étrangère vers classe Utilisateur = idUtilisateur;
		public $idArticle; // Clef étrangère vers classe Article = idArticle
	}
	
?>