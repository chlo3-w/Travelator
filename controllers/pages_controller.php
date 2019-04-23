<?php


class PagesController {

    public function home() {
      //example data to use in the home page
      require_once('views/pages/home.php');
    }

    public function error() {
        require_once('views/pages/error.php');
    }

    public function login() {
       if($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once('views/pages/login.php');
      }
      else { 
          require_once("models/authentication.php");
          Authentication::userLogin();
          echo $_SESSION['message'] . "<br>";
      }
      
    }
    
    public function logout() {
       if(isset($_SESSION['username'])){
           session_destroy();
           echo "You have successfully logged out";
       }

    }

    public function register() {
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                require_once 'views/pages/register.php';
            }
            else {
                require_once("models/authentication.php");
                Authentication::userRegister();
                echo $_SESSION['message'] . "<br>";
            }
    }
} 
