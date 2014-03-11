<?php

/*class Utilisateur {
	
		public $idUtilisateur; //Cl� primaire
		public $nomUtilisateur;
		public $prenomUtilisateur;
		public $dateNaissanceUtilisateur;
		public $emailUtilisateur;
		public $dateInscription;
		public $password;
		public $idStatutUtilisateur; //Cl� secondaire vers classe statutUtilisateur
		public $idNiveauUtilisateur; //Cl� secondaire vers classe niveauetude
		public $idDepartement; //Clef secondaire vers classe Departement
	}*/
	
class TestUtilisateur extends Module{

	public function	action_index(){
		
		//instancie le UtilisateurManager pour effectuer des tests
		$User = new  ProfesseurManager ();
                $Spe = new GroupeUtilisateurManager();
                $Note = new NoteManager();
                $Article = new ArticleManager();
                $Semestre = new SemestreManager();
		
		$Res = ProfesseurManager::listerProfesseur();
                var_dump($Res);
	}
}


?>
