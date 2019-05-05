
<div class="allComments">
    <?php

    function displayReplies($replies) { ?>
        <ul>
            <?php foreach ($replies as $comment) { ?>
                <li> <?php require 'displayComment.php'; ?> </li>
                <?php
                displayReplies($comment->replies);
            }
            ?>
        </ul>
    <?php
    }

    displayReplies($allComments);
    ?>
</div>
