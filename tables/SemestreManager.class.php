<?php

	/*class Semestre {
	
		public $idSemestre; // Clef Primaire
		public $nomSemestre;
		public $idStatutSemestre; // Clef étrangère vers StatutSemestre
	}*/

	Class SemestreManager {
	
            public  function creerSemestre($m){
			
                $sql = "INSERT INTO Semestre(nomSemestre, idStatutSemestre) VALUES (?, ?)";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomSemestre,
                       $m->idStatutSemestre));
                $m->id=DB::get_instance()->lastInsertId();
                return $m;
            }

            public  function modifierSemestre($m, $id){

                $sql = "UPDATE Semestre SET nomSemestre = ?, idStatutSemestre = ? WHERE idSemestre = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomSemestre, $m->idStatutSemestre, $id));
                return $m;
            }
            
            public function listerSemestre(){
                $sql="SELECT * from Semestre, StatutSemestre WHERE Semestre.idStatutSemestre = StatutSemestre.idStatutSemestre";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();
            }
            
            public function listerSemestre2(){
                $sql="SELECT * from Semestre, StatutSemestre WHERE Semestre.idStatutSemestre = StatutSemestre.idStatutSemestre";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
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
            
            public function chercherParID($idSemestre){
                $sql="SELECT * from Semestre, StatutSemestre WHERE idSemestre = ? AND Semestre.idStatutSemestre = StatutSemestre.idStatutSemestre";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idSemestre));
                //gérer les erreurs éventuelles
                if($res->rowCount()==0){
                        return false;
                }
                $m= $res->fetch();			
                $semestre=new Semestre();
                $semestre->idSemestre=$m[0];
                $semestre->nomSemestre=$m[1];
                $semestre->idStatutSemestre=$m[2];
                $semestre->nomStatutSemestre=$m[4];
                return $semestre;
            }
            
            public function supprimerSemestre($idSemestre){
			$sql="DELETE FROM Semestre WHERE idSemestre=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idSemestre));
			//gérer les erreurs éventuelles
			if ($res->rowCount()==0){
				return false;
			}
		}
	}	
?>