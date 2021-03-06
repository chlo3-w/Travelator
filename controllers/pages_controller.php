<?php


class PagesController {

    public function home() {
       
        require_once('models/pages_model.php');
    $home = Pages::readHomeData();
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
          require_once("models/authentication_model.php");
          Authentication::userLogin();
          echo "<p id='message'>". $_SESSION['message'] . "</p><br>";
      }
      
    }
    
    public function logout() {
       if(isset($_SESSION['username'])){
           session_destroy();
            echo "<p id='message'>You have successfully logged out.</p>";

       }

    }

    public function register() {
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                require_once 'views/pages/register.php';
            }
            else {
                require_once("models/authentication_model.php");
                Authentication::userRegister();
                echo "<p id='message'>". $_SESSION['message'] . "</p><br>";
            }
    }
} 
