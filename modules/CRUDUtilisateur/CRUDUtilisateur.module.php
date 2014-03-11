<?php
class CRUDUtilisateur extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = UtilisateurManager::listerUtilisateur();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		
		//recupère l'id
		$id = $this->req->id;
		
		$data = UtilisateurManager::chercherParID($id);
		
		$this->set_title("Modifier"); //OK
		$f=new Form("?module=CRUDUtilisateur&action=valide&mod=modifier&id=".$id,"form update"); //OK
		$f->add_text("nomUtilisateur","nomUtilisateur","Nom")-> set_required(); //OK
		$f->add_text("prenomUtilisateur","prenomUtilisateur","Prénom")-> set_required(); //OK
		$f->add_text("dateNaissanceUtilisateur", "dateNaissanceUtilisateur", "Date de Naissance")->set_required(); //OK
		$f->add_text("emailUtilisateur","emailutilisateur","Email")-> set_required(); //OK	
		$f->add_password("password","password","Mot de passe")-> set_required(); //OK
		$f->add_password("passwordVerif","passwordVerif","Mot de passe")-> set_required(); //OK
		$f->add_select("idDepartement", "idDepartement", "Département", DepartementManager::listerDepartement())-> set_required(); //OK
		$f->add_select("idStatutUtilisateur", "idStatutUtilisateur", "Statut de l'Utilisateur", StatutUtilisateurManager::listerStatutUtilisateur())-> set_required(); //OK
		$f->add_select("idNiveauUtilisateur","idNiveauUtilisateur","Niveau d'Etude", NiveauUtilisateurManager::listerNiveauUtilisateur()) -> set_required(); // OK
		$f->add_select("idGroupeUtilisateur", "idGroupeUtilisateur", "Spécialisation", GroupeUtilisateurManager::listerGroupeUtilisateur())-> set_required(); //idem que ci-dessus
		// Traitement AJAX. Filtrer en fonction du Département choisi
		$f->add_submit("Valider","bntval")->set_value('Modifier');		
		
		// Remet les valeurs d'origine (pré-remplissage)
		$f->populate(array("nomUtilisateur" => $data->nomUtilisateur, "prenomUtilisateur" => $data->prenomUtilisateur, "dateNaissanceUtilisateur" => $data->dateNaissanceUtilisateur,
							"emailUtilisateur" => $data->emailUtilisateur, "password" => $data->password, "passwordVerif"=> $data->password, "idDepartement" => $data->idDepartement, "idStatutUtilisateur" => $data->idStatutUtilisateur,
							"idNiveauUtilisateur" => $data->idNiveauUtilisateur, "idGroupeUtilisateur" => $data->idGroupeUtilisateur));
							
		//passe les variables au template
		$this->tpl->assign('data',$data);
		$this->tpl->assign('form',$f);
		$this->session->form = $f;

	}
	
	public function action_valide(){
		
                $id = $this->req->id;
                $mod = $this->req->mod;
		$mb = new UtilisateurManager();

		$this->set_title("Validation");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$form=$this->session->form;
		$form->reset_errors();
		
		//faire les tests de vérification de remplissage/format des champs
		//... expressions régulières, etc.
	
	
		//On vérifie si chaque champ correspond aux règles
		if($this->req->nomUtilisateur == ''){
			$this->site->ajouter_message('Veuillez saisir un nom valide',ALERTE);			
			$err=true;
			$form->nomUtilisateur->set_error(true);
			$form->nomUtilisateur->set_error_message("champs vide !");
		}
		
		if($this->req->prenomUtilisateur == ''){
			$this->site->ajouter_message('Veuillez saisir un prénom valide',ALERTE);			
			$err=true;
			$form->prenomUtilisateur->set_error(true);
			$form->prenomUtilisateur->set_error_message("champs vide !");
		}
                
                //Tests Date de Naissance
                if(preg_match("#^[1-3][0-9]/(0|1)[0-9]/(1|2)[0-9]{3}$#", $this->req->dateNaissanceUtilisateur)==0){
                    $this->site->ajouter_message('Format de Date de Naissance Incorect', ALERTE);
                    $form->dateNaissanceUtilisateur->set_error(true);
                    $form->dateNaissanceUtilisateur->set_error_message("JJ/MM/AAAA");
                    $err = true;
                }
                else {
                    $jma=explode("/", $this->req->dateNaissanceUtilisateur);
                    if(($jma[2]%4==0&&$jma[2]%100!=0)||$jma[2]%400==0){ // test si l'année etait bissextile
                        $bissextile=true;
                    }
                    else{
                        $bissextile=false;
                    }
                    if($jma[0]>31||$jma[1]>12){ // test sur tous les mois
                        $this->site->ajouter_message('Date Invalide', ALERTE);
                        $form->dateNaissanceUtilisateur->set_error(true);
                        $form->dateNaissanceUtilisateur->set_error_message("Cette date n'existe pas");
                        $err = true;
                    }
                    else{
                        if($jma[1]==04||$jma[1]==06||$jma[1]==09||$jma[1]==11){ // test sur les mois de 30 jours
                            if($jma[0]>30){
                                $this->site->ajouter_message('Date Invalide', ALERTE);
                                $form->dateNaissanceUtilisateur->set_error(true);
                                $form->dateNaissanceUtilisateur->set_error_message("Cette date n'existe pas");
                                $err = true;
                            }
                        }
                        if($jma[1]==02){ // test sur le mois de fevrier
                            if($bissextile==true&&$jma[0]>29){
                                $this->site->ajouter_message('Date Invalide', ALERTE);
                                $form->dateNaissanceUtilisateur->set_error(true);
                                $form->dateNaissanceUtilisateur->set_error_message("Cette date n'existe pas");
                                $err = true;
                            }
                            elseif($bissextile==false&&$jma[0]>28){
                                $this->site->ajouter_message('Date Invalide', ALERTE);
                                $form->dateNaissanceUtilisateur->set_error(true);
                                $form->dateNaissanceUtilisateur->set_error_message("Cette date n'existe pas");
                                $err = true;
                            }

                        }
                    }
                     if($jma[2]<1900){ // test année < 1900
                         $this->site->ajouter_message('Date trop ancienne', ALERTE);
                         $form->dateNaissanceUtilisateur->set_error(true);
                         $form->dateNaissanceUtilisateur->set_error_message("Vous n'êtes pas aussi vieux, si ?");
                         $err = true;
                     }
                     if($jma[2]>2014){ // test année future
                         $this->site->ajouter_message('Les voyageurs du temps ne sont pas autorisés', ALERTE);
                         $form->dateNaissanceUtilisateur->set_error(true);
                         $form->dateNaissanceUtilisateur->set_error_message("Vous venez du futur");
                         $err = true;
                     }
                     $this->req->dateNaissanceUtilisateur=($jma[2]."-".$jma[1]."-".$jma[0]);
                }
                
                //Fin test DateNaissance
                
                // Test sur l'email
		if(isset($mod) && $mod=="ajouter") {
                    
                    if($this->req->emailUtilisateur == '') {
                    
                        $this->site->ajouter_message('Veuillir saisir une adresse email', ALERTE);
                        $err = true;
                        $form->emailUtilisateur->set_error(true);
                        $form->emailUtilisateur->set_error_message('Champ vide !');
                        
                    }

                    elseif( $mb->chercherParEmail($this->req->emailUtilisateur) != false){
                        $this->site->ajouter_message('Email déjà utilisé',ALERTE);
                        $err=true;
                        $form->emailUtilisateur->set_error(true);
                        $form->emailUtilisateur->set_error_message("Email existant !");
                     }
                     elseif (preg_match("#^.{0,40}$#", $this->req->emailUtilisateur)){ //Si mail inférieur ou égal à 40 caractères (définition bdd), on teste la structure
                        if (filter_var($this->req->emailUtilisateur, FILTER_VALIDATE_EMAIL)== false){
                            $this->site->ajouter_message('Ce format d\'adresse électronique n\'est pas valide.', ALERTE);
                            $err = true;
                            $form->emailUtilisateur->set_error(true);
                            $form->emailUtilisateur->set_error_message("e-mail non valide");
                            
                        }
                    }
                    else{   // si mail fait plus de 50 on renvoie une erreur
                        $this->site->ajouter_message('Ce format d\'adresse électronique n\'est pas valide.', ALERTE);
                        $err = true;
                        $form->emailUtilisateur->set_error(true);
                        $form->emailUtilisateur->set_error_message("40 caractères maximum");
                        
                    }
                }
                elseif (isset ($mod) && $mod=="modifier") {
                    
                    if($this->req->emailUtilisateur == '') {
                    
                        $this->site->ajouter_message('Veuillir saisir une adresse email', ALERTE);
                        $err = true;
                        $form->emailUtilisateur->set_error(true);
                        $form->emailUtilisateur->set_error_message('Champ vide !');
                        
                     }
                     elseif (preg_match("#^.{0,40}$#", $this->req->emailUtilisateur)){ //Si mail inférieur ou égal à 40 caractères (définition bdd), on teste la structure
                        if (filter_var($this->req->emailUtilisateur, FILTER_VALIDATE_EMAIL)== false){
                            $this->site->ajouter_message('Ce format d\'adresse électronique n\'est pas valide.', ALERTE);
                            $err = true;
                            $form->emailUtilisateur->set_error(true);
                            $form->emailUtilisateur->set_error_message("e-mail non valide");
                            
                        }
                    }
                    else{   // si mail fait plus de 50 on renvoie une erreur
                        $this->site->ajouter_message('Ce format d\'adresse électronique n\'est pas valide.', ALERTE);
                        $err = true;
                        $form->emailUtilisateur->set_error(true);
                        $form->emailUtilisateur->set_error_message("40 caractères maximum");
                        
                    }
                }                
		// Fin des tests sur l'email
                
                //Test password
                
                if(isset($this->req->password) && $this->req->password == '') {
                    
                    $this->site->ajouter_message('Veuillez saisir un mot de passe', ALERTE);
                    $err = true;
                    $form->password->set_error(true);
                    $form->password->set_error_message('Champ vide !');
                }
                elseif(!(preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z._\d]{8,20}$#", $this->req->password))) {
                    
                    $this->site->ajouter_message('Veuillez saisir un mot de passe valide', ALERTE);
                    $err = true;
                    $form->password->set_error(true);
                    $form->password->set_error_message('Au moins un chiffre, une majuscule, pas de caractères spéciaux (sauf "._") et entre 8 et 20 caractères !');
                }
                elseif($this->req->passwordVerif=='') {
                    
                    $this->site->ajouter_message('Veuillez saisir un mot de passe', ALERTE);
                    $err = true;
                    $form->passwordVerif->set_error(true);
                    $form->passwordVerif->set_error_message('Champ vide !');
                }
                elseif($this->req->password != $this->req->passwordVerif) {
                    
                    $this->site->ajouter_message('Veuillez saisir un mot de passe valide', ALERTE);
                    $err = true;
                    $form->passwordVerif->set_error(true);
                    $form->passwordVerif->set_error_message('Mots de passes différents !');
                }
                //Fin test password
		//si un des tests a échoué
		if($err){	
			//on pré-remplit avec les valeurs déjà saisies
			$form->populate();		
			//passe le formulaire dans le template sous le nom "form"
			$this->tpl->assign("form",$form);
		}
		//tous les tests ont été validés
		else{
			//création d'une instance de Utilisateur
			$m=new Utilisateur();
			$m->nomUtilisateur=$this->req->nomUtilisateur;
			$m->prenomUtilisateur=$this->req->prenomUtilisateur;
			$m->dateNaissanceUtilisateur=$this->req->dateNaissanceUtilisateur;
			$m->emailUtilisateur=$this->req->emailUtilisateur;
                        $m->password=sha1($this->req->password);
			$m->idStatutUtilisateur = $this->req->idStatutUtilisateur;
			$m->idNiveauUtilisateur=$this->req->idNiveauUtilisateur;
			$m->idDepartement=$this->req->idDepartement;
                        $m->idStatutUtilisateur= $this->req->idStatutUtilisateur;
			$m->idGroupeUtilisateur=$this->req->idGroupeUtilisateur;
			
			//enregistrement (insertion) dans la base
                        if(isset($mod) && $mod== "modifier") {
                            
                            $mb->modifierUtilisateur($m, $id);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('L\'utilisateur a bien été modifié');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDUtilisateur');
                        }
                        elseif(isset($mod) && $mod=="ajouter"){		
                            
                            $mb->creerUtilisateur($m);
                            //passe un message pour la page suivante
                            $this->site->ajouter_message('L\'utilisateur a bien été créé');
                            //redirige vers le module par défaut
                            $this->site->redirect('CRUDUtilisateur');
                        }
		}
	}
	
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id
		$id = $this->req->id;
		
		//passe ces informations dans le template
		
		$User = new UtilisateurManager();
		
		$User->supprimerUtilisateur($id);
		$this->site->ajouter_message('L\'Utilisateur a bien été supprimé');
		$this->site->redirect('CRUDUtilisateur');
		
	}
	

	public function action_ajouter(){
            
            $this->set_title("Ajouter"); //OK
		$f=new Form("?module=CRUDUtilisateur&action=valide&mod=ajouter","form_ajouterUser"); //OK
		$f->add_text("nomUtilisateur","nomUtilisateur","Nom")-> set_required(); //OK
		$f->add_text("prenomUtilisateur","prenomUtilisateur","Prénom")-> set_required(); //OK
		$f->add_text("dateNaissanceUtilisateur", "dateNaissanceUtilisateur", "Date de Naissance")->set_required(); //OK
		$f->add_text("emailUtilisateur","emailutilisateur","Email")-> set_required(); //OK	
		$f->add_password("password","password","Mot de passe")-> set_required(); //OK
		$f->add_password("passwordVerif","passwordVerif","Saisir de nouveau votre mot de passe")-> set_required(); //OK		
		$f->add_select("idDepartement", "idDepartement", "Département", DepartementManager::listerDepartement())-> set_required(); //OK
		$f->add_select("idNiveauUtilisateur","idNiveauUtilisateur","Niveau d'Etude", NiveauUtilisateurManager::listerNiveauUtilisateur()) -> set_required(); // OK
		$f->add_select("idGroupeUtilisateur", "idGroupeUtilisateur", "Spécialisation", GroupeUtilisateurManager::listerGroupeUtilisateur())-> set_required(); //idem que ci-dessus
                $f->add_select("idStatutUtilisateur", "idStatutUtilisateur", "Statut de l'utilisateur", StatutUtilisateurManager::listerStatutUtilisateur())-> set_required(); //idem que ci-dessus
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
		
		$data = UtilisateurManager::chercherParID($id);
		//passe les variables au template		
		$this->tpl->assign('data',$data);
		
		/*$this->tpl->assign("id",$id);
		$this->tpl->assign("nomUtilisateur",$nomUtilisateur);
		$this->tpl->assign("prenomUtilisateur",$prenomUtilisateur);	*/
		
		
	}
		
}	
?>