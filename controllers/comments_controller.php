<?php
require_once('models/comments_model.php');

class CommentsController {

    public function display($id) {
        if(!empty($_POST)) {
            echo "POST=";
            print_r($_POST);
            
            Comment::createComment($_POST['postId'], $_POST['parentId'], 2, $_POST['body']); 
        } 
        $allComments = Comment::readComments($id);
        foreach ($allComments as $comment) {
            require('views/comments/displayComments.php');
        }
    }

}
