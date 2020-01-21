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
    
    public function postVote2($actor,$user,$vote) {
        $db = $this->dbConnect();  
        $newVote = $db->prepare('INSERT INTO `vote`(`id_user`, `id_acteur`, `vote`) VALUES (?,?,?)');
        $affectedlines = $newVote->execute(array($user,$actor,$vote));
        return $affectedlines;
    }
    
    public function updateVote2($actor,$user,$vote) {
        $db = $this->dbConnect();  
        $newVote = $db->prepare('UPDATE `vote` SET `vote`=? WHERE id_user=? && id_acteur=?');
        $affectedlines = $newVote->execute(array($vote,$user,$actor));
        return $affectedlines;
    }
}
