<?php
require_once('models/comments_model.php');

class CommentsController {

    public function read($id) {
//        if (!isset($_GET['id']))
//        {
//            return call('pages', 'error');
//        } else {
//
//            try {
//                $comment = Comment::displayComments($_GET['id']);
//                require_once '../views/comments/displayOne.php';
//            } catch (Exception $ex) {
//                return call('pages', 'error');
//            }
//        }
//    }
       
        $allComments = Comment::readComments($id);
        foreach ($allComments as $comment) {
            require('views/comments/displayOne.php');
        }
    }

}
