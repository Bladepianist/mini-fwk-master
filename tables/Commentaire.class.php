<?php
	
	class Commentaire {
	
		public $idCommentaire; // Clef Primaire
		public $commentaire;
		public $datecommentaire;
		public $idUtilisateur; // Clef �trang�re vers classe Utilisateur = idUtilisateur;
		public $idArticle; // Clef �trang�re vers classe Article = idArticle
	}
	
?>