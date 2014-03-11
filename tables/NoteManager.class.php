<?php

	/*class Note {
	
		public $idNote; // Clef Primaire
		public $valeurNote;
		public $dateNote;
		public $idControle; //Clé étrangère vers la classe controle
		public $idUtilisateur; // Clé étrangère vers la classe Utilisateur
		public $idMatiere; //Clé étrangère vers la classe Matière
	}*/

	class NoteManager {

	
//----------------------------------------- Création, Suppression et Listage Note --------------------------------------//


		public  function creerNote($m){
			
			$sql = "INSERT INTO Note(valeurNote, dateNote, idControle, idUtilisateur, idMatiere) VALUES (?, ?, ?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->valeurNote, $m->dateNote, $m->idControle, $m->idUtilisateur, $m->idMatiere));
			$m->id=DB::get_instance()->lastInsertId();
			return $m;
			
		}
		
		public  function modifierNote($m, $id){
			
			$sql = "UPDATE Note SET valeurNote = ?, dateNote = ?, idControle = ?, idUtilisateur = ?, idMatiere = ? WHERE idNote = ?";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->valeurNote, $m->dateNote, $m->idControle, $m->idUtilisateur, $m->idMatiere, $id));
			return $m;
			
		}
		
		public function listerNote(){
			$sql="SELECT * from Note, Matiere, Controle, Utilisateur WHERE Note.idControle = Controle.idControle AND Note.idUtilisateur = Utilisateur.idUtilisateur AND Note.idMatiere = Matiere.idMatiere";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			if($res->rowCount()==0){
				return false;
			}
			// Tentative en cas de plusieurs résultats

			return $res->fetchAll();
		}
		
		public function supprimerNote($idNote){
			$sql="DELETE FROM Note WHERE idNote=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idNote));
			//gérer les erreurs éventuelles
			if ($res->rowCount()==0){
				return false;
			}
		}				
		
		
//--------------------------------------------- RECHERCHES ----------------------------------------//



		public function chercherParID($idNote){
			$sql="SELECT * from Note, Matiere, Controle, Utilisateur WHERE idNote = ? AND Note.idControle = Controle.idControle AND Note.idUtilisateur = Utilisateur.idUtilisateur AND Note.idMatiere = Matiere.idMatiere";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idNote));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$note=new Note();
			$note->idNote=$m[0];
			$note->valeurNote=$m[1];
			$note->dateNote= $m[2];
			$note->idControle=$m[3];
			$note->idUtilisateur=$m[4];
                        $note->nomUtilisateur=$m[15];
                        $note->prenomUtilisateur=$m[16];
			$note->idMatiere=$m[5];
                        $note->nomMatiere=$m[7];
                        $note->typeControle=$m[12];
			return $note;
		}

		public function chercherParValeur($valeurNote){
			$sql="SELECT * from Note WHERE valeurNote=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($valeurNote));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}			
			// Tentative recherche résultats multiples
                        $donnees = array();
                        $i = 0;
                        while($data = $res->fetch()) {

                            $donnees[$data[0]] = $data[1];
                            $i++;
                        }
                        return $donnees;
		}	

		
		public function chercherParIdUtilisateur($idUtilisateur){
			$sql="SELECT * from Note WHERE idUtilisateur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idUtilisateur));
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
		
		public function chercherParIdMatiere($idMatiere){
			$sql="SELECT * from Note WHERE idMatiere=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idMatiere));
			//gérer les erreurs éventuelles
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
	}	
?>