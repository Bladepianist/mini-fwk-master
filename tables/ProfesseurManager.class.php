<?php

	/*Class Professeur {
	
		public $idProfesseur; // Clef Primaire
		public $nomProfesseur;
		public $prenomProfesseur;
		public $emailProfesseur;
		public $idPosteAdministratif;
	}*/
	
	class ProfesseurManager {

	
//----------------------------------------- Création, Suppression et Listage Professeur --------------------------------------//


		public  function creerProfesseur($m){
			
			$sql = "INSERT INTO Professeur(nomProfesseur, prenomProfesseur, emailProfesseur, idPosteAdministratif) VALUES (?, ?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->nomProfesseur, $m->prenomProfesseur, $m->emailProfesseur, $m->idPosteAdministratif));
			$m->id=DB::get_instance()->lastInsertId();
			return $m;
			
		}
		
		public  function modifierProfesseur($m, $idProfesseur){
			
			$sql = "UPDATE Professeur SET nomProfesseur = ?, prenomProfesseur = ?, emailProfesseur = ?, idPosteAdministratif = ? WHERE idProfesseur = ?";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->nomProfesseur, $m->prenomProfesseur, $m->emailProfesseur, $m->idPosteAdministratif, $m->idProfesseur));
			return $m;
			
		}
		
		public function listerProfesseur2(){
                    $sql="SELECT * from Professeur, PosteAdministratif WHERE Professeur.idPosteAdministratif = PosteAdministratif.idPosteAdministratif";
                    $res=DB::get_instance()->prepare($sql);
                    $res->execute();
                    if($res->rowCount()==0){
                            return false;
                    }
                    // Tentative en cas de plusieurs résultats
                    $donnees = array();
                    while($data = $res->fetch()) {

                            $donnees[$data[0]] = $data[1];
                    }
                    return $donnees;
		}
                
                public function listerProfesseur(){
                    $sql="SELECT * from Professeur, PosteAdministratif WHERE Professeur.idPosteAdministratif = PosteAdministratif.idPosteAdministratif";
                    $res=DB::get_instance()->prepare($sql);
                    $res->execute();
                    if($res->rowCount()==0){
                            return false;
                    }
                    // Tentative en cas de plusieurs résultats
                    
                    return $res->fetchAll();
		}
		
		public function supprimerProfesseur($idProfesseur){
			$sql="DELETE FROM Professeur WHERE idProfesseur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idProfesseur));
			//gérer les erreurs éventuelles
			if ($res->rowCount()==0){
				return false;
			}
		}				
		
		
//--------------------------------------------- RECHERCHES ----------------------------------------//



		public  function chercherParID($idProfesseur){
			$sql="SELECT * from Professeur, PosteAdministratif WHERE Professeur.idPosteAdministratif = PosteAdministratif.idPosteAdministratif AND idProfesseur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idProfesseur));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$professeur=new Professeur();
			$professeur->idProfesseur=$m[0];
			$professeur->nomProfesseur=$m[1];
			$professeur->prenomProfesseur= $m[2];
			$professeur->emailProfesseur=$m[3];
			$professeur->idPosteAdministratif=$m[4];
                        $professeur->nomPosteAdministratif=$m[6];
			return $professeur;
		}

		public  function chercherParEmail($emailProfesseur){
			$sql="SELECT * from Professeur, PosteAdministratif WHERE Professeur.idPosteAdministratif = PosteAdministratif.idPosteAdministratif AND emailProfesseur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idProfesseur));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$professeur=new Professeur();
			$professeur->idProfesseur=$m[0];
			$professeur->nomProfesseur=$m[1];
			$professeur->prenomProfesseur= $m[2];
			$professeur->emailProfesseur=$m[3];
			$professeur->idPosteAdministratif=$m[4];
                        $professeur->nomPosteAdministratif=$m[6];
			return $professeur;
		}	

		
		public  function chercherParNom($nomProfesseur){
			$sql="SELECT * from Professeur, PosteAdministratif WHERE Professeur.idPosteAdministratif = PosteAdministratif.idPosteAdministratif AND nomProfesseur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($nomProfesseur));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			// Tentative en cas de plusieurs résultats

				$donnees = array();
                                $i = 0;
				while($data = $res->fetch()) {
				
					$donnees[$data[0]] = $data[1];
                                        $i++;
				}
				return $donnees;
		}
	}	
	
?>