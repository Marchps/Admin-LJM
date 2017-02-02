<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class UsersController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Boutique');
        $this->loadModel('Message');
    }

public function data(){
        $id_user = $_SESSION['id_user'];
        $user = $this->User->get_user($id_user);
        $messages_non_lu = $this->Message->get_all_messages_non_lu($_SESSION['id_user']);
        $boutiques = $this->Boutique->all_btq_user($id_user);
        $this->render('users.data', compact('user','boutiques','messages_non_lu'));
    }

public function update_user(){
        $id_user = $_SESSION['id_user'];

        if($_POST['password']<>""){
            $data_array=[
                'login' => $_POST['username'],
                'nom' => $_POST['lastname'],
                'prenom' => $_POST['firstname'],
                'mail' => $_POST['email'],
                'password' => md5($_POST['password']),
                'poste' => $_POST['job']
            ];
        }else{
             $data_array=[
                'login' => $_POST['username'],
                'nom' => $_POST['lastname'],
                'prenom' => $_POST['firstname'],
                'mail' => $_POST['email'],
                'poste' => $_POST['job']
            ];
        }
        if (!empty($_POST)) {
            $result = $this->User->update($id_user,'id_user',$data_array,'jm_user');
            if($result){
                return $this->redirect(BASE_LINK.'/users/data');
            }
        }
    }    

public function disconnect(){
        session_destroy();
        header('Location: ' . LOGIN_LINK);      
    }


}