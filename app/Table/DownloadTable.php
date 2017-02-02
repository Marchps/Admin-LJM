<?php
namespace App\Table;

use Core\Table\Table;

class DownloadTable extends Table{

/**
     * Récupère les fichiers
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function all_download(){
        return $this->query("
            SELECT *
            FROM jm_downloads");
    }   
    public function last_5_download(){
        return $this->query("
            SELECT *
            FROM jm_downloads ORDER BY date_add DESC LIMIT 5 ");
    }

}