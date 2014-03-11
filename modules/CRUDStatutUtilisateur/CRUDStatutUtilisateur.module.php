<?php
class CRUDStatutUtilisateur extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = StatutUtilisateurManager::listerStatutUtilisateur();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = StatutUtilisateurManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDStatutUtilisateur&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("nomStatutUtilisateur","nomStatutUtilisateur","Statut d'Utilisateur")-> set_required(); //OK
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("nomStatutUtilisateur" => $data->nomStatutUtilisateur));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
                $mod = $this->req->mod;
		$mb = new StatutUtilisateurManager();

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
	
	
		//On vérifie si chaque champ correspond aux règles
		if($this->req->nomStatutUtilisateur == ''){
			$this->site->ajouter_message('Veuillez saisir un nom valide',ALERTE);			
			$err=true;
			$form->nomStatutUtilisateur->set_error(true);
			$form->nomStatutUtilisateur->set_error_message("champs vide !");
		}
                
		//si un des tests a échoué
		if($err){	
			//on pré-remplit avec les valeurs déjà saisies
			$form->populate();		
			//passe le formulaire dans le template sous le nom "form"
			$this->tpl->assign("form",$form);
		}
		//tous les tests ont été validés
		else{
			//création d'une instance de StatutUtilisateur
			$m=new StatutUtilisateur();
			$m->nomStatutUtilisateur=$this->req->nomStatutUtilisateur;
			
			//enregistrement (insertion) dans la base
                        if(isset($mod) && $mod== "modifier") {
                            
                            $mb->modifierStatutUtilisateur($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le statut d\'utilisateur a bien été modifié');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDStatutUtilisateur');
                        }
                        elseif(isset($mod) && $mod=="ajouter"){		
                            
                            $mb->creerStatutUtilisateur($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le statut d\'utilisateur a bien été créé');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDStatutUtilisateur');
                        }
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$User = new StatutUtilisateurManager();
		
		$User->supprimerStatutUtilisateur($id);
		$this->site->ajouter_message('Le statut d\'utilisateur a bien été supprimé');
		$this->site->redirect('CRUDStatutUtilisateur');
		
	}
	

	public function action_ajouter(){
            
            $this->set_title("Ajouter"); //OK
		$f=new Form("?module=CRUDStatutUtilisateur&action=valide&mod=ajouter","form_ajouterUser"); //OK
		$f->add_text("nomStatutUtilisateur","nomStatutUtilisateur","Nom")-> set_required(); //OK
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
		
		$data = StatutUtilisateurManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomStatutUtilisateur",$nomStatutUtilisateur);
		$this->tpl->assign("prenomStatutUtilisateur",$prenomStatutUtilisateur);	*/
	}
		
}	
?>