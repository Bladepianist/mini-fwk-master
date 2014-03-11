<?php
class CRUDUE extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = UEManager::listerUE();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = UEManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDUE&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("nomUE","nomUE","UE")-> set_required(); //OK
		$f->add_select("idSemestre", "idSemestre", "Semestre concerné", SemestreManager::listerSemestre2())->set_required(); //OK
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("nomUE" => $data->nomUE, "idSemestre" => $data->idSemestre));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
                $mod = $this->req->mod;
		$mb = new UEManager();

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
	
	
		//On vérifie si chaque champ correspond aux règles
		if($this->req->nomUE == ''){
			$this->site->ajouter_message('Veuillez saisir un nom valide',ALERTE);			
			$err=true;
			$form->nomUE->set_error(true);
			$form->nomUE->set_error_message("champs vide !");
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
			//création d'une instance de UE
			$m=new UE();
			$m->nomUE=$this->req->nomUE;
			$m->idSemestre = $this->req->idSemestre;
			
			//enregistrement (insertion) dans la base
                        if(isset($mod) && $mod== "modifier") {
                            
                            $mb->modifierUE($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le semestre a bien été modifié');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDUE');
                        }
                        elseif(isset($mod) && $mod=="ajouter"){		
                            
                            $mb->creerUE($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le semestre a bien été créé');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDUE');
                        }
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$User = new UEManager();
		
		$User->supprimerUE($id);
		$this->site->ajouter_message('Le semestre a bien été supprimé');
		$this->site->redirect('CRUDUE');
		
	}
	

	public function action_ajouter(){
            
            $this->set_title("Ajouter"); //OK
		$f=new Form("?module=CRUDUE&action=valide&mod=ajouter","form_ajouterUser"); //OK
		$f->add_text("nomUE","nomUE","Nom")-> set_required(); //OK
                $f->add_select("idSemestre", "idSemestre", "Semestre concerné", SemestreManager::listerSemestre2())-> set_required(); //idem que ci-dessus
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
		
		$data = UEManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomUE",$nomUE);
		$this->tpl->assign("prenomUE",$prenomUE);	*/
		
		
	}
		
}	
?>