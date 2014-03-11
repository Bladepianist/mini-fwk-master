<?php
class CRUDControle extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = ControleManager::listerControle();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = ControleManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDControle&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("typeControle","typeControle","Type de controle")-> set_required(); //OK
                $f->add_text("coeffControle","coeffControle","Coefficient du controle")-> set_required(); //OK
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("typeControle" => $data->typeControle, "coeffControle" => $data->coeffControle));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
                $mod = $this->req->mod;
		$mb = new ControleManager();

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
	
	
		//On vérifie si chaque champ correspond aux règles
		if($this->req->typeControle == ''){
			$this->site->ajouter_message('Veuillez saisir un nom valide',ALERTE);			
			$err=true;
			$form->typeControle->set_error(true);
			$form->typeControle->set_error_message("champs vide !");
		}
                
                if($this->req->coeffControle == ''){
			$this->site->ajouter_message('Veuillez saisir un coefficient valide',ALERTE);			
			$err=true;
			$form->coeffControle->set_error(true);
			$form->coeffControle->set_error_message("champs vide !");
		}
                elseif($this->req->coeffControle <0 || $this->req->coeffControle >20) {
                    
                    $this->site->ajouter_message('Veuillez saisir un coefficient valide');
                    $err = true;
                    $form->coeffControle->set_error(true);
                    $form->coeffControle->set_error_message('coefficient invalide. Le coefficient doit être compris entre 0 et 20 et les virgules, representées par des "."');
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
			//création d'une instance de Controle
			$m=new Controle();
			$m->typeControle=$this->req->typeControle;
                        $m->coeffControle=$this->req->coeffControle;
			
			//enregistrement (insertion) dans la base
                        if(isset($mod) && $mod== "modifier") {
                            
                            $mb->modifierControle($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le type controle a bien été modifié');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDControle');
                        }
                        elseif(isset($mod) && $mod=="ajouter"){		
                            
                            $mb->creerControle($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le type controle a bien été créé');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDControle');
                        }
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$User = new ControleManager();
		
		$User->supprimerControle($id);
		$this->site->ajouter_message('Le type controle a bien été supprimé');
		$this->site->redirect('CRUDControle');
		
	}
	

	public function action_ajouter(){
            
            $this->set_title("Ajouter"); //OK
		$f=new Form("?module=CRUDControle&action=valide&mod=ajouter","form_ajouterUser"); //OK
		$f->add_text("typeControle","typeControle","Nom")-> set_required(); //OK
                $f->add_text("coeffControle","coeffControle","Coefficient du controle")-> set_required(); //OK
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
		
		$data = ControleManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("typeControle",$typeControle);
		$this->tpl->assign("pretypeControle",$pretypeControle);	*/
	}
		
}	
?>