<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
 <p>
    <?php echo $post->title; ?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read the full post</a> &nbsp; &nbsp;
 </p>
<?php } ?>