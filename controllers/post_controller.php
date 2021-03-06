<?php

class PostController {

    public function readAll() {
        // we store all the posts in a variable
        $posts = Post::all();
        require_once('views/posts/readAll.php');
    }

    public function read() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id'])){
            return call('pages', 'error');
        }

        try {
            // we use the given id to get the correct post
            $post = Post::find($_GET['id']);
            require_once('views/posts/read.php');
            
//            // call comments
            require_once('controllers/comments_controller.php');
            $commentsController = new CommentsController();
            $commentsController->display($_GET['id']);
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function create() {
        // we expect a url of form ?controller=products&action=create
        // if it's a GET request display a blank form for creating a new product
        // else it's a POST so add to the database and redirect to readAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/posts/create.php');
        } else {
            Post::add();
            $posts = Post::all(); //$products is used within the view
            require_once('views/posts/readAll.php');
        }
    }

    public function update() {
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
          return call('pages', 'error');
        // we use the given id to get the correct product
        $posts = Post::find($_GET['id']);
        require_once('views/posts/update.php');
        }
        else {
            $id = $_GET['id'];
            Post::update($id);          
            $posts = Post::all();
            require_once('views/posts/readAll.php');
      }
    }

    public function delete() {
        Post::remove($_GET['id']);
        $posts = Post::all();
        require_once('views/posts/readAll.php');
    }
    
    
     public function readCategory() {
        if (!isset($_GET['category']))
            return call('pages', 'error');
        try {
            // we use the given id to get the correct post
            $posts = Post::findCategory($_GET['category']);
            require_once('views/posts/readAll.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

     public function gallery() {
      //example data to use in the home page
      $posts = Post::all();
      require_once('views/pages/gallery.php');
      
    }
          public function readLocation() {
        if (!isset($_GET['location']))
            return call('pages', 'error');
        try {
            // we use the given id to get the correct post
            $posts = Post::searchLocation($_GET['location']);
            require_once('views/posts/readLocation.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    
}
?>

