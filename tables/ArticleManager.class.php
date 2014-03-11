<?php

	class ArticleManager {

          
            public function listerArticle(){
                $sql="SELECT * from Article, Utilisateur WHERE Article.idUtilisateur = Utilisateur.idUtilisateur";
                $res=DB::get_instance()->prepare($sql);
                $res->execute();
                if($res->rowCount()==0){
                        return false;
                }
                // Tentative en cas de plusieurs résultats

                return $res->fetchAll();    
            }
            
            public function listerArticle2(){
                $sql="SELECT * from Article, Utilisateur WHERE Article.idUtilisateur = Utilisateur.idUtilisateur";
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
            
            public function creerArticle($Article){

                    $sql = "INSERT INTO Article(titreArticle, contenuArticle, idUtilisateur) VALUES (?, ?, ?)";
                    $res = DB::get_instance()->prepare($sql);
                    $res -> execute(array(
                        $Article->titreArticle,
                        $Article->contenuArticle,		
                        $Article->idUtilisateur));		
                    $Article->id=DB::get_instance()->lastInsertId();
                    return $Article;
            }
            
            public  function modifierArticle($m, $id){
			
			$sql = "UPDATE Article SET titreArticle = ?, contenuArticle = ?, idUtilisateur = ? WHERE idArticle = ?";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->titreArticle, $m->contenuArticle, $m->idUtilisateur, $id));
			return $m;
			
            }

            public function chercherParID($idArticle) {

                    $sql = "SELECT * from Article, Utilisateur WHERE idArticle = ? AND Article.idUtilisateur=Utilisateur.idUtilisateur";
                    $res = DB::get_instance()->prepare($sql);
                    $res -> execute(array($idArticle));
                    // Gestion d'erreurs éventuelles

                    if($res->rowCount() == 0) {

                            return false;
                    }

                    $Art = $res -> fetch();
                    $Article = new Article();
                    $Article -> idArticle = $Art[0];
                    $Article -> titreArticle = $Art[1];
                    $Article -> contenuArticle = $Art[2];
                    $Article -> dateArticle = $Art[3];
                    $Article -> idUtilisateur = $Art[4];
                    $Article -> nomUtilisateur = $Art[6];
                    $Article -> prenomUtilisateur = $Art[7];
                    return $Article;
            }

            public function chercherArticleParTitre($titreArticle) {

                    $sql = "SELECT * from Article WHERE titreArticle LIKE :recherche";
                    $res = DB::get_instance()->prepare($sql);
                    $res -> execute(array(":recherche" => "%$titre%"));
                    // Gestion d'erreurs éventuelles

                    if($res->rowCount() == 0) {

                            return false;
                    }

                    $Art = $res -> fetch();
                    $Article = new Article();
                    $Article -> idArticle = $Art[0];
                    $Article -> titreArticle = $Art[1];
                    $Article -> contenuArticle = $Art[2];
                    $Article -> dateArticle = $Art[3];
                    $Article -> idUtilisateur = $Art[4];
                    return $Article;
            }
            
            public function supprimerArticle($idArticle){
			$sql="DELETE FROM Article WHERE idArticle=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idArticle));
			//gérer les erreurs éventuelles
			if ($res->rowCount()==0){
				return false;
			}
		}	
	}
	
?>