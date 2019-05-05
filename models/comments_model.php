<?php

class Comment {

    public $firstName;
    public $lastName;
    public $avatar;
    public $commentBody;
    public $createdAt;

    public function __construct($firstName, $lastName, $avatar, $commentBody, $createdAt) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->avatar = $avatar;
        $this->commentBody = $commentBody;
        $this->createdAt = $createdAt;
    }

    public static function readComments($postId) {
        $list = [];
        $db = Db::getInstance();
        $stmt = $db->prepare('SELECT comments.userId, comments.commentBody, users.avatar, users.first_name, users.last_name, createdAt
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
            array_push($allComments, new Comment($row['first_name'], $row['last_name'], $row['avatar'], $row['commentBody'], $row['createdAt']));
        }
        return $allComments;

//
//        if ($comment) {
//            return new Comment($comment['first_name'], $comment['last_name'], $comment['avatar'], $comment['commentBody']);
//        } else {
//            throw new Exception('No Comments Found!');
//        }
    }

}
