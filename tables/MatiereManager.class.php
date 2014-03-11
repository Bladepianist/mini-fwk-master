<?php

	/*Class Matiere {
	
		public $idMatiere; // Clef Primaire
		public $nomMatiere;
		public $coeffMatiere;
		public $idUE; // Clef �trang�re vers la classe UE;
	}*/
	
		class MatiereManager {

	
//----------------------------------------- Cr�ation, Suppression et Listage Matiere --------------------------------------//


		public  function creerMatiere($m){
			
			$sql = "INSERT INTO Matiere(nomMatiere, coeffMatiere, idUE) VALUES (?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->nomMatiere, $m->coeffMatiere, $m->idUE));
			$m->id=DB::get_instance()->lastInsertId();
			return $m;
			
		}
		
		public  function modifierMatiere($m, $idMatiere){
			
			$sql = "UPDATE Matiere SET nomMatiere = ?, coeffMatiere = ?, idUE = ? WHERE idMatiere = ?";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->nomMatiere, $m->coeffMatiere, $m->idUE, $idMatiere));
			return $m;
			
		}
		
		public function listerMatiere2(){
                    $sql="SELECT * from Matiere, UE WHERE Matiere.idUE = UE.idUE";
                    $res=DB::get_instance()->prepare($sql);
                    $res->execute();
                    if($res->rowCount()==0){
                            return false;
                    }
                    // Tentative en cas de plusieurs r�sultats
                    $donnees = array();
                    while($data = $res->fetch()) {

                            $donnees[$data[0]] = $data[1];
                    }
                    return $donnees;
		}
                
                public function listerMatiere(){
                    $sql="SELECT * from Matiere, UE WHERE Matiere.idUE = UE.idUE";
                    $res=DB::get_instance()->prepare($sql);
                    $res->execute();
                    if($res->rowCount()==0){
                            return false;
                    }
                    // Tentative en cas de plusieurs r�sultats
                    
                    return $res->fetchAll();
		}
		
		public function supprimerMatiere($idMatiere){
			$sql="DELETE FROM Matiere WHERE idMatiere=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idUtilisateur));
			//g�rer les erreurs �ventuelles
			if ($res->rowCount()==0){
				return false;
			}
		}				
		
		
//--------------------------------------------- RECHERCHES ----------------------------------------//



		public  function chercherParID($idMatiere){
			$sql="SELECT * from Matiere, UE WHERE Matiere.idUE = UE.idUE AND idMatiere=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idMatiere));
			//g�rer les erreurs �ventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$matiere=new Matiere();
			$matiere->idMatiere=$m[0];
			$matiere->nomMatiere=$m[1];
			$matiere->coeffMatiere= $m[2];
			$matiere->idUE=$m[3];
                        $matiere->nomUE=$m[6];
			return $matiere;
		}

		
		public  function chercherParNom($nomMatiere){
			$sql="SELECT * from Matiere, UE WHERE Matiere.idUE = UE.idUE AND nomMatiere LIKE ?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($nomMatiere));
			//g�rer les erreurs �ventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$matiere=new Matiere();
			$matiere->idMatiere=$m[0];
			$matiere->nomMatiere=$m[1];
			$matiere->coeffMatiere= $m[2];
			$matiere->idUE=$m[3];
		}
	}
?>