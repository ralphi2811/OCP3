<?php

namespace Sixkreation\Ocp3\Model;

require_once 'model/Manager.php';

class ActeurManager extends Manager {
    public function getActors() {
        $db = $this->dbConnect();
        $req = $db->query($statement); ///////////////////////////////// FINIR ICI
    }
}