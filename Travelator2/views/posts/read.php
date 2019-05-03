
<div class="container-fluid">
    <div class="container">
        <p><?php echo $post->title; ?></p>
        <p>
        <?php
            $file = 'views/images/' . $post->city . '.jpeg';
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

