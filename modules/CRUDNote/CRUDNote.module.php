<?php
class CRUDNote extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = NoteManager::listerNote();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = NoteManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDNote&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("valeurNote","valeurNote","Note")-> set_required(); //OK
		$f->add_text("dateNote","dateNote","Date d'obtention")-> set_required(); //OK
		$f->add_select("idControle", "idControle", "Type de Contrôle", ControleManager::listerControle())-> set_required(); //OK
		$f->add_select("idUtilisateur","idUtilisateur","Utilisateur concerné", UtilisateurManager::listerUtilisateur2()) -> set_required(); // A coder (idem que Lister Departement)
		$f->add_select("idMatiere", "idMatiere", "Matière", MatiereManager::listerMatiere())-> set_required(); // OK
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("valeurNote" => $data->valeurNote, "dateNote" => $data->dateNote, "idControle" => $data->idControle, "idUtilisateur" => $data->idUtilisateur, "idMatiere" => $data->idMatiere));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
		$mb = new NoteManager();
                $mod= $this->req->mod;

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
	
	
		//On vérifie si chaque champ correspond aux règles
		if($this->req->valeurNote == ''){
			$this->site->ajouter_message('Veuillez saisir un note valide',ALERTE);			
			$err=true;
			$form->valeurNote->set_error(true);
			$form->valeurNote->set_error_message("champs vide !");
		}
                elseif($this->req->valeurNote <0 || $this->req->valeurNote >20) {
                    
                    $this->site->ajouter_message('Veuillez saisir une note valide');
                    $err = true;
                    $form->valeurNote->set_error(true);
                    $form->valeurNote->set_error_message('Note invalide. La note doit être comprise entre 0 et 20 et les virgules, representées par des "."');
                }
		
		//Tests Date note
                if(preg_match("#^[1-3][0-9]/(0|1)[0-9]/(1|2)[0-9]{3}$#", $this->req->dateNote)==0){
                    $this->site->ajouter_message('Format de Date d\'obtention Incorect', ALERTE);
                    $form->dateNote->set_error(true);
                    $form->dateNote->set_error_message("JJ/MM/AAAA");
                    $err = true;
                }
                else {
                    $jma=explode("/", $this->req->dateNote);
                    if(($jma[2]%4==0&&$jma[2]%100!=0)||$jma[2]%400==0){ // test si l'année etait bissextile
                        $bissextile=true;
                    }
                    else{
                        $bissextile=false;
                    }
                    if($jma[0]>31||$jma[1]>12){ // test sur tous les mois
                        $this->site->ajouter_message('Date Invalide', ALERTE);
                        $form->dateNote->set_error(true);
                        $form->dateNote->set_error_message("Cette date n'existe pas");
                        $err = true;
                    }
                    else{
                        if($jma[1]==04||$jma[1]==06||$jma[1]==09||$jma[1]==11){ // test sur les mois de 30 jours
                            if($jma[0]>30){
                                $this->site->ajouter_message('Date Invalide', ALERTE);
                                $form->dateNote->set_error(true);
                                $form->dateNote->set_error_message("Cette date n'existe pas");
                                $err = true;
                            }
                        }
                        if($jma[1]==02){ // test sur le mois de fevrier
                            if($bissextile==true&&$jma[0]>29){
                                $this->site->ajouter_message('Date Invalide', ALERTE);
                                $form->dateNote->set_error(true);
                                $form->dateNote->set_error_message("Cette date n'existe pas");
                                $err = true;
                            }
                            elseif($bissextile==false&&$jma[0]>28){
                                $this->site->ajouter_message('Date Invalide', ALERTE);
                                $form->dateNote->set_error(true);
                                $form->dateNote->set_error_message("Cette date n'existe pas");
                                $err = true;
                            }

                        }
                    }
                     if($jma[2]<1900){ // test année < 1900
                         $this->site->ajouter_message('Date trop ancienne', ALERTE);
                         $form->dateNote->set_error(true);
                         $form->dateNote->set_error_message("Vous n'êtes pas aussi vieux, si ?");
                         $err = true;
                     }
                     if($jma[2]>2014){ // test année future
                         $this->site->ajouter_message('Les voyageurs du temps ne sont pas autorisés', ALERTE);
                         $form->dateNote->set_error(true);
                         $form->dateNote->set_error_message("Vous venez du futur");
                         $err = true;
                     }
                     $this->req->dateNote=($jma[2]."-".$jma[1]."-".$jma[0]);
                }
                
                //Fin test DateNaissance


		//Appel à la BD via objet NoteManager
		
                if($this->req->idControle == '') {
                    
                    $this->site->ajouter_message('Veuillir saisir une adresse email', ALERTE);
                    $err = true;
                    $form->idControle->set_error(true);
                    $form->idControle->set_error_message('Champs vide !');
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
			//création d'une instance de Note
			$m=new Note();
			$m->valeurNote=$this->req->valeurNote;
			$m->dateNote=$this->req->dateNote;
			$m->idControle=$this->req->idControle;
			$m->idUtilisateur=$this->req->idUtilisateur;
			$m->idMatiere=$this->req->idMatiere;
			
                        if(isset($mod) && $mod=='modifier') {
                            
                            $mb->modifierNote($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('La note a bien été modifiée');			
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDNote');
                        }
                        elseif(isset($mod) && $mod=='ajouter') {
                            
                            $mb->creerNote($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('La note a bien été créée');			
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDNote');
                        }
			//enregistrement (insertion) dans la base
			
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$Note = new NoteManager();
		
		$Note->supprimerNote($id);
		$this->site->ajouter_message('La note a bien été supprimée');
		$this->site->redirect('CRUDNote');
		
	}
	

	public function action_ajouter(){
	
            $this->set_title("Ajouter"); //OK
            $f=new Form("?module=CRUDNote&action=valide&mod=ajouter&id=".$id,"form ajout"); //OK
            $f->add_text("valeurNote","valeurNote","Note")-> set_required(); //OK
            $f->add_text("dateNote","dateNote","Date d'obtention")-> set_required(); //OK
            $f->add_select("idControle", "idControle", "Type de Contrôle", ControleManager::listerControle())-> set_required(); //OK
            $f->add_select("idUtilisateur","idUtilisateur","Utilisateur concerné", UtilisateurManager::listerUtilisateur2()) -> set_required(); // A coder (idem que Lister Departement)
            $f->add_select("idMatiere", "idMatiere", "Matière", MatiereManager::listerMatiere())-> set_required(); // OK
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
		
		$data = NoteManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomNote",$nomNote);
		$this->tpl->assign("prenomNote",$prenomNote);	*/
		
		
	}
		
}

?>
