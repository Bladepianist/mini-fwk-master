<?php
class Connexion extends Module{
			

        public function action_index(){

		$this->set_title("Connexion"); //OK
		$f=new Form("?module=Connexion&action=login","form_connexion"); //OK
		$f->add_text("emailUtilisateur","emailutilisateur","Email")-> set_required(); //OK	
		$f->add_password("password","password","Mot de passe")-> set_required(); //OK
		$f->add_submit("Valider","bntval")->set_value('Se Connecter');		

		// on peut pré-remplir le formulaire avec des valeurs par défaut
		//$f->populate(array("choix"=>"Deux", "rad1"=>"two", "nom"=>"Nom de Famille"));


		//passe le formulaire dans le template sous le nom "form"
		$this->tpl->assign("form",$f);	
		//stocke la structure du formulaire dans la session sous le nom "form"
		$this->session->form = $f;				
	}
        
	public function action_login(){
            
            $mb = new UtilisateurManager();

            $this->set_title("Validation");
            $err=false;
            //on récupère la structure du formulaire précédemment stocké dans la session
            $form=$this->session->form;
            $form->reset_errors();

            if($this->req->emailUtilisateur =='') {
                $this->site->ajouter_message('Identifiants invalides',ALERTE);			
                $err=true;
                $form->emailUtilisateur->set_error(true);
                $form->password->set_error(true);
                $form->emailUtilisateur->set_error_message("champs vide !");
            }

            if($this->req->password =='') {
                $this->site->ajouter_message('Identifiants invalides',ALERTE);			
                $err=true;
                $form->emailUtilisateur->set_error(true);
                $form->password->set_error(true);
                $form->password->set_error_message("champs vide !");
            }

            if($mb->chercherParEmail($this->req->emailUtilisateur) != false){
                
                $membre = $mb->chercherParEmail($this->req->emailUtilisateur);
                if($membre->password == sha1($this->req->password)) {
                    
                    session::get_instance();
                    $this->session->ouvrir($membre);
                    $this->session->user=$membre;
                    $this->tpl->assign('emailUtilisateur', $membre->emailUtilisateur);
                    $this->site->ajouter_message('Vous êtes connecté en tant que '.$membre->emailUtilisateur);
                    $this->site->redirect("index");
                }
                else {
                    $this->site->ajouter_message('Identifiants incorrects');
                    $form->emailUtilisateur->set_error(true);
                    $err = true;
                    $form->password->set_error(true);
                }
            }
            else{
                $this->site->ajouter_message('Identifiants incorrects');
                $form->emailUtilisateur->set_error(true);
                $err=true;
                $form->password->set_error(true);
            }
            
            if($err) {
                
                $this->tpl->assign("form", form);
                $this->site->redirect("Connexion");
            }
	}

	public function action_deconnect(){		
		$this->site->ajouter_message('Vous êtes déconnecté');							
		$this->session->fermer(); 			
		$this->site->redirect("index");
	}

}
?>