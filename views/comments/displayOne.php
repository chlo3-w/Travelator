
<!DOCTYPE html>

<html>
    <head>
        
    </head>
    <body>
<div class="comment-display" style="display: flex; flex-flow: row wrap;">
    <div class="avatar" >
        <img id="avatar" alt="avatar" height="50" width="50" src="<?php echo $comment->avatar; ?>">
    </div>
    <div class="comment-content" style="padding-left: 10px;">
        <header class="comment-header">
        <a href=""><?php echo $comment->first_name." ".$comment->last_name; ?></a>
        </header>
        <div class="comment-body" style="width:100%">
            <?php echo $comment->commentBody; ?>
        </div>
        <footer class='comment-footer'>
            <a href="" action="reply">Reply</a>
        </footer>
    </div>
</div>
</body>
</html>