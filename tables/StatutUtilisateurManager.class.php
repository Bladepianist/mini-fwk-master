<?php

	/*Class StatutUtilisateur {
	
		public $idStatutUtilisateur; // Clef Primaire
		public $idNomStatutUtilisateur;
	}*/
	
	Class StatutUtilisateurManager {
	
		public function listerStatutUtilisateur2(){
                    $sql="SELECT * from StatutUtilisateur";
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
                
                

            public  function creerStatutUtilisateur($m){

                $sql = "INSERT INTO StatutUtilisateur(nomStatutUtilisateur) VALUES (?)";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomStatutUtilisateur));
                $m->id=DB::get_instance()->lastInsertId();
                return $m;
            }

            public  function modifierStatutUtilisateur($m, $id){

                $sql = "UPDATE StatutUtilisateur SET nomStatutUtilisateur = ? WHERE idStatutUtilisateur = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomStatutUtilisateur, $id));
                return $m;
            }
            
            public function listerStatutUtilisateur(){
                $sql="SELECT * from StatutUtilisateur";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();
            }
            
            public function chercherParID($idStatutUtilisateur){
                $sql="SELECT * from StatutUtilisateur WHERE idStatutUtilisateur = ?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idStatutUtilisateur));
                //gérer les erreurs éventuelles
                if($res->rowCount()==0){
                        return false;
                }
                $m= $res->fetch();			
                $statutUtilisateur=new StatutUtilisateur();
                $statutUtilisateur->idStatutUtilisateur=$m[0];
                $statutUtilisateur->nomStatutUtilisateur=$m[1];
                return $statutUtilisateur;
            }
        
            public function supprimerStatutUtilisateur($idStatutUtilisateur){
                $sql="DELETE FROM StatutUtilisateur WHERE idStatutUtilisateur=?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idStatutUtilisateur));
                //gérer les erreurs éventuelles
                if ($res->rowCount()==0){
                        return false;
                }
            }
	}

?>