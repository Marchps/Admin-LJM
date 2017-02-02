<?php
namespace App\Table;
use Core\Table\Table;

class UserTable extends Table{

    protected $table = 'users';

    public function getUsers(){
        return $this->query("
        	SELECT * FROM jm_user");
    }

    public function get_user($id_user){
        return $this->query("
        	SELECT * FROM jm_user u,jm_droit d WHERE u.id_droit=d.id_droit AND id_user=?", [$id_user], true);
    }
}