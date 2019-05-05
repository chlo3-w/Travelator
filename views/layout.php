<!DOCTYPE html>
<html>
    <head>
        <?php
        session_start();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" media="all"> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="views/css/stylesheet.css">
        <link rel="stylesheet" href="views/css/comments.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title>Travel Blog</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
        <script src="views/js/main.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript" src="views/js/ckeditor/ckeditor.js"></script>
    
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                            <a class="navbar-brand" href="#glyphicon glyphicon-home"</a>

                            <p><span class="glyphicon glyphicon-home"></span></p> 
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#about">About</a></li>
                                <li><a href="#login">Login / Register</a></li>
                                      
                            </ul>
                        </div>
                    </div>
                </nav>
                 <img id="logo" class="img-responsive" src="views/images/travelatortransparent.jpg" alt="Travelator">
            </div>
           

            <!--        <div class="jumbotron text-center">
                        <h2>Travelator</h2>
                    </div>-->

            <nav class="navbar navbar-default navbar-expand-sm bg-light justify-content-center">
                <input type="text" class="typeahead" placeholder="City, Country or Continent"> 
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=post&action=readAll">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=post&action=create">Add new post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=post&action=gallery">Gallery</a>
                    </li>
                    <?php
                    if (isset($_SESSION['author']) == 1) {
                        echo "<li class='nav-item'>
      <a class='nav-link' href='?controller=post&action=create'>Add new post</a>
    </li>";
                    }
                    ?>
                    <?php
                    if (!isset($_SESSION['username'])) {
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link' href='?controller=pages&action=login'>Login</a></li>";
                    } else {
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link' href='?controller=pages&action=logout'>Logout</a></li>";
                    }
                    ?>
                    <!--<li><a href="#search">Search...</a></li>-->
                </ul>
            </nav>


        </header>


        <?php
//        if (isset($_SESSION['username'])) {
//            echo "<li class='nav-item'>";
//            echo "<a class='nav-link' href='?controller=pages&action=logout'>Logout</a></li>";
//        }
//        ?>

        <br>

        <div id="layout" class="container-fluid">
            <div class="col-sm-12 text-center">  
                <?php require_once('routes.php'); ?>
            </div>
        </div>
        <footer class="container-fluid text-center" style="background-color: lightsteelblue; padding: 5px">
            <div class="footer">
                <div class="w3-col s4 w3-justify">
                    <h4>Connect with us</h4>

                    <p><i class="fa fa-fw fa-envelope"></i> hello@Travelator.com</p>

                    <br>
                    <i class="fa fa-facebook-official w3-hover-opacity w3-extra large"></i>
                    <i class="fa fa-instagram w3-hover-opacity w3-extra large"></i>
                    <i class="fa fa-snapchat w3-hover-opacity w3-extra large"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity w3-extra large"></i>
                    <i class="fa fa-twitter w3-hover-opacity w3-extra large"></i>
                    <i class="fa fa-linkedin w3-hover-opacity w3-extra large"></i>
                </div>
                <p>Copyright 2019</p>
        </footer>

        <script src="js/main.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="views/js/jqBootstrapValidation.js"></script>
        <script src="views/js/jquery.validate.js"></script>
        <script src="views/js/main.js"></script>
        <script src="views/js/search.js"></script>
        <script src="views/js/comments.js"></script>

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
