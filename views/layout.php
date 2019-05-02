<!DOCTYPE html>
<html>
    <head>
        <?php
        session_start();
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" media="all">
        <link rel="stylesheet" href="views/css/stylesheet.css">
        <title>Travel Blog</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script language="javascript" type="text/javascript" src="views/js/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h2>Travelator</h2>
        </div>
        <input type="text" class="typeahead" placeholder="City, Country or Continent">
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
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
                    <a class="nav-link" href="?controller=pages&action=login">Login</a>
                </li>
                <?php
                if (isset($_SESSION['username'])) {
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href='?controller=pages&action=logout'>Logout</a></li>";
                }
                ?>
            </ul>
        </nav>
        <br>
        <script>
            var blogPosts = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('title'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: 'http://localhost/Travelator/api/search.php?query=%QUERY',
                    wildcard: '%QUERY'
                }
            });
            $('.typeahead').typeahead(null, {
                name: 'blog-posts',
                display: 'title',
                source: blogPosts
            });

            $('.typeahead').on('typeahead:selected', function (evt, item) {
                window.location.href = 'http://localhost/Travelator/index.php/?controller=post&action=read&id=' + item.id;
            });
        </script>
        <div id="layout" class="container-fluid">
            <div class="col-sm-12 text-center">  
                <?php require_once('routes.php'); ?>
            </div>
        </div>
        <footer class="container-fluid text-center" style="background-color: lightsteelblue; padding: 15px 0 8px 0">
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
<script>
//TEXT EDITOR    
CKEDITOR.replace('content');

//FORM VALIDATE
$("#register").validate();
$("#login").validate();

//FORM JQUERY
$(".input").focus(function() {
    $(this).parent().addClass("focus");
  });


  </script>    
    </body>
</html>