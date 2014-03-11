<?php

	/*Class PosteAdministratif {
	
		public $idPosteAdministratif; // Clef Primaire
		public $idNomPosteAdministratif;
	}*/
	
	Class PosteAdministratifManager {
	
		public function listerPosteAdministratif2(){
                    $sql="SELECT * from PosteAdministratif";
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
                
                

            public  function creerPosteAdministratif($m){

                $sql = "INSERT INTO PosteAdministratif(nomPosteAdministratif) VALUES (?)";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomPosteAdministratif));
                $m->id=DB::get_instance()->lastInsertId();
                return $m;
            }

            public  function modifierPosteAdministratif($m, $id){

                $sql = "UPDATE PosteAdministratif SET nomPosteAdministratif = ? WHERE idPosteAdministratif = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomPosteAdministratif, $id));
                return $m;
            }
            
            public function listerPosteAdministratif(){
                $sql="SELECT * from PosteAdministratif";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();
            }
            
            public function chercherParID($idPosteAdministratif){
                $sql="SELECT * from PosteAdministratif WHERE idPosteAdministratif = ?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idPosteAdministratif));
                //gérer les erreurs éventuelles
                if($res->rowCount()==0){
                        return false;
                }
                $m= $res->fetch();			
                $statutUtilisateur=new PosteAdministratif();
                $statutUtilisateur->idPosteAdministratif=$m[0];
                $statutUtilisateur->nomPosteAdministratif=$m[1];
                return $statutUtilisateur;
            }
        
            public function supprimerPosteAdministratif($idPosteAdministratif){
                $sql="DELETE FROM PosteAdministratif WHERE idPosteAdministratif=?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idPosteAdministratif));
                //gérer les erreurs éventuelles
                if ($res->rowCount()==0){
                        return false;
                }
            }
	}

?>