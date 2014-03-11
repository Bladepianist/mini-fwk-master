<?php

	/*Class UE {
		
		public $idUE; // Clef Primaire
		public $nomUE;
		public $idSemestre;
	}*/

	Class UEManager {
	
		 
            public  function creerUE($m){
			
                $sql = "INSERT INTO UE(nomUE, idSemestre) VALUES (?, ?)";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomUE,
                       $m->idSemestre));
                $m->id=DB::get_instance()->lastInsertId();
                return $m;
            }

            public  function modifierUE($m, $id){

                $sql = "UPDATE UE SET nomUE = ?, idSemestre = ? WHERE idUE = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomUE, $m->idSemestre, $id));
                return $m;
            }
            
            public function listerUE(){
                $sql="SELECT * from UE, Semestre WHERE UE.idSemestre = Semestre.idSemestre";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();
            }
            
            public function listerUE2(){
                $sql="SELECT * from UE, Semestre WHERE UE.idSemestre = Semestre.idSemestre";
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
            
            public function chercherParID($idUE){
                $sql="SELECT * from UE, Semestre WHERE idUE = ? AND UE.idSemestre = Semestre.idSemestre";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idUE));
                //gérer les erreurs éventuelles
                if($res->rowCount()==0){
                        return false;
                }
                $m= $res->fetch();			
                $semestre=new UE();
                $semestre->idUE=$m[0];
                $semestre->nomUE=$m[1];
                $semestre->idSemestre=$m[2];
                $semestre->nomSemestre=$m[4];
                return $semestre;
            }
        
            public function supprimerUE($idUE){
                $sql="DELETE FROM UE WHERE idUE=?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idUE));
                //gérer les erreurs éventuelles
                if ($res->rowCount()==0){
                        return false;
                }
            }
        }
?>