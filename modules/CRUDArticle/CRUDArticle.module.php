<?php
class CRUDArticle extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = ArticleManager::listerArticle();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = ArticleManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDArticle&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("titreArticle","titreArticle","Titre")-> set_required(); //OK
		$f->add_select("idUtilisateur","idUtilisateur","Auteur", UtilisateurManager::listerUtilisateur2()) -> set_required(); // A coder (idem que Lister Departement)
		$f->add_textarea("contenuArticle", "contenuArticle", "Contenu")-> set_required(); // OK
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("titreArticle" => $data->titreArticle, "idUtilisateur" => $data->idUtilisateur, "contenuArticle" => $data->contenuArticle));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
		$mb = new ArticleManager();
                $mod= $this->req->mod;

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
	
		//On vérifie si chaque champ correspond aux règles
                if($this->req->titreArticle == '') {
                    
                    $this->site->ajouter_message('Veuillez saisir un titre valide',ALERTE);
                    $err = true;
                    $form->titreArticle->set_error(true);
                    $form->titreArticle->set_error_message('Champ vide !');
                }
		/*elseif(preg_match("#^{4,}$#", $this->req->titreArticle)){
			$this->site->ajouter_message('Veuillez saisir un titre valide',ALERTE);			
			$err=true;
			$form->titreArticle->set_error(true);
			$form->titreArticle->set_error_message("Titre supérieur à 4 caractères et inférieur à 100 caractère !");
		}*/
                
                if($this->req->contenuArticle == '') {
                    
                    $this->site->ajouter_message('Veuillez saisir un contenu valide',ALERTE);
                    $err = true;
                    $form->contenuArticle->set_error(true);
                    $form->contenuArticle->set_error_message('Champ vide !');
                }
                elseif(preg_match("#^(\s\S){300,}$#", $this->req->contenuArticle)){
			$this->site->ajouter_message('Veuillez saisir un contenu valide',ALERTE);			
			$err=true;
			$form->contenuArticle->set_error(true);
			$form->contenuArticle->set_error_message("L'article doit faire au moins 300 caractères");
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
			$m=new Article();
			$m->titreArticle=$this->req->titreArticle;
			$m->idUtilisateur=$this->req->idUtilisateur;
			$m->contenuArticle=$this->req->contenuArticle;
			
                        if(isset($mod) && $mod=='modifier') {
                            
                            $mb->modifierArticle($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('L\'article a bien été modifiée');			
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDArticle');
                        }
                        elseif(isset($mod) && $mod=='ajouter') {
                            
                            $mb->creerArticle($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('L\'article a bien été créé');			
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDArticle');
                        }
			//enregistrement (insertion) dans la base
			
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$Article = new ArticleManager();
		
		$Article->supprimerArticle($id);
		$this->site->ajouter_message('L\'article a bien été supprimée');
		$this->site->redirect('CRUDArticle');
		
	}
	

	public function action_ajouter(){
	
            $this->set_title("Ajouter"); //OK
            $f=new Form("?module=CRUDArticle&action=valide&mod=ajouter","form ajoutArticle"); //OK
            $f->add_text("titreArticle","titreArticle","Titre")-> set_required(); //OK
            $f->add_select("idUtilisateur","idUtilisateur","Auteur", UtilisateurManager::listerUtilisateur2()) -> set_required(); // A coder (idem que Lister Departement)
            $f->add_textarea("contenuArticle", "contenuArticle", "Contenu")-> set_required(); // OK
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
		
		$data = ArticleManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomArticle",$nomArticle);
		$this->tpl->assign("prenomArticle",$prenomArticle);	*/
		
		
	}
		
}

?>
