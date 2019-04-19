<?php

class PagesController {
    
    public function home() {
      //example data to use in the home page
      $first_name = 'World';
      $last_name  = 'Explorer';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  
    public function login() {
        if (isset($_POST["login"])) {
                if (empty($_POST["username"]) || empty($_POST["password"])) {
                    $message = '<label>All fields are required</label>';
                } else {
                    $db = Db::getInstance();
                    $req = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
                    $req->bindParam(':username', $username);
                    $req->bindParam(':password', $password);
//                  $statement = $connect->prepare($query);
                    $req->execute();
                    $count = $req->rowCount();
                    if ($count > 0) {
                        $_SESSION["username"] = filter_input(INPUT_POST, 'username');
                        if(isset($_SESSION["username"])){
                        $query = "SELECT username FROM users WHERE username = '$_SESSION[username]'";
                        $statement = $req = $db->prepare($query);
                        $statement->execute();
                        $firstName = $statement->fetch();
                           echo "<h3>Login Success, Welcome $username[username]</h3>";
                    } else {
                        $message = '<label>Wrong email/password combination </label>';
                    }
                
            } else {
                $this->msgError = 'Your login credentials are incorrect. Please try again later.';
            }
        }}  
        require_once('views/pages/login.php');
    }
    
}




   
