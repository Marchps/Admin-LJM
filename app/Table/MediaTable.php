<?php
namespace App\Table;

use Core\Table\Table;

class MediaTable extends Table{

    protected $table = "medias";

/**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function get_all_medias(){
        return $this->query("
            SELECT *
            FROM jm_galerie g,jm_image i
            WHERE g.id_galerie=i.id_galerie");
    }

    public function get_galeries(){
        return $this->query("
            SELECT *
            FROM jm_galerie");
    }

}