<?php
namespace App\Table;

use Core\Table\Table;

class BoutiqueTable extends Table{

/**
     * Récupère les boutiques associées à l'id_user
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function all_btq_user($id_user){
        return $this->query("
            SELECT *
            FROM jm_user_boutique ub,jm_boutique b
            WHERE ub.id_boutique=b.id_boutique AND id_user = ?", [$id_user], false);
    }

    //Compte le nombre de boutique attachées au user_id
    public function cpt_btq($id_user){
    	return $this->query("
    		SELECT count(*) AS cpt
			FROM jm_user_boutique ub,jm_boutique b
            WHERE ub.id_boutique=b.id_boutique AND id_user = ?", [$id_user], false);
    }

    //obtenir toutes facilites de toutes les boutiques
    public function get_facilites_btq(){
    	return $this->query("
    		SELECT *
			FROM jm_boutique_to_facilites bf");
    }

    //obtenir toutes les infos des facilites
	public function get_all_facilites(){
    	return $this->query("
    		SELECT *
			FROM jm_facilites");
    }

    //récupérer toutes les boutiques
    public function get_all_boutiques(){
        return $this->query("
            SELECT * 
            FROM jm_boutique");
    }
}