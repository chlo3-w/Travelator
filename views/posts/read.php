    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="?controller=post&action=readAll">Posts</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a><?php echo $post->title;?></a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<br>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.3"></script>
<div class="container-fluid">
    <div class="container">
        <?php
            $file = 'views/images/' . $post->city . '.jpeg';
            if (file_exists($file)) {
                $img = "<img class='img-fluid text-center' src='$file' height='400px' width='auto' />";
                echo $img;
            }
        ?>
        <h2 class="post-headline"><?php echo $post->title; ?></h2>
        <div class="post-content">
                <div class="post-meta d-flex">
                    <div class="post-author-date-area d-flex">
                        <!-- Post Date -->
                        <div class="post-date">
                           <h4><?php echo date("jS F Y", strtotime($post->create_date)); ?>&nbsp;</h4>
                        </div>
                    </div>
                    <!-- Post Comment & Share Area -->
                    <div class="post-comment-share-area d-flex">
                        <!-- Post Comments -->
                        <div class="post-comments">
                            <h4> <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>2&nbsp;</a></h4>
                        </div>
                        <!-- Post Share -->
                        <div class="post-share">
                            <h4><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div></h4>
                        </div>
                    </div>
                </div>
            <br>
        <p><?php echo html_entity_decode($post->content); ?></p>
        <hr>
        <div class="related-post-area section_padding_50">
            <h4 class="mb-30">Other posts you may like...</h4> 
            <?php
                $db = Db::getInstance();
                $smt = $db->prepare("SELECT * FROM posts 
                                    LEFT JOIN location 
                                    ON posts.location_id = location.ID 
                                    INNER JOIN category 
                                    ON posts.category_id = category.category_id
                                    WHERE category ='$post->category'");
                $smt->execute();
                $data = $smt->fetchAll();
                foreach ($data as $related):
                ?>
                <h4><a href="?controller=post&action=read&id=<?php echo $related["id"] ?>"><?=$related["title"]?></a></h4>
              <?php endforeach ?>
              
        </div>
    </div>                     
</div>
</div>
