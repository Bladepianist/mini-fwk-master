<?php

		// public $idDepartement; // Clef Primaire
		// public $nomDepartement;
		
class TestDepartement extends Module{

	public function	action_index(){
		
		//instancie le DepartementManager pour effectuer des tests
		$Depart = new  DepartementManager ();
		
		//création d'un Departement fictif
		echo "<p>Création BD</p>";		
		$Departement=new Departement();
		$Departement->nomDepartement="Genie Biologique";
		$resultat = $Depart->creerDepartement($Departement);

		echo "Departement créé, id=".$resultat->id;
		
		//récupération dans la BD
		echo "<p>récupération BD</p>";
		
		$Departement = $Depart->listerDepartement();
		var_dump($Departement);
		
		// Recherche par Titre
		
		echo "<p>Recherche Departement ".$resultat->titreDepartement."</p>";
											
		$Departement = $User->chercherDepartementParTitre(Salut);
		var_dump($Departement);
	}
}


?>
