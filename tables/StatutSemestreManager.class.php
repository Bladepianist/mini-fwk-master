<?php

	/*Class StatutSemestre {
		
		public $idStatutSemestre; // Clef Primaire
		public $nomStatutSemestre;
	}*/
	
	Class StatutSemestreManager {
	
            public function listerStatutSemestre2(){
                $sql="SELECT * from StatutSemestre";
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

            public  function creerStatutSemestre($m){

                $sql = "INSERT INTO StatutSemestre(nomStatutSemestre) VALUES (?)";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomStatutSemestre));
                $m->id=DB::get_instance()->lastInsertId();
                return $m;
            }

            public  function modifierStatutSemestre($m, $id){

                $sql = "UPDATE StatutSemestre SET nomStatutSemestre = ? WHERE idStatutSemestre = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomStatutSemestre, $id));
                return $m;
            }
            
            public function listerStatutSemestre(){
                $sql="SELECT * from StatutSemestre";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();
            }
            
            public function chercherParID($idStatutSemestre){
                $sql="SELECT * from StatutSemestre WHERE idStatutSemestre = ?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idStatutSemestre));
                //gérer les erreurs éventuelles
                if($res->rowCount()==0){
                        return false;
                }
                $m= $res->fetch();			
                $statutSemestre=new StatutSemestre();
                $statutSemestre->idStatutSemestre=$m[0];
                $statutSemestre->nomStatutSemestre=$m[1];
                return $statutSemestre;
            }
        
            public function supprimerStatutSemestre($idStatutSemestre){
                $sql="DELETE FROM StatutSemestre WHERE idStatutSemestre=?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idStatutSemestre));
                //gérer les erreurs éventuelles
                if ($res->rowCount()==0){
                        return false;
                }
            }
	}
?>