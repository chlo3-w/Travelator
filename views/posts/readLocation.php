
<p>Posts about <?php $_REQUEST['location'];?> </p>

<?php foreach ($post as $post) { ?>
    <p>
    <div>
        <?php echo $post->img; ?> &nbsp; &nbsp;
    </div>
        <?php echo $post->title; ?> &nbsp; &nbsp;
         <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read the full post</a> &nbsp; &nbsp;
        
    </p>
<?php } 