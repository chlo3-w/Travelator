<?php

class Authentication {

    public $username;
    public $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public static function userLogin() {
        if (isset($_POST["login"])) {
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                $_SESSION['message'] = "All fields are required!";
            } else {
                $db = Db::getInstance();
                $req = $db->prepare("SELECT * FROM users WHERE username = :username AND password = MD5(:password)");

                if (isset($_POST['username']) && $_POST['username'] != "") {
                    $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
                }
                if (isset($_POST['password']) && $_POST['password'] != "") {
                    $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
                }
                $username = $filteredUsername;
                $password = $filteredPassword;
                $req->bindParam(':username', $username);
                $req->bindParam(':password', $password);
                $req->execute();
                $result = $req->fetch(PDO::FETCH_ASSOC);
                $count = $req->rowCount();
                
                if ($count > 0) {
                    $_SESSION["username"] = filter_input(INPUT_POST, 'username');
                    $_SESSION['message'] = "Login success! Hello " . $_SESSION["username"] . "<br> Please click <a href='index.php?controller=pages&action=home'>here</a> to go to the homepage.";
                    $_SESSION['author'] = $result['author'];
                    //INSERT SESSION AUTHOR HERE^^
                    $_SESSION['userId'] = $result['user_id'];
                    $_SESSION['first_name'] = $result['first_name'];
                    $_SESSION['last_name'] = $result['last_name'];
                    $_SESSION['avatar'] = $result['avatar'];
                } else {
                    $_SESSION['message'] = "Wrong email/password combination :( <br> Please <a href='index.php?controller=pages&action=login'>try again</a>!";
                }
            }
        }
    }

    public static function userRegister() {
        $db = DB::getInstance();
        if (isset($_POST['register'])) {
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $_SESSION['message'] = '';
            $firstname = filter_input(INPUT_POST, 'firstname');
            $lastname = filter_input(INPUT_POST, 'lastname');
            $email = filter_input(INPUT_POST, "email");
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');

            if ($firstname == '') {
                $_SESSION['message'] = 'Enter your first name';
            } else if ($lastname == '') {
                $_SESSION['message'] = 'Enter your last name';
            } else if ($email == '') {
                $_SESSION['message'] = 'Enter your email';
            } else if ($password == '') {
                $_SESSION['message'] = 'Enter password';
            } else if ($username == '') {
                $_SESSION['message'] = 'Choose your username';
            }


            if ($_SESSION['message'] == '') {
                $stmt = $db->prepare('INSERT INTO users (username, first_name, last_name, email, password) VALUES (:username, :firstname, :lastname, :email, MD5(:password))');
                $stmt->execute(array(
                    ':username' => $username,
                    ':firstname' => $firstname,
                    ':lastname' => $lastname,
                    ':email' => $email,
                    ':password' => $password,
                ));
            }
            if (!preg_match("/@.*travelator\.com$/", $email)) {
                
            } else {
                $db = Db::getInstance();
                $query = $db->prepare("CALL addPrivledges()");
                $query->execute();
                //INSERT SESSION AUTHOR HERE?
            }
            $_SESSION['message'] = "Registration successful. Click <a href='index.php?controller=pages&action=login'>here</a> to login.";
        }
    }

}

//last inserted ID from PDO 
