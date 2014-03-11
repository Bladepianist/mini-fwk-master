<?php

		// public $idDepartement; // Clef Primaire
		// public $nomDepartement;
		
	class DepartementManager {

		public function creerDepartement($Departement){
			
			$sql = "INSERT INTO Departement VALUES ('', ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($Departement->nomDepartement));		
			$Departement->id=DB::get_instance()->lastInsertId();
			return $Departement;
		}
		
		public function chercherParID($idDepartement) {
		
                    $sql = "SELECT * from Departement WHERE idDepartement = ?";
                    $res = DB::get_instance()->prepare($sql);
                    $res -> execute(array($idDepartement));
                    // Gestion d'erreurs �ventuelles

                    if($res->rowCount() == 0) {

                            return false;
                    }

                    $m = $res -> fetch();
                    $Departement = new Departement();
                    $Departement -> idDepartement = $m[0];
                    $Departement -> nomDepartement = $m[1];
                    return $Departement;
		}
                
                public function listerDepartement(){
                    $sql="SELECT * from Departement";
                    $res=DB::get_instance()->prepare($sql);
                    $res->execute(array());
                    if($res->rowCount()==0){
                            return false;
                    }
                    // Tentative en cas de plusieurs résultats

                    return $res->fetchAll();
                }
		
		public function listerDepartement2(){
                    $sql="SELECT * from Departement";
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
                
                public  function modifierDepartement($m, $id){

                $sql = "UPDATE Departement SET nomDepartement = ? WHERE idDepartement = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->nomDepartement, $id));
                return $m;
            }
	}
?>