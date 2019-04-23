<?php

class CommentsController {
    
    public function displayAll() {
        $fullName = 'Sasha Massan';
        $avatar = '../images/Sasha.jpeg';
        $comment = 'Great Post!';
        
        //$allComments= Comment::displayAll;
        
        $allComments = []
        
        require_once('../views/comments/display.php');
    }
    
    public function getReplies() {
        
    }
    
}

