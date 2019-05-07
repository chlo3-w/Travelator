<?php
require_once('../connection.php');

class Search {

    public $id;
    public $title;
    public $city;
    public $continent;

    public function __construct($id, $title, $city, $continent) {
        $this->id = $id;
        $this->title = $title;
        $this->city = $city;
        $this->continent = $continent;
    }
    
    public static function searchResults($searchParam) {
        $db = DB::getInstance();
        $stmt = $db->prepare("SELECT posts.id, posts.title, location.city, location.continent FROM posts
        INNER JOIN location ON posts.location_id = location.ID
    WHERE country LIKE (?)");
        
        $stmt->execute(['%'.$searchParam.'%']);
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        $posts = [];
        foreach ($rows as $row){
            array_push($posts, new Search($row['id'], $row['title'], $row['city'], $row['continent']));
        }
        return $posts;
    }
        
}

