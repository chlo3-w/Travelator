<?php

class Comment {

    public $firstName;
    public $lastName;
    public $avatar;
    public $commentBody;
    public $id;
    public $postId;
    public $parentId;
    public $replies;

    public function __construct($row) {
        $this->firstName = $row['first_name'];
        $this->lastName = $row['last_name'];
        $this->avatar = $row['avatar'];
        $this->commentBody = $row['commentBody'];
        $this->id = $row['ID'];
        $this->postId = $row['postID'];
        $this->parentId = $row['parentID'];
        $this->replies = [];
    }

    public static function readComments($postId) {
        $db = Db::getInstance();
        $stmt = $db->prepare('SELECT comments.ID, comments.postID, comments.userID, comments.commentBody, comments.parentID, users.avatar, users.first_name, users.last_name
                            FROM comments
                            INNER JOIN users 
                            ON comments.userID = users.user_id
                            WHERE comments.postID = ? AND comments.parentID IS NULL
                            ORDER BY comments.ID');
        $stmt->execute([$postId]);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $allComments = [];
        
        foreach ($rows as $row) {
            $comment = new Comment($row);
            $comment->replies = Comment::findReplies($comment->id);
            array_push($allComments, $comment);
        }
        return $allComments;
    }
    
    public static function findReplies($commentID) {
        $db = Db::getInstance();
        $stmt = $db->prepare('SELECT comments.ID, comments.postID, comments.userID, comments.commentBody, comments.parentID, users.avatar, users.first_name, users.last_name
                            FROM comments
                            INNER JOIN users 
                            ON comments.userID = users.user_id
                            WHERE comments.parentID = ?');
        $stmt->execute([$commentID]);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $allreplies = [];
        foreach ($rows as $row) {
            $reply = new Comment($row);
            $reply->replies = Comment::findReplies($reply->id);
            array_push($allreplies, $reply);
        }
        return $allreplies;
    }

    public static function createComment($userId, $postId, $body, $parentId) {
        $db = DB::getInstance();
        $req = $db->prepare("
            Insert into comments(
                userId, 
                postId, 
                commentBody, 
                parentId
            ) 
            values (
                :userId, 
                :postId, 
                :commentBody, 
                :parentId
            );");
        $req->bindParam(':userId', $userId);
        $req->bindParam(':postId', $postId);
        $req->bindParam(':commentBody', $body);
        $req->bindParam(':parentId', $parentId);
        $req->execute();
    }

}
