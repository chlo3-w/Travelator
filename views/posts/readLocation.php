<!--<p>Posts about <?php $_GET['location'];?> </p>-->

<?php foreach ($post as $post) { ?>
    <p>
        <?php echo $post->title; ?> &nbsp; &nbsp;
         <?php echo $post->content; ?> &nbsp; &nbsp;
    </p>
<?php } ?>