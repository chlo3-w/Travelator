<?php
require_once('models/comments_model.php');

class CommentsController {

    public function display($id) {
        
        if(!empty($_POST)) {
            $parentId = NULL;
            if (isset ($_POST['parentId'])) {
                $parentId = ($_POST['parentId']);
            }
            
            Comment::createComment(2, $id, $_POST['body'], $parentId); 
        } 
        $allComments = Comment::readComments($id);
        require_once('views/comments/newComment.php');
        
        require_once('views/comments/displayThread.php');
    }

}
