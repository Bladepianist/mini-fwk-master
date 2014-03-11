<?php
class CRUDCommentaire extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = CommentaireManager::listerCommentaire();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = CommentaireManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDCommentaire&action=valide&mod=modifier&id=".$id,"form update"); // OK
		$f->add_textarea("commentaire", "commentaire", "Commentaire")-> set_required(); // OK
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("commentaire"=> $data->commentaire));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
		$mb = new CommentaireManager();
                $mod= $this->req->mod;

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
	
		//On vérifie si chaque champ correspond aux règles
                if($this->req->commentaire == '') {
                    
                    $this->site->ajouter_message('Veuillez saisir un commentaire valide',ALERTE);
                    $err = true;
                    $form->commentaire->set_error(true);
                    $form->commentaire->set_error_message('Champ vide !');
                }

		//Appel à la BD via objet ArticleManager
		
		//si un des tests a échoué
		if($err){	
			//on pré-remplit avec les valeurs déjà saisies
			$form->populate();		
			//passe le formulaire dans le template sous le nom "form"
			$this->tpl->assign("form",$form);
		}
		//tous les tests ont été validés
		else{
			//création d'une instance de Article
			$m=new Commentaire();
			$m->commentaire=$this->req->commentaire;
			$m->idArticle=$this->req->idArticle;
			$m->idUtilisateur=$this->req->idUtilisateur;
			
                        if(isset($mod) && $mod=='modifier') {
                            
                            $mb->modifierCommentaire($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le commentaire a bien été modifié');			
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDCommentaire');
                        }
                        elseif(isset($mod) && $mod=='ajouter') {
                            
                            $mb->creerCommentaire($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le commentaire a bien été créé');			
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDCommentaire');
                        }
			//enregistrement (insertion) dans la base
			
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$Article = new CommentaireManager();
		
		$Article->supprimerCommentaire($id);
		$this->site->ajouter_message('Le commentaire a bien été supprimée');
		$this->site->redirect('CRUDCommentaire');
		
	}
	

	public function action_ajouter(){
	
            $this->set_title("Ajouter"); //OK
            $f=new Form("?module=CRUDCommentaire&action=valide&mod=ajouter","form ajoutCommentaire"); //OK
            $f->add_select("idArticle","idArticle","Article", ArticleManager::listerArticle2()) -> set_required();
            $f->add_select("idUtilisateur", "idUtilisateur", "Auteur", UtilisateurManager::listerUtilisateur2())-> set_required(); // OK
            $f->add_textarea("commentaire","commentaire","Commentaire")-> set_required(); //OK
            $f->add_submit("Valider","bntval")->set_value('Valider');

            // on peut pré-remplir le formulaire avec des valeurs par défaut
            //$f->populate(array("choix"=>"Deux", "rad1"=>"two", "nom"=>"Nom de Famille"));


            //passe le formulaire dans le template sous le nom "form"
            $this->tpl->assign("form",$f);	
            //stocke la structure du formulaire dans la session sous le nom "form"
            $this->session->form = $f;		
	}

	public function action_detail(){
		$this->set_title("Détail");	
		
		//recupère l'id et la référence 
		$id = $this->req->id;
		
		$data = CommentaireManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomArticle",$nomArticle);
		$this->tpl->assign("prenomArticle",$prenomArticle);	*/
		
		
	}
		
}

?>
