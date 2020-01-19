<?php

namespace Sixkreation\Ocp3\Model;

require_once 'model/Manager.php';

class ActeurManager extends Manager {
    public function getActors() {
        $db = $this->dbConnect();
        $req = $db->query('SELECT `id_acteur`, SUBSTR(description,1,200) AS description,`acteur`,`logo` FROM `acteur`'); 
        
        return $req;
    }
    
    public function getActor($id_acteur) {
        $db = $this->dbConnect();
        $req = $db->query($statement);
    }
}