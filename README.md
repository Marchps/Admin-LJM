## Synopsis

J'ai utilisé un framework MVC PHP Homemade pour développer cette espace d'administration. La gestion des mails comprte un peu d'ajax, le reste est essentiellement en PHP.
J'ai utilisé de nombreuses librairies tels que jQuery, datatables, bootstrap...et un template graphique existant pour le design Shamecey template.

Cette espace d'administration permet de gérer :
- des boutiques
- des promos
- des medias avec catégories de médias
- des utilisateurs
- des droits
- des profils
- des messages privés
- un fil d'actualités
- des fichiers à télécharger

Il comporte 3 types d'utilisateurs avec des niveaux de droits différents.

## Code Example MVC (boutiques)

#####Model
```
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
```

#####View 
Fichier index 
```
                <h4 class="widgettitle">Liste des téléchargements</h4>
                <table id="dyntable" class="table table-bordered">
                    <colgroup>
                        <col class="con0" style="align: center; width: 4%" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="head0">Télécharger</th>
                            <th class="head0">Nom du fichier</th>
                            <th class="head1">type</th>
                            <th class="head0">Date d'ajout</th>
                            <th class="head1">ajouté par</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($downloads as $download): ?>
                        <tr class="gradeX">
                            <td><input type="button" traget="_blank" value="Télécharger" onclick="window.location='http://......./<?= $download->real_name ?>';"></td>
                            <td><?= $download->name ?></td>
                            <td><?= $download->type ?></td>
                            <td><?= $download->date_add ?></td>
                            <td class="center"><?= $download->creator ?></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
```

#####Controller
```
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
```


## Motivation

J'ai souhaité créer ce projet pour avoir une bonne base de développement transitoir entre du développement PHP procédural et objet.
La gestion des mails comprend de l'ajax, qui était une techno expérimentale pour moi sur ce type d'architecture de projet.

## Installation et tests

Après avoir copié les fichiers et installé la Base de données, il faut configurer les fichiers suivants :
- à la racine Ad_Login_Exec.php L12 
``` 
$dbh = new PDO('mysql:host='.$server.';dbname='.$base.'', ''.$user.'', ''.$pwd.'');
 ```
- dans core/database/MysqlDatabase.php : 
```
    public function __construct($db_name, $db_user = 'root', $db_pass='', $db_host = 'localhost'){
        $this->db_name = $db_name;
        $this->$db_user = $db_user;
        //$this->$db_pass = $db_pass;
        $this->$db_host = $db_host;
    }

    private function getPDO(){
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname=jardiniersmodernes;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
```


## Contributors

Marc Piatkowski

## License

Hps Weh&Co Mastère 1 ASI Développement