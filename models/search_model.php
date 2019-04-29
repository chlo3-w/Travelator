<?php

class Search {

    public $id;
    public $title;

    public function __construct($id) {
        $this->id = $id;
    }
    
    public static function searchResults($searchParam) {
        $list =[];
        $db = DB::getInstance();
        $stmt = $db->prepare('SELECT posts.id FROM posts
        INNER JOIN posts_location ON posts.id = posts_location.postId
        INNER JOIN location ON posts_location.locationId = location.ID
        WHERE MATCH (city, country, continent) AGAINST ('europe')';
    }

}

