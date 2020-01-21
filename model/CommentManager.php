<?php

namespace Sixkreation\Ocp3\Model;

require_once 'model/Manager.php';

class CommentManager extends Manager {
    
    public function postComment($user_id, $id_acteur , $comment) {
        $db = $this->dbConnect();
        $post = $db->prepare('INSERT INTO `post`(`id_user`, `id_acteur`, `post`) VALUES (?,?,?)');
        $affectedLines = $post->execute(array($user_id,$id_acteur,$comment));
        
        return $affectedLines;
    }
    
    public function getComments($actorId) {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT post, DATE_FORMAT(date_add ,\'%d/%m/%Y\') AS date_comment, prenom FROM account, post WHERE post.id_user = account.id_user && post.id_acteur =? ORDER BY date_add DESC');
        $comments->execute(array($actorId));
        return $comments;
    }
    
    public function countComments($actorId) {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(*) AS countcom FROM `post` WHERE id_acteur=?');
        $req->execute(array($actorId));
        
        $counter = $req->fetch();
        
        return $counter;
        
    }
    
    // In futurte add function Comment Modification / delete
}
