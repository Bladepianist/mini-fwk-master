<?php

	/*Class NiveauUtilisateur {
	
		public $idNiveauUtilisateur; // Clef Primaire
		public $idNomNiveauUtilisateur;
	}*/
	
	Class NiveauUtilisateurManager {
	
		public function listerNiveauUtilisateur2(){
                    $sql="SELECT * from NiveauUtilisateur";
                    $res=DB::get_instance()->prepare($sql);
                    $res->execute(array());
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
                
                

            public  function creerNiveauUtilisateur($m){

                $sql = "INSERT INTO NiveauUtilisateur(nomNiveauUtilisateur) VALUES (?)";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomNiveauUtilisateur));
                $m->id=DB::get_instance()->lastInsertId();
                return $m;
            }

            public  function modifierNiveauUtilisateur($m, $id){

                $sql = "UPDATE NiveauUtilisateur SET nomNiveauUtilisateur = ? WHERE idNiveauUtilisateur = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomNiveauUtilisateur, $id));
                return $m;
            }
            
            public function listerNiveauUtilisateur(){
                $sql="SELECT * from NiveauUtilisateur";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();
            }
            
            public function chercherParID($idNiveauUtilisateur){
                $sql="SELECT * from NiveauUtilisateur WHERE idNiveauUtilisateur = ?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idNiveauUtilisateur));
                //gérer les erreurs éventuelles
                if($res->rowCount()==0){
                        return false;
                }
                $m= $res->fetch();			
                $statutUtilisateur=new NiveauUtilisateur();
                $statutUtilisateur->idNiveauUtilisateur=$m[0];
                $statutUtilisateur->nomNiveauUtilisateur=$m[1];
                return $statutUtilisateur;
            }
        
            public function supprimerNiveauUtilisateur($idNiveauUtilisateur){
                $sql="DELETE FROM NiveauUtilisateur WHERE idNiveauUtilisateur=?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idNiveauUtilisateur));
                //gérer les erreurs éventuelles
                if ($res->rowCount()==0){
                        return false;
                }
            }
	}

?>