<?php


	/*class Commentaire {
	
		public $idCommentaire; // Clef Primaire
		public $commentaire;
		public $datecommentaire;
		public $idUtilisateur; // Clef étrangère vers classe Utilisateur = idUtilisateur;
		public $idArticle; // Clef étrangère vers classe Article = idArticle
	}*/

	class CommentaireManager{
                
                public function listerCommentaire(){
			$sql="SELECT * from Commentaire, Article, Utilisateur WHERE Commentaire.idUtilisateur = Utilisateur.idUtilisateur AND Commentaire.idArticle = Article.idArticle";
			$res=DB::get_instance()->prepare($sql);
			$res->execute();
			if($res->rowCount()==0){
				return false;
			}
			// Tentative en cas de plusieurs résultats

			return $res->fetchAll();
                }
                
		public  function creerCommentaire($m){
			
			$sql = "INSERT INTO Commentaire(commentaire, idArticle, idUtilisateur) VALUES (?, ?, ?)";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->commentaire,
                               $m->idArticle,
                               $m->idUtilisateur));
			$m->id=DB::get_instance()->lastInsertId();
			return $m;
		}
                
                public  function modifierCommentaire($m, $id){
			
			$sql = "UPDATE Commentaire SET commentaire = ? WHERE idCommentaire = ? ";
			$res = DB::get_instance()->prepare($sql);
			$res -> execute(array($m->commentaire, $id));
			return $m;
                }
		
		public  function chercherParID($idCommentaire){
			$sql="SELECT * from Commentaire, Article, Utilisateur WHERE idCommentaire=? AND Commentaire.idArticle = Article.idArticle AND Commentaire.idUtilisateur = Utilisateur.idUtilisateur";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idCommentaire));
			//gérer les erreurs éventuelles
			if($res->rowCount()==0){
				return false;
			}
			$m= $res->fetch();			
			$commentaire=new Commentaire();
			$commentaire->idCommentaire=$m[0];
			$commentaire->commentaire=$m[1];
			$commentaire->dateCommentaire= $m[2];
			$commentaire->idUtilisateur=$m[3];
			$commentaire->idArticle=$m[4];
                        $commentaire->titreArticle=$m[6];
                        $commentaire->nomUtilisateur=$m[11];
                        $commentaire->prenomUtilisateur=$m[12];
			return $commentaire;
		}		
		
		public function chercherParUtilisateur($idUtilisateur){
			$sql="SELECT * from Commentaire, Utilisateur where Commentaire.idUtilisateur=Utilisateur.idUtilisateur and nomUtilisateur=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idUtilisateur));
			//gérer les erreurs éventuelles
			if ($res->rowCount()==0){
				return false;
			}
			// Tentative en cas de plusieurs résultats
                        $donnees = array();
                        $i = 0;
                        while($data = $res->fetch()) {

                                $donnees[$data[0]] = $data[1];
                                $i++;
                        }
                        return $donnees;		
		}
		
		
		public function chercherparAricle($idArticle){
			$sql="SELECT * from Commentaire, Article where Commentaire.idArticle=Article.idArticle and idArticle=?";
			$res=DB::get_instance()->prepare($sql);
			$res->execute(array($idArticle));
			//gérer les erreurs éventuelles
			if ($res->rowCount()==0){
				return false;
			}		

				// Tentative en cas de plusieurs résultats
				$donnees = array();
                                $i = 0;
				while($data = $res->fetch()) {
				
					$donnees[$data[0]] = $data[1];
                                        $i++;
				}
				return $donnees;	
			}
			
			
		public function supprimerCommentaire($idCommentaire){
		$sql="DELETE * from Commentaire where idCommentaire=?";
		$res=DB::get_instance()->prepare($sql);
		$res->execute(array($idCommentaire));
		//gérer les erreurs éventuelles
			if ($res->rowCount()==0){
				return false;
			}
		}
		

	}
	
	