<?php

class Pages {
  
        public static function readHomeData() {
        $list = [];
           require_once('models/post_model.php');
        $db = Db::getInstance();
        $req = $db->query(
               'SELECT * FROM posts 
                        LEFT JOIN location 
                        ON posts.location_id = location.ID 
                        INNER JOIN category 
                        ON posts.category_id = category.category_id
                        ORDER BY posts.create_date DESC');
        // we create a list of Product objects from the database results
     
        foreach ($req->fetchAll() as $post) {

            $home[] = new Post($post['id'], $post['title'], $post['content'], $post['city'], $post['country'], $post['continent'], $post['category'], $post['create_date']);

        }
        return $home;
    }
}
