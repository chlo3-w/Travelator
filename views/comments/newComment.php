
<h3> Comments </h3>
<div class="comment-item" style="display: flex; flex-flow: row wrap;">
    <div class="avatar" >
        <img alt="avatar" height="50" width="50" src="views/images/userProfiles/Sasha.jpeg">
    </div>
    <div class="comment-content" style="padding-left: 10px;">
        <header class="comment-header">
            <span>Sasha Massan</span>
        </header>
        <div class="comment-body" style="width:100%">
            <?php echo $comment->commentBody; ?>
        </div>

        <div id="new-comment" class="new-comment">
            <form class="new-comment-form" method="post">
                <input type="text" class="reply" name="body">
                <input type="hidden" name="postId" value="<?php echo $comment->postId; ?>">
                <input type="submit" class="send-reply" value="Submit">
            </form>
        </div>

    </div>
</div>

