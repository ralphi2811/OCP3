<?php

namespace Sixkreation\Ocp3\Model;

require_once 'model/Manager.php';

class CommentManager extends Manager {
    public function listComments($id_acteur) {
        $db = $this->dbConnect();
        $comments = $db->prepare("SELECT post, DATE_FORMAT(date_add ,'%d/%m/%Y') AS date_comment, prenom FROM account, post WHERE post.id_user = account.id_user && post.id_acteur = 1 ORDER BY date_add DESC");
        
        $comments->execute(array($id_acteur));
        
        return $comments;
        
    }
    
    public function postComment($user_id, $id_acteur , $comment) {
        $db = $this->dbConnect();
        $post = $db->prepare('INSERT INTO `post`(`id_user`, `id_acteur`, `post`) VALUES (?,?,?)');
        $affectedLines = $post->execute(array($user_id,$id_acteur,$comment));
        
        return $affectedLines;
    }
    
    // In futurte add function Comment Modification / delete
}
