<?php

namespace Sixkreation\Ocp3\Model;

require_once 'model/Manager.php';

class VoteManager extends Manager {
    
    public function countVotes($id_actor) {
        $db = $this->dbConnect();
        $req = $db->prepare("set @actor_id = ?; SELECT (SELECT COUNT(*) FROM vote WHERE vote='1' && id_acteur=@actor_id) AS positif, (SELECT COUNT(*) FROM vote WHERE vote='-1' && id_acteur=@actor_id) AS negatif");
        $req->execute(array($id_actor));
        $votes = $req->fetch();
                
        return $votes;
    }
    
    public function existVote($id_actor, $id_user) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(*) AS exist FROM `vote` WHERE vote.id_acteur=? && vote.id_user=?');
        $req->execute(array($id_actor,$id_user));
        $exist = $req->fetch();
        
        return $exist;
        
    }
    
    public function postVote($id_actor, $id_user, $vote) {
        $db = $this->dbConnect();
        $vote = $db->prepare('INSERT INTO `vote`(`id_user`, `id_acteur`, `vote`) VALUES (?,?,?)');
        $affectedLines = $vote->execute(array($id_user,$id_actor,$vote));
        
        return $affectedLines;
    }
    
    public function updateVote($id_actor, $id_user, $vote) {
        $db = $this->dbConnect();
        $vote = $db->prepare('UPDATE `vote` SET `vote`=? WHERE id_user=? && id_acteur=?');
        $affectedLines = $vote->execute(array($vote,$id_user,$id_actor));
        
        return $affectedLines;
    }
    
    public function countVotePositif($actorId) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(*) AS v_like FROM `vote` WHERE id_acteur =? && vote=1');
        $req->execute(array($actorId));
        $likes = $req->fetch();
        
        return $likes;
    }
    
        public function countVoteNegatif($actorId) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(*) AS v_dislike FROM `vote` WHERE id_acteur =? && vote=0');
        $req->execute(array($actorId));
        $dislikes = $req->fetch();
        
        return $dislikes;
    }
}
