<?php
namespace App\Table;

use Core\Table\Table;

class PromoTable extends Table{

/**
     * Récupère les boutiques associées à l'id_user
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function index(){
        return $this->query("
            SELECT *
            FROM jm_promo");
    }
}