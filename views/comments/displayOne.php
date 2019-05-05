<div class="container-fluid">
    <div class="container">
        
<!--<div class="comment-display" style="display: flex; flex-flow: row wrap;">
    <div class="avatar" >
        <img id="avatar" alt="avatar" height="50" width="50" src="<?php echo $comment->avatar; ?>">
        <img id="avatar" alt="avatar" height="100" width="100" src="views/images/userProfiles/Sasha.jpeg">
    </div>
    <div class="comment-content" style="padding-left: 10px;">
        <header class="comment-header">
        <a href=""><?php echo $comment->firstName." ".$comment->lastName; ?></a>
        </header>
        <div class="comment-body" style="width:100%">
            <?php echo $comment->commentBody; ?>
        </div>
        <footer class='comment-footer'>
            <a href="" action="reply">Reply</a>
        </footer>
    </div>
</div>-->
                                    <!-- Comment Area Start -->
                            <div class="comment_area section_padding_50 clearfix">
                                

    <ol>
        <!-- Single Comment Area -->
        <li class="single_comment_area">
            <div class="comment-wrapper d-flex">
                <br>
                <!-- Comment Meta -->
                <div class="comment-author">
                    <br> <img src="<?php echo $comment->avatar; ?>" alt="">
                </div>
                <!-- Comment Content -->
                <div class="comment-content">
                    <br>
                    <span class="comment-date text-muted"><?php echo date("H:m:s jS F Y", strtotime($comment->createdAt));?></span>
                    <h5 style='font-family: sans-serif; letter-spacing: 0px;'><strong><?php echo $comment->firstName." ".$comment->lastName; ?></strong></h5>
                    <p><?php echo $comment->commentBody; ?></p>
                    <a style="font-family: sans-serif; letter-spacing: 0px;" href="#">Reply</a><br>
                </div>
            </div>
        </li>
    </ol>
    </div>
    </div>
</div>
