<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class DownloadsController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Boutique');
        $this->loadModel('Download');
        $this->loadModel('Message');
    }

    public function index(){
        $id_user = $_SESSION['id_user'];
        $user = $this->User->get_user($id_user);
        $messages_non_lu = $this->Message->get_all_messages_non_lu($_SESSION['id_user']);
        $boutiques = $this->Boutique->all_btq_user($id_user);
        $downloads = $this->Download->last_5_download();
        $this->render('downloads.index', compact('user','boutiques','messages_non_lu','downloads'));
    }


}