

$(document).ready(function () {
    console.log('comments loaded');
    var replyButton = $(".comment-reply-btn");

    function showReplyForm(commentId) {
        var reply = $("#comment-" + commentId);
        reply.addClass("visible");
    }

    replyButton.click(function (e) {
        console.log('clicked');
        showReplyForm(e.target.dataset.parentId);
        $(e.target).addClass("invisible");
    });
});
