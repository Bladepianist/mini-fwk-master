<?php 

	/*class GroupeUtilisateur {
	
		  public $idGroupeUtilisateur; // Clef Primaire
		  public $nomGroupeUtilisateur;
		  public $idDepartement; // Clef secondaire vers Departement
	}*/
	
	Class GroupeUtilisateurManager {
		
            public function creerGroupeUtilisateur($m) {
                
                $sql = "INSERT INTO GroupeUtilisateur(nomGroupeUtilisateur, idDepartement) VALUES (?, ?)";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($m->nomGroupeUtilisateur, $m->idDepartement));
                $m->id=DB::get_instance()->lastInsertId();
                return $m;
            }
            
            public  function modifierGroupeUtilisateur($m, $id){

                $sql = "UPDATE GroupeUtilisateur SET nomGroupeUtilisateur = ?, idDepartement = ? WHERE idGroupeUtilisateur = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomGroupeUtilisateur, $m->idDepartement, $id));
                return $m;
            }
            
            public function listerGroupeUtilisateur2(){
                $sql="SELECT * from GroupeUtilisateur, Departement WHERE GroupeUtilisateur.idDepartement = Departement.idDepartement";
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

            public function listerGroupeUtilisateur(){
                $sql="SELECT * from GroupeUtilisateur, Departement WHERE GroupeUtilisateur.idDepartement = Departement.idDepartement";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();
            }

            public function chercherParID($idGroupeUtilisateur) {

                $sql="SELECT * from GroupeUtilisateur, Departement WHERE GroupeUtilisateur.idDepartement = Departement.idDepartement AND idGroupeUtilisateur = ?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idGroupeUtilisateur));
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                $m = $res->fetch();
                $groupeUtilisateur = new GroupeUtilisateur();
                $groupeUtilisateur->idGroupeUtilisateur=$m[0];
                $groupeUtilisateur->nomGroupeUtilisateur=$m[1];
                $groupeUtilisateur->idDepartement=$m[2];
                $groupeUtilisateur->nomDepartement=$m[4];
                return $groupeUtilisateur;
            }

            public function supprimerGroupeUtilisateur($idGroupeUtilisateur){
                    $sql="DELETE FROM GroupeUtilisateur WHERE idGroupeUtilisateur=?";
                    $res=DB::get_instance()->prepare($sql);
                    $res->execute(array($idGroupeUtilisateur));
                    //gérer les erreurs éventuelles
                    if ($res->rowCount()==0){
                            return false;
                    }
            }
	}
	
?>