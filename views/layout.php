<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" media="all">
        <link rel="stylesheet" href="views/css/stylesheet.css">
        <title>Travel Blog</title>
    </head>
    <body>
        <div class="jumbotron text-center">
            <h2>Travelator</h2>
        </div>    
        <nav class="navbar navbar-expand-sm bg-light justify-content-center" style="margin-top: -35px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/Travelator/index.php">Home</a>
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
            </ul>
        </nav>
        <br>

        <div class="container-fluid">
            <div class="col-sm-12 text-center">  
                <?php require_once('routes.php'); ?>
            </div>
        </div>
        <footer class="container-fluid text-center" style="background-color: lightsteelblue; padding: 15px 0 8px 0">
            <p>Copyright 2019</p>  
        </footer>
    </body>
</html>