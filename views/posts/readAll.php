<p>Here is a list of all posts:</p>

<?php foreach ($posts as $post) { ?>
    <p>
        <?php echo $post->title; ?> &nbsp; &nbsp;
        <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read the full post</a> &nbsp;
        <?php if(isset($_SESSION['author']) == 1) {
            echo "<a href='?controller=post&action=update&id=". $post->id . "'>Update post</a> &nbsp;";
            echo "<a href='?controller=post&action=delete&id=". $post->id . "'>Delete post</a> &nbsp;"; 
        }}?>
    </p>     