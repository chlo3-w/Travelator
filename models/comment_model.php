<?php
        
class Comment {
    
    public $first_name = 'Sasha';
    public $last_name = 'Massan';
    public $avatar = '../images/userProfiles/Sasha.jpeg';
    public $comment_body = 'Great post!';

    public function __construct($first_name, $last_name, $avatar, $comment_body) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->avatar = $avatar;
        $this->comment_body = $comment_body;
    }
    
    public static function display() {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->avatar = $avatar;
        $this->comment_body = $comment_body;

    }
}
