<?php

class Pages {
  
        public static function readHomeData() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('call selectAllPost()');
        // we create a list of Product objects from the database results
         require_once('models/post.php');
        foreach ($req->fetchAll() as $post) {
            $home[] = new Post($post['id'], $post['title'], $post['content'], $post['city'], $post['country'], $post['continent'], $post['category']);
        }
        return $home;
    }
}
