
<div class="comments-lines">
    <br>
    <hr/>
    <h2> Comments </h2>
    <hr/>
</div>

<?php if (isset($_SESSION['username'])) { ?>

    <div class="comment-item" style="display: flex; flex-flow: row wrap;">
        <div class="avatar" >
            <img alt="avatar" height="50" width="50" src="views/images/userProfiles/Sasha.jpeg">
        </div>
        <div class="comment-content" style="padding-left: 10px;">
            <header class="comment-header">
                <span>Sasha Massan</span>
            </header>

            <div id="new-comment" class="new-comment">
                <h4></h4>

                <form class="new-comment-form" method="post">
                    <input type="text" class="new-comment-body" name="body" placeholder="New comment...">
                    <input type="submit" class="new-comment-submit" value="Submit">
                </form>

            </div>
            <br>

        </div>
    </div>



<?php } else {
    ?>

    <a class="comment-login-link" href="http://localhost/Travelator/index.php?controller=pages&action=login">Login to join the conversation...</a>

    <?php
}
?>

<div class="comments-lines">
    <hr/>
</div>
