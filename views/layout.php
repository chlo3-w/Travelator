<!DOCTYPE html>
<html>
    <head>
        <?php
        session_start();
        ?>
        <meta name="viewport" content="width=device-width,initial-scale=1">
<!--for R's home glyph-->
 
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" media="all"> 
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel="stylesheet" href="views/css/stylesheet.css">
       <link rel="stylesheet" href="views/css/comments.css">
       <link rel="stylesheet" href="views/css/searchbar.css">
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
       <title>Travel Blog</title>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
       <script src="views/js/main.js" type="text/javascript"></script>
       <script language="javascript" type="text/javascript" src="views/js/ckeditor/ckeditor.js"></script>
        <title>Travel Blog</title>
    </head>
    <body>
            <!-- Top Header Area -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm-3">
                    <!--  Top Social bar start -->
                    <div class="search-hidden-form">
                            <form action="#" method="get">
                                <input type="text" class="typeahead" id="main-search" placeholder="Search location..."> 
<!--                                <span class="searchBtn"><i class="fa fa-search" aria-hidden="true"></i></span>-->
                            </form>
                        </div>
                </div>
                <!--  Login Register Area -->
                <div class="col-8 col-sm-9">
                    <div class="signup-search-area d-flex align-items-center justify-content-end">
                        <div class="login_register_area d-flex">
                            <div class="login">
                                <?php
                                if (!isset($_SESSION['username'])) {
                                    echo "<a href='?controller=pages&action=login'>Login</a>";
                                } else {
                                    echo "<a href='?controller=pages&action=logout'>Logout</a>";
                                }
                                ?>
                            </div>
                            <div class="register">
                                <a href="?controller=pages&action=register">Register</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Top Header Area -->
     <!-- Header Area-->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                       <img id="logo" class="img-responsive" src="views/images/travelatortransparent.jpg" alt="Travelator">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <h5><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#travelator-nav" aria-controls="travelator-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</h5></button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="travelator-nav">
                            <ul class="navbar-nav" id="travelator-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?controller=post&action=readAll">Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="?controller=post&action=gallery">Gallery</a>
                                </li>
                                <?php
                                if(isset($_SESSION['author']) == 1) {
                                echo "<li class='nav-item'>
                                  <a class='nav-link' href='?controller=post&action=create'>Add new post</a>
                                </li>";}
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

        <div id="layout" class="container-fluid">
            <div class="col-sm-12">  
                <?php require_once('routes.php'); ?>
            </div>
        </div>
         <footer class="container-fluid text-center">
            <h4>Connect with us</h4>
            <p><i class="fa fa-fw fa-envelope"></i> hello@Travelator.com</p>
            <br>
            <i class="fa fa-facebook w3-hover-opacity fa-2x"></i>
            <i class="fa fa-instagram w3-hover-opacity fa-2x"></i>
            <i class="fa fa-snapchat w3-hover-opacity fa-2x"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity fa-2x"></i>
            <i class="fa fa-twitter w3-hover-opacity fa-2x"></i>
            <i class="fa fa-linkedin w3-hover-opacity fa-2x"></i>
            <p>Copyright 2019</p>
        </footer>

        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="views/js/jqBootstrapValidation.js"></script>
        <script src="views/js/jquery.validate.js"></script>
        <script src="views/js/main.js"></script>
        <script src="views/js/search.js"></script>
        <script src="views/js/comments.js"></script>-->

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       <script type="text/javascript" src="views/js/jqBootstrapValidation.js"></script>
       <script src="views/js/jquery.validate.js"></script>
       <script src="views/js/main.js"></script>
       <script src="views/js/search.js"></script>
       <script src="views/js/comments.js"></script>
   
        <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
        <script>
//TEXT EDITOR    
            if ($("textarea").length > 0) {
                CKEDITOR.replace('content');
            }
//FORM JQUERY
            $(".input").focus(function () {
                $(this).parent().addClass("focus");
            });
//FORM VALIDATE
            $("#register").validate();
            $("#login").validate();

        </script>    
    </body>
</html>
