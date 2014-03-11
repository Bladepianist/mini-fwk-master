<?php

	/*
	
	class Utilisateur {
	
		public $idUtilisateur; //Clé primaire
		public $nomUtilisateur;
		public $prenomUtilisateur;
		public $dateNaissanceUtilisateur;
		public $emailUtilisateur;
		public $dateInscription;
		public $password;
		public $idStatutUtilisateur; //Clé secondaire vers classe statutUtilisateur
		public $idNiveauUtilisateur; //Clé secondaire vers classe niveauUtilisateur
		public $idDepartement; //Clef secondaire vers classe Departement
		public $idGroupeUtilisateur; // Clef secondaire vers classe GroupeUtilisateur
	}
	*/
	
	
	class UtilisateurManager {

	
//----------------------------------------- Création, Suppression et Listage Utilisateurs --------------------------------------//


		public  function creerUtilisateur($m){
			
			$sql = "INSERT INTO Utilisateur(nomUtilisateur, prenomUtilisateur, dateNaissanceUtilisateur, emailUtilisateur, password, idNiveauUtilisateur, idDepartement, idGroupeUtilisateur) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->nomUtilisateur, $m->prenomUtilisateur, $m->dateNaissanceUtilisateur, $m->emailUtilisateur, $m->password, $m->idNiveauUtilisateur, $m->idDepartement, $m->idGroupeUtilisateur));
			$m->id=DB::get_instance()->lastInsertId();
			return $m;
			
		}
		
		public  function modifierUtilisateur($m, $id){
			
			$sql = "UPDATE Utilisateur SET nomUtilisateur = ?, prenomUtilisateur = ?, dateNaissanceUtilisateur = ?, emailUtilisateur = ?, password = ?, idStatutUtilisateur = ?, idNiveauUtilisateur = ?, idDepartement = ?, idGroupeUtilisateur = ? WHERE idUtilisateur = ?";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->nomUtilisateur, $m->prenomUtilisateur, $m->dateNaissanceUtilisateur, $m->emailUtilisateur, $m->password, $m->idStatutUtilisateur, $m->idNiveauUtilisateur, $m->idDepartement, $m->idGroupeUtilisateur, $id));
			return $m;
			
		}
		
		public function listerUtilisateur(){
			$sql="SELECT * from Utilisateur, statutUtilisateur, niveauUtilisateur, Departement, groupeUtilisateur WHERE
                            Utilisateur.idStatutUtilisateur = statutUtilisateur.idStatutUtilisateur AND Utilisateur.idNiveauUtilisateur = niveauUtilisateur.idNiveauUtilisateur
                              AND Utilisateur.idDepartement = Departement.idDepartement AND Utilisateur.idGroupeUtilisateur = groupeUtilisateur.idGroupeUtilisateur";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			if($res->rowCount()==0){
				return false;
			}
			// Tentative en cas de plusieurs résultats
			return $res->fetchAll();
		}
                
                public function listerUtilisateur2(){
                    $sql="SELECT * from Utilisateur, statutUtilisateur, niveauUtilisateur, Departement, groupeUtilisateur WHERE 
                  Utilisateur.idStatutUtilisateur = statutUtilisateur.idStatutUtilisateur AND Utilisateur.idNiveauUtilisateur = niveauUtilisateur.idNiveauUtilisateur
                  AND Utilisateur.idDepartement = Departement.idDepartement AND Utilisateur.idGroupeUtilisateur = groupeUtilisateur.idGroupeUtilisateur";
                    $res=DB::get_instance()->prepare($sql);
                    $res->execute(array());
                    if($res->rowCount()==0){
                            return false;
                    }
                    // Tentative en cas de plusieurs r�sultats

                    $donnees = array();
                    while($data = $res->fetch()) {

                            $donnees[$data[0]] = $data[1] . ' ' . $data[2];
                    }
                    return $donnees;
		}
		
		public function supprimerUtilisateur($idUtilisateur){
			$sql="DELETE FROM Utilisateur WHERE idUtilisateur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idUtilisateur));
			//gérer les erreurs éventuelles
			if ($res->rowCount()==0){
				return false;
			}
		}				
		
		
//--------------------------------------------- RECHERCHES ----------------------------------------//



		public  function chercherParID($idUtilisateur){
			$sql="SELECT * from Utilisateur, statutUtilisateur, niveauUtilisateur, Departement, groupeUtilisateur WHERE idUtilisateur=?
                              AND Utilisateur.idStatutUtilisateur = statutUtilisateur.idStatutUtilisateur AND Utilisateur.idNiveauUtilisateur = niveauUtilisateur.idNiveauUtilisateur
                              AND Utilisateur.idDepartement = Departement.idDepartement AND Utilisateur.idGroupeUtilisateur = groupeUtilisateur.idGroupeUtilisateur";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idUtilisateur));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$utilisateur=new Utilisateur();
			$utilisateur->idUtilisateur=$m[0];
			$utilisateur->nomUtilisateur=$m[1];
			$utilisateur->prenomUtilisateur= $m[2];
			$utilisateur->dateNaissanceUtilisateur=$m[3];
			$utilisateur->emailUtilisateur=$m[4];
			$utilisateur->dateInscription=$m[5];
			$utilisateur->password=$m[6];
			$utilisateur->idStatutUtilisateur=$m[7];
                        $utilisateur->nomStatutUtilisateur=$m[12];
			$utilisateur->idNiveauUtilisateur=$m[8];
                        $utilisateur->nomNiveauUtilisateur=$m[14];
			$utilisateur->idDepartement=$m[9];
                        $utilisateur->nomDepartement=$m[16];
			$utilisateur->idGroupeUtilisateur= $m[10];
                        $utilisateur->nomGroupeUtilisateur=$m[18];
			return $utilisateur;
		}

		public  function chercherParEmail($emailUtilisateur){
			$sql="SELECT * from Utilisateur WHERE emailUtilisateur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($emailUtilisateur));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$utilisateur=new Utilisateur();
			$utilisateur->idUtilisateur=$m[0];
			$utilisateur->nomUtilisateur=$m[1];
			$utilisateur->prenomUtilisateur= $m[2];
			$utilisateur->dateNaissanceUtilisateur=$m[3];
			$utilisateur->emailUtilisateur=$m[4];
			$utilisateur->dateInscription=$m[5];
			$utilisateur->password=$m[6];
			$utilisateur->idStatutUtilisateur=$m[7];	
			$utilisateur->idNiveauUtilisateur=$m[8];
			$utilisateur->idDepartement=$m[9];	
			return $utilisateur;
		}	

		
		public  function chercherParNom($nomUtilisateur){
			$sql="SELECT * from Utilisateur WHERE nomUtilisateur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($nomUtilisateur));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			// Tentative en cas de plusieurs résultats
			while ($ligne = $res->fetch(PDO::FETCH_OBJECT)) {
				$data = $ligne->idUtilisateur . "\t" . $ligne->nomUtilisateur . "\t" . 
				$ligne->prenomUtilisateur . "\t" . $ligne->dateNaissanceUtilisateur . "\t" . 
				$ligne->emailUtilisateur . "\t" . $ligne->dateInscription . "\t" . $ligne->password . "\t" .
				$ligne->idStatutUtilisateur . "\t" . $ligne-> idNiveauUtilisateur . "\t" . $ligne->idDepartement . "<br />";
				print $data;
			}
		}
	}
		
?>