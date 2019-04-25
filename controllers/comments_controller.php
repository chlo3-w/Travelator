<?php
class CommentsController {
    
    public function display() {
        $newComment = new Comment;
        $comment = Comment::display();
        require_once('../views/comments/displayOne.php');
    }
    
    public function getReplies() {
        
    }
    
}
