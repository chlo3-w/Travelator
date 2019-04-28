<p>Hello there <?php 
    if(isset($_SESSION['username']) && !empty( $_SESSION['username'])){
    echo $_SESSION['username'];
    }else echo "world explorer";?>!<p>
  
    <?php if(isset($_SESSION['author']) == 1) {
    echo "Hello author";}
    //else echo "Hello!"; 
    ?>
    
<p>Welcome to the world's best Travel Blog!</p>
<p>This is the home page of the blog, be free to start exploring!</p>
