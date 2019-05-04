<?php

class Comment {

    public $firstName;
    public $lastName;
    public $avatar;
    public $commentBody;
    public $id;
    public $postId;

    public function __construct($id, $postId, $firstName, $lastName, $avatar, $commentBody) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->avatar = $avatar;
        $this->commentBody = $commentBody;
        $this->id = $id;
        $this->postId = $postId;
    }

    public static function readComments($postId) {
        $list = [];
        $db = Db::getInstance();
        $stmt = $db->prepare('SELECT comments.ID, comments.postId, comments.userId, comments.commentBody, users.avatar, users.first_name, users.last_name
                            FROM comments
                            INNER JOIN users 
                            ON comments.userID = users.user_id
                            INNER JOIN posts
                            ON comments.postID = posts.id
                            WHERE comments.postID = ?');
        $stmt->execute([$postId]);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $allComments = [];
        foreach ($rows as $row) {
            array_push($allComments, new Comment($row['ID'], $row['postId'], $row['first_name'], $row['last_name'], $row['avatar'], $row['commentBody']));
        }
        return $allComments;
    }

    public static function getOne($commentId) {
        $list = [];
        $db = Db::getInstance();
        $stmt = $db->prepare('SELECT comments.ID, comments.postId, comments.userId, comments.commentBody, users.avatar, users.first_name, users.last_name
                            FROM comments
                            INNER JOIN users 
                            ON comments.userID = users.user_id
                            WHERE comments.ID = ?');
        $stmt->execute([$commentId]);
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);
        return new Comment($row['ID'], $row['postId'], $row['first_name'], $row['last_name'], $row['avatar'], $row['commentBody']);
    }

    public static function createComment($postId, $parentId, $userId, $body) {
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
        
//        $reqAdded = $db->prepare("SELECT LAST_INSERT_ID();");
//        $reqAdded->execute();
//        $result = $reqAdded->fetch();
//
//        $latestComment = Comment::getOne((int)$result);
//            
//        return $latestComment;
    }
}
