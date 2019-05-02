<!--<p>This is the requested post:</p>

<p>Title: <?php echo $post->title; ?></p>
<p>Location: <?php echo $post->location; ?></p>
<p>Content: <?php echo $post->content; ?></p>

<p>
    <?php
    $file = 'views/images/' . $post->location . '.jpg';
    if (file_exists($file)) {
        $img = "<img src='$file' height='400px' width='auto' />";
        echo $img;
    }
    ?>
</p>-->

<div class="container-fluid">
    <div class="container">
        <p><?php echo $post->title; ?></p>
        <p>
        <?php
            $file = 'views/images/' . $post->city . '.jpg';
            if (file_exists($file)) {
                $img = "<img src='$file' height='400px' width='auto' />";
                echo $img;
            }
        ?>
        </p>
        <p><?php echo $post->city; ?></p>
        <p><?php echo html_entity_decode($post->content); ?></p>
    </div>
</div>