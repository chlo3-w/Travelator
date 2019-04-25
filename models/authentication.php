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
                $req = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
                $req->bindParam(':username', $username);
                $req->bindParam(':password', $password);
                if(isset($_POST['username'])&& $_POST['username']!=""){
                $filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
                }
                if(isset($_POST['password'])&& $_POST['password']!=""){
                $filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);
                }
                $username = $filteredUsername;
                $password = $filteredPassword;
                $req->execute();
                $count = $req->rowCount();
                if ($count > 0) {
                    $_SESSION["username"] = filter_input(INPUT_POST, 'username');
                    $_SESSION['message'] = "Login success! Hello ". $_SESSION["username"];
                } else {
                    $_SESSION['message'] = "Wrong email/password combination :(";
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
                $hash = password_hash($password, PASSWORD_DEFAULT);
                
                    if ($firstname == '') {
                        $_SESSION['message'] = 'Enter your first name';
                    } else if ($lastname == '') {
                        $_SESSION['message'] = 'Enter your last name';
                    } else if ($email == '') {
                        $_SESSION['message'] = 'Enter your email';
                    } else if ($password == '') {
                        $_SESSION['message'] = 'Enter password';
                    } else if ($username ==''){
                        $_SESSION['message'] = 'Choose your username';
                    }
                        
                                        
                    if ($_SESSION['message'] == '') {
                  
                        $stmt = $db->prepare('INSERT INTO users (username, first_name, last_name, email, password) VALUES (:username, :firstname, :lastname, :email, :password)');
                        $stmt->execute(array(
                                ':username' => $username,
                                ':firstname' => $firstname,
                                ':lastname' => $lastname,
                                ':email' => $email,
                                ':password' => $hash,
                        ));
                        $_SESSION['message'] = 'Registration successful';
            }
          }
        }
          
    }