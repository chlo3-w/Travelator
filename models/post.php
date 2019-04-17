<?php
class Post {

    // we define 3 attributes
    public $id;
    public $title;
    public $content;
    public $img;

    public function __construct($id, $title, $content, $img) {
      $this->id = $id;
      $this->title = $title;
      $this->content = $content;
      $this->img = $img;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM posts');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['title'], $post['content'], $post['img']);
      }
      return $list;
    }
    
      public static function find($id) {
      $db = Db::getInstance();
      //use intval to make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      //the query was prepared, now replace :id with the actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();
if($post){
      return new Post($post['id'], $post['title'], $post['content'], $post['img']);
    }
    else
    {
        //replace with a more meaningful exception
        throw new Exception("No post returned, click <a href='/Blog2/index.php'>here</a> to go back to the homepage.");
    }
    }
    
    public static function add() {
    $db = Db::getInstance();
    $req = $db->prepare("Insert into posts(title, content) values (:title, :content);");
    $req->bindParam(':title', $title);
    $req->bindParam(':content', $content);

// set parameters and execute
    if(isset($_POST['title'])&& $_POST['title']!=""){
        $filteredTitle = filter_input(INPUT_POST,'title', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    if(isset($_POST['content'])&& $_POST['content']!=""){
        $filteredContent = filter_input(INPUT_POST,'content', FILTER_SANITIZE_SPECIAL_CHARS);
    }
$title = $filteredTitle;
$content = $filteredContent;
$req->execute();

    }
}
