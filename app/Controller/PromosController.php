<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\Fonction\Image;


class PromosController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Boutique');
        $this->loadModel('Promo');
        $this->loadModel('User');
        $this->loadModel('Message');
        $this->loadModel('Donwload');
    }

 	public function index(){
 		if(isset($_SESSION['id_user'])){
	 		$id_user = $_SESSION['id_user'];
 		}else{
 			$id_user = 0;
 		}
        $user = $this->User->get_user($id_user);
        $boutiques = $this->Boutique->all_btq_user($id_user);
        $count_btq = $this->Boutique->cpt_btq($id_user);
        $promos = $this->Promo->index();
        $messages_non_lu = $this->Message->get_all_messages_non_lu($_SESSION['id_user']);
        $downloads = $this->Download->last_5_download();

        $this->render('promos.index', compact('downloads','promos','boutiques','count_btq','user','messages_non_lu'));
    }

    public function add(){
        if (!empty($_POST)) {
            $chemin = 'promos/' . $_POST['nom'] . '-' . $_POST['ville'] . '/';
            $name = $_FILES['encart_promo']['name'];
            $tmp_name = $_FILES['encart_promo']['tmp_name'];

            if(Image::upload_image($chemin,$name,$tmp_name)==false){
                echo "Erreur";
            }else{
                    $fichier = basename($name);
                    $fichier = strtr($fichier, 
                      'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                      'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                    $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

                    $result = $this->Promo->create([
                        'libelle' => $_POST['libelle'],
                        'id_boutique' => $_POST['idbtq'],
                        'image' => $_POST['nom'] . '-' . $_POST['ville'] . '/' . $fichier,
                        'description' => $_POST['contenu_promo']
                    ],'jm_promo');
                if($result){
                    return $this->redirect(BASE_LINK_PROMO);
                }
            }
            
        }
    }

}