<?php

		// public $idDepartement; // Clef Primaire
		// public $nomDepartement;
		
class TestDepartement extends Module{

	public function	action_index(){
		
		//instancie le DepartementManager pour effectuer des tests
		$Depart = new  DepartementManager ();
		
		//cr�ation d'un Departement fictif
		echo "<p>Cr�ation BD</p>";		
		$Departement=new Departement();
		$Departement->nomDepartement="Genie Biologique";
		$resultat = $Depart->creerDepartement($Departement);

		echo "Departement cr��, id=".$resultat->id;
		
		//r�cup�ration dans la BD
		echo "<p>r�cup�ration BD</p>";
		
		$Departement = $Depart->listerDepartement();
		var_dump($Departement);
		
		// Recherche par Titre
		
		echo "<p>Recherche Departement ".$resultat->titreDepartement."</p>";
											
		$Departement = $User->chercherDepartementParTitre(Salut);
		var_dump($Departement);
	}
}


?>
