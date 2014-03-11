<?php

	/*Class Controle {
	
		public $idControle; // Clef Primaire
		public $idNomControle;
	}*/
	
	Class ControleManager {
	
		public function listerControle2(){
                    $sql="SELECT * from Controle";
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
                
                

            public  function creerControle($m){

                $sql = "INSERT INTO Controle(typeControle, coeffControle) VALUES (?, ?)";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->typeControle, $m->coeffControle));
                $m->id=DB::get_instance()->lastInsertId();
                return $m;
            }

            public  function modifierControle($m, $id){

                $sql = "UPDATE Controle SET typeControle = ?, coeffControle = ? WHERE idControle = ? ";
                $res = DB::get_instance()->prepare($sql);
                $res -> execute(array($m->typeControle, $m->coeffContole, $id));
                return $m;
            }
            
            public function listerControle(){
                $sql="SELECT * from Controle";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array());
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();
            }
            
            public function chercherParID($idControle){
                $sql="SELECT * from Controle WHERE idControle = ?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idControle));
                //gérer les erreurs éventuelles
                if($res->rowCount()==0){
                        return false;
                }
                $m= $res->fetch();			
                $controle=new Controle();
                $controle->idControle=$m[0];
                $controle->typeControle=$m[1];
                $controle->coeffControle=$m[2];
                return $controle;
            }
        
            public function supprimerControle($idControle){
                $sql="DELETE FROM Controle WHERE idControle=?";
                $res=DB::get_instance()->prepare($sql);
                $res->execute(array($idControle));
                //gérer les erreurs éventuelles
                if ($res->rowCount()==0){
                        return false;
                }
            }
	}

?>