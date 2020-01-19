<?php

namespace Sixkreation\Ocp3\Model;

require_once 'model/Manager.php';

class ActeurManager extends Manager {
    public function getActors() {
        $db = $this->dbConnect();
        $req = $db->query("SELECT `id_acteur`, SUBSTRING_INDEX(description,'\n',1) AS description,`acteur`,`logo` FROM `acteur`"); 
        
        return $req;
    }
    
    public function getActor($id_acteur) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM `acteur` WHERE `id_acteur` =?');
        $req->execute(array($id_acteur));
        $actor = $req->fetch();
        
        return $actor;
    }
}