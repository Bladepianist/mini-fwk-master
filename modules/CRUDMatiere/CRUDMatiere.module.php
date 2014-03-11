<?php
class CRUDMatiere extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = MatiereManager::listerMatiere();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = MatiereManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDMatiere&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("nomMatiere","nomMatiere","Type de controle")-> set_required(); //OK
                $f->add_text("coeffMatiere","coeffMatiere","Coefficient du controle")-> set_required(); //OK
                $f->add_select("idUE","idUE","UE de la matière", UEManager::listerUE2())-> set_required(); //OK
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("nomMatiere" => $data->nomMatiere, "coeffMatiere" => $data->coeffMatiere, "idUE" => $data->idUE));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
                $mod = $this->req->mod;
		$mb = new MatiereManager();

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
	
	
		//On vérifie si chaque champ correspond aux règles
		if($this->req->nomMatiere == ''){
			$this->site->ajouter_message('Veuillez saisir un nom valide',ALERTE);			
			$err=true;
			$form->nomMatiere->set_error(true);
			$form->nomMatiere->set_error_message("champs vide !");
		}
                
                if($this->req->coeffMatiere == ''){
			$this->site->ajouter_message('Veuillez saisir un coefficient valide',ALERTE);			
			$err=true;
			$form->coeffMatiere->set_error(true);
			$form->coeffMatiere->set_error_message("champs vide !");
		}
                elseif($this->req->coeffMatiere <0 || $this->req->coeffMatiere >20) {
                    
                    $this->site->ajouter_message('Veuillez saisir un coefficient valide');
                    $err = true;
                    $form->coeffMatiere->set_error(true);
                    $form->coeffMatiere->set_error_message('coefficient invalide. Le coefficient doit être compris entre 0 et 20 et les virgules, representées par des "."');
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
			//création d'une instance de Matiere
			$m=new Matiere();
			$m->nomMatiere=$this->req->nomMatiere;
                        $m->coeffMatiere=$this->req->coeffMatiere;
                        $m->idUE=$this->req->idUE;
			
			//enregistrement (insertion) dans la base
                        if(isset($mod) && $mod== "modifier") {
                            
                            $mb->modifierMatiere($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('La matière a bien été modifiée');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDMatiere');
                        }
                        elseif(isset($mod) && $mod=="ajouter"){		
                            
                            $mb->creerMatiere($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('La matière a bien été créée');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDMatiere');
                        }
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$User = new MatiereManager();
		
		$User->supprimerMatiere($id);
		$this->site->ajouter_message('La matière a bien été supprimée');
		$this->site->redirect('CRUDMatiere');
		
	}
	

	public function action_ajouter(){
            
            $this->set_title("Ajouter"); //OK
		$f=new Form("?module=CRUDMatiere&action=valide&mod=ajouter","form_ajouterUser"); //OK
		$f->add_text("nomMatiere","nomMatiere","Nom")-> set_required(); //OK
                $f->add_text("coeffMatiere","coeffMatiere","Coefficient du controle")-> set_required(); //OK
                $f->add_select("idUE","idUE","UE de la matière", UEManager::listerUE2())-> set_required(); //OK
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
		
		$data = MatiereManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomMatiere",$nomMatiere);
		$this->tpl->assign("prenomMatiere",$prenomMatiere);	*/
	}
		
}	
?>