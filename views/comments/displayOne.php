
<div class="comment-display" style="display: flex; flex-flow: row wrap;">
    <div class="avatar" >
        <!--<img id="avatar" alt="avatar" height="50" width="50" src="<?php echo $comment->avatar; ?>">-->
        <img id="avatar" alt="avatar" height="100" width="100" src="images/userProfiles/Sasha.jpeg">
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
</div>
