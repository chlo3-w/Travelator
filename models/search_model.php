<?php
require_once('../connection.php');

class Search {

    public $id;
    public $title;

    public function __construct($id, $title) {
        $this->id = $id;
        $this->title = $title;
    }
    
    public static function searchResults($searchParam) {
        $list =[];
        $db = DB::getInstance();
        $stmt = $db->prepare("SELECT posts.id, posts.title FROM posts
        INNER JOIN posts_location ON posts.id = posts_location.postId
        INNER JOIN location ON posts_location.locationId = location.ID
        WHERE   CONCAT(city, country, continent) LIKE (?)");
        
        $stmt->execute(['%'.$searchParam.'%']);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        $posts = [];
        foreach ($rows as $row){
            array_push($posts, new Search($row['id'], $row['title']));
        }
        return $posts;
    }
        
}

