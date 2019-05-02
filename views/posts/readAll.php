<p>Here is a list of all posts:</p>

<div class='container'>
    <div class="row">
        <?php
        $i = 0;
        foreach ($posts as $post) {
            ?>
            <div class ='col-md-6'>
                <div class="card">
                    <img class="card-img" src=<?php echo "'views/images/" . $post->city . ".jpg'"; ?> > 
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $post->title; ?></h4>
                        <div class="card-footer">
                            <div class="card-footer">
                                <a class="card-text text-right" href="?controller=post&action=read&id=<?php echo $post->id; ?>">Read More</a>
                            </div> 
                        </div> 
                    </div> 
                </div>  
            </div>
            <?php
            $i++;
            if ($i % 2 == 0) {
                echo '</div><div class="row">';
            }
        }
        ?>
    </div>
</div>


<!--            <div class = "container">
                <div class="d-flex flex-row">

<?php foreach ($posts as $post) { ?>
                                    <div class ="p-6">
                                        <div class="card">
                                            <img class="card-img" src=<?php echo "'views/images/" . $post->city . ".jpg'"; ?> > 
                                            <div class="card-block">
                                                <h4 class="card-title"><?php echo $post->title; ?></h4>
                                                <div class="card-footer">
                                                    <div class="card-footer">
                                                        <a class="card-text text-right" href="?controller=post&action=read&id=<?php echo $post->id; ?>">Read More</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<?php } ?>
                </div>
            </div>
            Chloe's code for display or hide 
<?php echo $post->title; ?> &nbsp; &nbsp;
                <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read the full post</a> &nbsp; &nbsp;
                <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update post</a> &nbsp;
                <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete post</a> &nbsp; &nbsp;
</p>-->
