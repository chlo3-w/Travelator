

$(document).ready(function () {
    var replyButton = $(".reply-btn");

    function showReplyForm(commentId) {
        var reply = $("#comment-" + commentId);
        reply.addClass("visible");
    }

    replyButton.click(function (e) {
        showReplyForm(e.target.dataset.parentId);
        $(e.target).addClass("invisible");
    });
});
