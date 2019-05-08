
<div class="comments-lines text-center">
    <br>
    <hr/>
    <h2> Comments </h2>
    <hr/>
</div>

<?php if (isset($_SESSION['username'])) { ?>

    <div class="comment-item" style="display: flex; flex-flow: row wrap;">
        <div class="avatar" >
            <img alt="avatar" height="50" width="50" src="<?php echo ($_SESSION['avatar']); ?>">
        </div>
        
        <div class="comment-content" style="padding-left: 10px;">
            <header class="comment-header">
                <span><?php echo ($_SESSION['first_name'])." ".($_SESSION['last_name']); ?></span>
            </header>

            <div id="new-comment" class="new-comment">
                <h4></h4>

                <form class="new-comment-form" method="post">
                    <input id="comment" type="text" class="new-comment-body" name="body" placeholder="New comment...">
                    <input id="comment-submit" type="submit" class="new-comment-submit" value="Submit">
                </form>

            </div>
            <br>

        </div>
    </div>



<?php } else {
    ?>

    <a class="comment-login-link" href="?controller=pages&action=login">Login to join the conversation...</a>

    <?php
}
?>

<div class="comments-lines">
    <hr/>
</div>
