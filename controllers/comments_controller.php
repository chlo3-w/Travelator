<?php

require_once('models/comments_model.php');

class CommentsController {

    public function display($id) {

        if (!empty($_POST) && !empty($_SESSION['userId'])) {
            $parentId = NULL;
            $userId = ($_SESSION['userId']);

            if (isset($_POST['parentId'])) {
                $parentId = filter_input(INPUT_POST, 'parentId', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);

            Comment::createComment($userId, $id, $body, $parentId);
        }
        $allComments = Comment::readComments($id);
        require_once('views/comments/newComment.php');

        require_once('views/comments/displayThread.php');
    }

}
