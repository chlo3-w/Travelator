
<div class="comment-item" style="display: flex; flex-flow: row wrap;">
    <div class="avatar" >
        <img alt="avatar" height="50" width="50" src="<?php echo $comment->avatar; ?>">
        <!--<img id="avatar" alt="avatar" height="100" width="100" src="images/userProfiles/Sasha.jpeg">-->
    </div>
    <div class="comment-content" style="padding-left: 10px;">
        <header class="comment-header">
            <span><?php echo $comment->firstName . " " . $comment->lastName; ?></span>
        </header>
        <div class="comment-body" style="width:100%">
            <?php echo $comment->commentBody; ?>
        </div>

        <div id="comment-<?php echo $comment->id; ?>" class="reply-to-comment">
            <form class="reply-form" method="post">
                <input type="text" class="reply" name="body">
                <input type="hidden" name="parentId" value="<?php echo $comment->id; ?>">
                <input type="hidden" name="postId" value="<?php echo $comment->postId; ?>">
                <input type="submit" class="send-reply" value="Submit">
            </form>
        </div>

        <div>
            <button 
                class="reply-btn" 
                data-parent-id="<?php echo $comment->id; ?>"
                data-post-id="<?php echo $comment->postId; ?>"
                >
                Reply
            </button>
        </div>

    </div>
</div>