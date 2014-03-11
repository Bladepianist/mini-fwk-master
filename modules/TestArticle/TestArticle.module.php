<?php


class TestArticle extends Module{

	public function	action_index(){
		
		//instancie le ArticleManager pour effectuer des tests
		$Art = new  ArticleManager ();
		
		//création d'un Article fictif
		echo "<p>Création BD</p>";		
		$Article=new Article();
		$Article->titreArticle="salut";
		$Article->contenuArticle="salut";
		$Article->idUtilisateur=3;
		$resultat = $Art->creerArticle($Article);

		echo "Article créé, id=".$resultat->id;
		
		//récupération dans la BD
		echo "<p>récupération BD</p>";
		
		$Article = $Art->chercherArticleParId($resultat->id);
		var_dump($Article);
		
		// Recherche par Titre
		
		echo "<p>Recherche article ".$resultat->titreArticle."</p>";
											
		$Article = $Art->chercherArticleParTitre(Salut);
		var_dump($Article);
	}
}


?>
