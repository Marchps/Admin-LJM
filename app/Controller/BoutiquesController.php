<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\Fonction\Fonction; 

class BoutiquesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Boutique');
        $this->loadModel('User');
        $this->loadModel('Message');
        $this->loadModel('Download');
    }

 	public function index(){
 		if(isset($_SESSION['id_user'])){
	 		$id_user = $_SESSION['id_user'];
 		}else{
 			$id_user = 0;
 		}
        $user = $this->User->get_user($id_user);
        $messages = $this->Message->get_all_messages_non_lu($id_user);
        $boutiques = $this->Boutique->all_btq_user($id_user);
        $facilites = $this->Boutique->get_all_facilites();
        $facilites_btq = $this->Boutique->get_facilites_btq();
        $count_btq = $this->Boutique->cpt_btq($id_user);
        $messages_non_lu = $this->Message->get_all_messages_non_lu($id_user);
        $downloads = $this->Download->last_5_download();
    
        $this->render('boutiques.index', compact('downloads','boutiques','count_btq','facilites','facilites_btq','user','messages','messages_non_lu'));
    }

    public function index_ljm(){
        if(isset($_SESSION['id_user']&&$_SESSION['id_droit']<3)){

            $id_user = $_SESSION['id_user'];

            $user = $this->User->get_user($id_user);
            $messages = $this->Message->get_all_messages_non_lu($id_user);
            $boutiques = $this->Boutique->all_btq_user($id_user);
            $facilites = $this->Boutique->get_all_facilites();
            $facilites_btq = $this->Boutique->get_facilites_btq();
            $count_btq = $this->Boutique->cpt_btq($id_user);
            $messages_non_lu = $this->Message->get_all_messages_non_lu($id_user);
            $downloads = $this->Download->last_5_download();
            $boutiques_ljm = $this->Boutique->get_all_boutiques();
    
        $this->render('boutiques.index', compact('boutiques_ljm','downloads','boutiques','count_btq','facilites','facilites_btq','user','messages','messages_non_lu'));



        }else{
            return $this->redirect(BASE_LINK);
        }
    }

    public function map(){
    	if(isset($_SESSION['id_user'])){
	 		$id_user = $_SESSION['id_user'];
 		}else{
            return $this->redirect(BASE_LINK);
 		}

        $user = $this->User->get_user($id_user);
        $count_btq = $this->Boutique->cpt_btq($id_user);
		$boutiques = $this->Boutique->all_btq_user($id_user);
        $messages_non_lu = $this->Message->get_all_messages_non_lu($id_user);
        $downloads = $this->Download->last_5_download();
    
    	$this->render('boutiques.carte', compact('downloads','boutiques','count_btq','user','messages_non_lu'));
    }

	public function update(){
     	if (!empty($_POST)) {
            $result = $this->Boutique->update($_POST['id_btq'],'id_boutique',[
                'nom' => $_POST['nom_boutique'],
                'enseigne' => $_POST['enseigne'],
                'slogan' => $_POST['slogan_boutique'],
                'adresse' => $_POST['adresse_boutique'],
                'cp' => $_POST['cp_boutique'],
                'tel' => $_POST['tel_boutique'],
                'ville' => $_POST['ville_boutique'],
                'mail' => $_POST['mail_boutique'],
                'facebook' => $_POST['facebook_boutique'],
                'twitter' => $_POST['twitter_boutique'],
                'skype' => $_POST['skype_boutique'],
                'boutique_description' => $_POST['description'],
                'recall' => $_POST['recall']
            ],'jm_boutique');
            if($result){
                return $this->redirect(BASE_LINK);
            }
        }
	}

	public function update_houres(){
     	if (!empty($_POST)) {
            $result = $this->Boutique->update($_POST['id_btq'],'id_boutique',[
                'h_lundi' => $_POST['h_lundi'],
                'h_mardi' => $_POST['h_mardi'],
                'h_mercredi' => $_POST['h_mercredi'],
                'h_jeudi' => $_POST['h_jeudi'],
                'h_vendredi' => $_POST['h_vendredi'],
                'h_samedi' => $_POST['h_samedi'],
                'h_dimanche' => $_POST['h_dimanche'],
                'h_a_savoir' => $_POST['h_a_savoir']
            ],'jm_boutique');
            
            if($result){
                return $this->redirect(BASE_LINK);
            }
        }
	}

	public function update_facilites(){
			$result = $this->Boutique->delete($_POST['id_btq'],'id_boutique','jm_boutique_to_facilites');
     		/*On regharde si des champs contenant 'facil' se trouvent dans notre POST et on boucle tant que c'est le cas*/
			while($valeur = current($_POST)) {
            	if(strstr(key($_POST), 'facil')) {
                	$result = $this->Boutique->create([
                		'id_boutique' => $_POST['id_btq'],
						'id_facilites' => $_POST[key($_POST)]
						],'jm_boutique_to_facilites');                		
                }
                next($_POST);
            }
            
            if($result){
                return $this->redirect(BASE_LINK);
            }
	}

}