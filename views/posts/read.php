<p>This is the requested post:</p>

<p>Title: <?php echo $post->title; ?></p>
<p>Location: <?php echo $post->location; ?></p>
<p>Content: <?php echo $post->content; ?></p>
<p>
    <?php
    $file = 'views/images/' . $post->location . '.jpeg';
    if (file_exists($file)) {
        $img = "<img src='$file' height='400px' width='auto' />";
        echo $img;
    }
    ?>
</p>