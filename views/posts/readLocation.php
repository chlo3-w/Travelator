
<h1>Here is a list of posts about <?php: echo $posts{0}->country;?></h1>

<div class='container'>
    <div class="row">
        <?php
        $i = 0;
        foreach ($posts as $post) {
            ?>
            <div class ='col-md-6'>
                <div class="card">
                    <img class="card-img" src=<?php echo "'views/images/" . $post->city . ".jpeg'"; ?> > 
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

