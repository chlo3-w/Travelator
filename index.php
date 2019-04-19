<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Travel Blog</title>
    </head>
    <body>
        <?php
        require_once('connection.php');

        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $controller = $_GET['controller'];
            $action     = $_GET['action'];
        } else {
            $controller = 'pages';
            $action     = 'home';
        }

        require_once('views/layout.php');
        ?>
    </body>
</html>
