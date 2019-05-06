<?php

class Post {

    public $id;
    public $title;
    public $content;
    public $city;
    public $country;
    public $continent;
    public $category;
    public $create_date;

    public function __construct($id, $title, $content, $city, $country, $continent, $category, $create_date) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->city = $city;
        $this->country = $country;
        $this->continent = $continent;
        $this->category = $category;
        $this->create_date = $create_date;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();

        $req = $db->query(
                'SELECT * FROM posts 
                        LEFT JOIN location 
                        ON posts.location_id = location.ID 
                        INNER JOIN category 
                        ON posts.category_id = category.category_id');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['title'], $post['content'], $post['city'], $post['country'], $post['continent'], $post['category'], $post['create_date']);
        }return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts 
                            LEFT JOIN location 
                            ON posts.location_id = location.ID 
                            INNER JOIN category 
                            ON posts.category_id = category.category_id
                            WHERE posts.id = :id');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        if ($post) {
            return new Post($post['id'], $post['title'], $post['content'], $post['city'], $post['country'], $post['continent'], $post['category'], $post['create_date']);
        } else {
//replace with a more meaningful exception
            throw new Exception("No post returned, click <a href='/Travelator/index.php'>here</a> to go back to the homepage.");
        }
    }

    public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("INSERT INTO location (city) 
                                VALUES (:city);
                                SET @location_id = LAST_INSERT_ID();
                            INSERT INTO category (category) 
                                VALUES (:category);
                                SET @category_id = LAST_INSERT_ID();  
                            INSERT INTO posts (location_id, category_id, title, content)
                                VALUES (@location_id, @category_id, :title , :content );");

        $req->bindParam(':title', $title);
        $req->bindParam(':city', $city);
        $req->bindParam(':content', $content);
        $req->bindParam(':category', $category);

// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['location']) && $_POST['location'] != "") {
            $filteredCity = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $category = $_POST['category'];
        $title = $filteredTitle;
        $city = $filteredCity;
        $content = html_entity_decode($filteredContent);
        $req->execute();

        Post::uploadFile($city);
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadFile(string $city) {

        if (empty($_FILES[self::InputKey])) {
            //die("File Missing!");
            trigger_error("File Missing!");
        }

        if ($_FILES[self::InputKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
        }


        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            trigger_error("Handle File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }

        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "views/images/";
        $destinationFile = $path . $city . '.jpeg';

        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        }

        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
    }

    public static function update($id) {
        $db = Db::getInstance();
        $req = $db->prepare("UPDATE posts
                            SET title = :title, content = :content
                            WHERE posts.id = :id;

                            UPDATE posts 
                            INNER JOIN location 
                            ON posts.location_id = location.ID 
                            SET location.city = :city 
                            WHERE posts.id = :id;

                            UPDATE posts
                            INNER JOIN category
                            ON posts.category_id = category.category_id
                            SET category.category = :category
                            WHERE posts.id = :id;");
        $req->bindParam(':id', $id);
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->bindParam(':city', $city);
        $req->bindParam(':category', $category);

// set name and price parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['location']) && $_POST['location'] != "") {
            $filteredCity = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $title = $filteredTitle;
        $content = $filteredContent;
        $city = $filteredCity;
        $category = $_POST['category'];
        $req->execute();
    }

    public static function remove($id) {
        $db = Db::getInstance();
        //make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('delete FROM posts WHERE id = :id');
        // the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
    }

    public static function findCategory($category) {
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM posts 
                            LEFT JOIN location 
                            ON posts.location_id = location.ID 
                            INNER JOIN category 
                            ON posts.category_id = category.category_id
                            WHERE category.category = :category');
        $req->execute(array('category' => $category));
   
        foreach ($req->fetchAll() as $post) {
            //make sure that you have these variable in the f
            $list[] = new Post($post['id'], $post['title'], $post['content'], $post['city'], $post['country'], $post['continent'], $post['category'], $post['create_date']);
        }
        return $list;
    }
    
        public static function searchLocation($searchParam) {
            $list=[];
        $db = DB::getInstance();
        $stmt = $db->prepare("SELECT * FROM posts
        LEFT JOIN location 
                            ON posts.location_id = location.ID 
                            INNER JOIN category 
                            ON posts.category_id = category.category_id
        WHERE  CONCAT(city, country, continent) LIKE (?)");
        
        $stmt->execute(['%'.$searchParam.'%']);
        foreach ($stmt->fetchAll() as $post) {
            //make sure that you have these variable in the f
            $list[] = new Post($post['id'], $post['title'], $post['content'], $post['city'], $post['country'], $post['continent'], $post['category'], $post['create_date']);
        }
        return $list;
    }
    

}
