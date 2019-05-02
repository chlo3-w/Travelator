<?php

class Post {

    public $id;
    public $title;
    public $content;
    public $city;
    public $country;
    public $continent;
    public $category;

    public function __construct($id, $title, $content, $city, $country, $continent, $category) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->city = $city;
        $this->country = $country;
        $this->continent = $continent;
        $this->category = $category;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('
SELECT *
FROM posts p
Inner join posts_category pc on pc.postId = p.id
Inner join category c on pc.categoryId = c.category_id
Inner join posts_location pl on pl.postId=p.id
Inner join location l on pl.locationId=l.ID
ORDER BY    
create_date DESC;');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['title'], $post['content'], $post['city'], $post['country'], $post['continent'], $post['category']);
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts p
Inner join posts_category pc on pc.postId = p.id
Inner join category c on pc.categoryId = c.category_id
Inner join posts_location pl on pl.postId=p.id
Inner join location l on pl.locationId=l.ID
WHERE p.id = :id');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        if ($post) {
            return new Post($post['id'], $post['title'], $post['content'], $post['city'], $post['country'], $post['continent'], $post['category']);
        } else {
//replace with a more meaningful exception
            throw new Exception("No post returned, click <a href='/Travelator/index.php'>here</a> to go back to the homepage.");
        }
    }

    public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into posts(title, content, location) values (:title, :content, :location);");
        $req->bindParam(':title', $title);
        $req->bindParam(':location', $location);
        $req->bindParam(':content', $content);

        // need to add category and a session tag for user ID
        // this should be a drop down table so that we can restrict the input to food (1), budget/adventure (2), culture (3)
// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['location']) && $_POST['location'] != "") {
            $filteredLocation = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $title = $filteredTitle;
        $location = $filteredLocation;
        $content = $filteredContent;
        $req->execute();

        Post::uploadFile($location);
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'myUploader';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadFile(string $location) {

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
        $destinationFile = $path . $location . '.jpeg';

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
        $req = $db->prepare("Update posts set title=:title, content=:content where id=:id");
        $req->bindParam(':id', $id);
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);

// set name and price parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        $title = $filteredTitle;
        $content = $filteredContent;
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

    public static function findLocation($location) {
        $db = Db::getInstance();
        $req = $db->prepare('call searchLocation(:location)');
        $req->execute(['location' => $location]);
        foreach ($req->fetchAll() as $post) {
            //make sure that you have these variable in the f
            $list[] = new Post($post['id'], $post['title'], $post['content'], $post['img'], $post['city']);
        }
        return $list;
    }

}
