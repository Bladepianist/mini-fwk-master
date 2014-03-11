<?php
class CRUDProfesseur extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = ProfesseurManager::listerProfesseur();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = ProfesseurManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDProfesseur&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("nomProfesseur","nomProfesseur","Nom")-> set_required(); //OK
		$f->add_text("prenomProfesseur","prenomProfesseur","Prénom")-> set_required(); //OK
		$f->add_text("emailProfesseur","emailutilisateur","Email")-> set_required(); //OK
		$f->add_select("idPosteAdministratif", "idPosteAdministratif", "Poste Administratif", PosteAdministratifManager::listerPosteAdministratif2())-> set_required(); //idem que ci-dessus
		// Traitement AJAX. Filtrer en fonction du Département choisi
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("nomProfesseur" => $data->nomProfesseur, "prenomProfesseur" => $data->prenomProfesseur,
                    "emailProfesseur" => $data->emailProfesseur, "idPosteAdministratif" => $data->idPosteAdministratif));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
                $mod = $this->req->mod;
		$mb = new ProfesseurManager();

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
	
	
		//On vérifie si chaque champ correspond aux règles
		if($this->req->nomProfesseur == ''){
			$this->site->ajouter_message('Veuillez saisir un nom valide',ALERTE);			
			$err=true;
			$form->nomProfesseur->set_error(true);
			$form->nomProfesseur->set_error_message("champs vide !");
		}
		
		if($this->req->prenomProfesseur == ''){
			$this->site->ajouter_message('Veuillez saisir un prénom valide',ALERTE);			
			$err=true;
			$form->prenomProfesseur->set_error(true);
			$form->prenomProfesseur->set_error_message("champs vide !");
		}
              
                // Test sur l'email
		if(isset($mod) && $mod=="ajouter") {
                    
                    if($this->req->emailProfesseur == '') {
                    
                        $this->site->ajouter_message('Veuillir saisir une adresse email', ALERTE);
                        $err = true;
                        $form->emailProfesseur->set_error(true);
                        $form->emailProfesseur->set_error_message('Champ vide !');
                        
                    }

                    elseif( $mb->chercherParEmail($this->req->emailProfesseur) != false){
                        $this->site->ajouter_message('Email déjà utilisé',ALERTE);
                        $err=true;
                        $form->emailProfesseur->set_error(true);
                        $form->emailProfesseur->set_error_message("Email existant !");
                     }
                     elseif (preg_match("#^.{0,40}$#", $this->req->emailProfesseur)){ //Si mail inférieur ou égal à 40 caractères (définition bdd), on teste la structure
                        if (filter_var($this->req->emailProfesseur, FILTER_VALIDATE_EMAIL)== false){
                            $this->site->ajouter_message('Ce format d\'adresse électronique n\'est pas valide.', ALERTE);
                            $err = true;
                            $form->emailProfesseur->set_error(true);
                            $form->emailProfesseur->set_error_message("e-mail non valide");
                            
                        }
                    }
                    else{   // si mail fait plus de 50 on renvoie une erreur
                        $this->site->ajouter_message('Ce format d\'adresse électronique n\'est pas valide.', ALERTE);
                        $err = true;
                        $form->emailProfesseur->set_error(true);
                        $form->emailProfesseur->set_error_message("40 caractères maximum");
                        
                    }
                }
                elseif (isset ($mod) && $mod=="modifier") {
                    
                    if($this->req->emailProfesseur == '') {
                    
                        $this->site->ajouter_message('Veuillir saisir une adresse email', ALERTE);
                        $err = true;
                        $form->emailProfesseur->set_error(true);
                        $form->emailProfesseur->set_error_message('Champ vide !');
                        
                     }
                     elseif (preg_match("#^.{0,40}$#", $this->req->emailProfesseur)){ //Si mail inférieur ou égal à 40 caractères (définition bdd), on teste la structure
                        if (filter_var($this->req->emailProfesseur, FILTER_VALIDATE_EMAIL)== false){
                            $this->site->ajouter_message('Ce format d\'adresse électronique n\'est pas valide.', ALERTE);
                            $err = true;
                            $form->emailProfesseur->set_error(true);
                            $form->emailProfesseur->set_error_message("e-mail non valide");
                            
                        }
                    }
                    else{   // si mail fait plus de 50 on renvoie une erreur
                        $this->site->ajouter_message('Ce format d\'adresse électronique n\'est pas valide.', ALERTE);
                        $err = true;
                        $form->emailProfesseur->set_error(true);
                        $form->emailProfesseur->set_error_message("40 caractères maximum");
                        
                    }
                }                
		// Fin des tests sur l'email
               
		//si un des tests a échoué
		if($err){	
			//on pré-remplit avec les valeurs déjà saisies
			$form->populate();		
			//passe le formulaire dans le template sous le nom "form"
			$this->tpl->assign("form",$form);
		}
		//tous les tests ont été validés
		else{
			//création d'une instance de Professeur
			$m=new Professeur();
			$m->nomProfesseur=$this->req->nomProfesseur;
			$m->prenomProfesseur=$this->req->prenomProfesseur;
			$m->emailProfesseur=$this->req->emailProfesseur;
			$m->idPosteAdministratif=$this->req->idPosteAdministratif;
			
			//enregistrement (insertion) dans la base
                        if(isset($mod) && $mod== "modifier") {
                            
                            $mb->modifierProfesseur($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le professeur a bien été modifié');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDProfesseur');
                        }
                        elseif(isset($mod) && $mod=="ajouter"){		
                            
                            $mb->creerProfesseur($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('Le professeur a bien été créé');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDProfesseur');
                        }
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$User = new ProfesseurManager();
		
		$User->supprimerProfesseur($id);
		$this->site->ajouter_message('Le Professeur a bien été supprimé');
		$this->site->redirect('CRUDProfesseur');
		
	}
	

	public function action_ajouter(){
            
            $this->set_title("Ajouter"); //OK
		$f=new Form("?module=CRUDProfesseur&action=valide&mod=ajouter","form_ajouterUser"); //OK
		$f->add_text("nomProfesseur","nomProfesseur","Nom")-> set_required(); //OK
		$f->add_text("prenomProfesseur","prenomProfesseur","Prénom")-> set_required(); //OK
		$f->add_text("emailProfesseur","emailutilisateur","Email")-> set_required(); //OK
		$f->add_select("idPosteAdministratif", "idPosteAdministratif", "Poste Administratif", PosteAdministratifManager::listerPosteAdministratif2())-> set_required(); //idem que ci-dessus
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
		
		$data = ProfesseurManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomProfesseur",$nomProfesseur);
		$this->tpl->assign("prenomProfesseur",$prenomProfesseur);	*/
		
		
	}
		
}	
?>