<?php
class CRUDNiveauUtilisateur extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = NiveauUtilisateurManager::listerNiveauUtilisateur();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = NiveauUtilisateurManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDNiveauUtilisateur&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("nomNiveauUtilisateur","nomNiveauUtilisateur","Niveau de l'Utilisateur")-> set_required(); //OK
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("nomNiveauUtilisateur" => $data->nomNiveauUtilisateur));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
                $mod = $this->req->mod;
		$mb = new NiveauUtilisateurManager();

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
	
	
		//On vérifie si chaque champ correspond aux règles
		if($this->req->nomNiveauUtilisateur == ''){
			$this->site->ajouter_message('Veuillez saisir un nom valide',ALERTE);			
			$err=true;
			$form->nomNiveauUtilisateur->set_error(true);
			$form->nomNiveauUtilisateur->set_error_message("champs vide !");
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
			//création d'une instance de NiveauUtilisateur
			$m=new NiveauUtilisateur();
			$m->nomNiveauUtilisateur=$this->req->nomNiveauUtilisateur;
			
			//enregistrement (insertion) dans la base
                        if(isset($mod) && $mod== "modifier") {
                            
                            $mb->modifierNiveauUtilisateur($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le niveau de l\'utilisateur a bien été modifié');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDNiveauUtilisateur');
                        }
                        elseif(isset($mod) && $mod=="ajouter"){		
                            
                            $mb->creerNiveauUtilisateur($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le niveau de l\'utilisateur a bien été créé');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDNiveauUtilisateur');
                        }
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$User = new NiveauUtilisateurManager();
		
		$User->supprimerNiveauUtilisateur($id);
		$this->site->ajouter_message('Le niveau de l\'utilisateur a bien été supprimé');
		$this->site->redirect('CRUDNiveauUtilisateur');
		
	}
	

	public function action_ajouter(){
            
            $this->set_title("Ajouter"); //OK
		$f=new Form("?module=CRUDNiveauUtilisateur&action=valide&mod=ajouter","form_ajouterUser"); //OK
		$f->add_text("nomNiveauUtilisateur","nomNiveauUtilisateur","Nom")-> set_required(); //OK
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
		
		$data = NiveauUtilisateurManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomNiveauUtilisateur",$nomNiveauUtilisateur);
		$this->tpl->assign("prenomNiveauUtilisateur",$prenomNiveauUtilisateur);	*/
	}
		
}	
?>