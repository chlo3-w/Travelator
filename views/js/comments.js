//$('.reply').click(function(e) {
//    var replyButton = $(e.target);
//    var commentParentId = replyButton.attr('data-parent-id');
//    var commentPostId = replyButton.attr('data-post-id');
//    var replyParent = replyButton.parent();
//    var newInput = $('<input class="reply-input" placeholder="Type your reply here..."/>');
//    replyParent.append(newInput);
//    var newSubmitButton = $('<button class="submit">Submit</button>');
//    replyParent.append(newSubmitButton);
//    replyButton.remove();
//
//    newSubmitButton.click(function() {
//        var url = 'views/comments/create.php';
//        var requestData = {
//            body: newInput.val(),
//            parentId: commentParentId,
//            postId: commentPostId
//        };
//
//        axios.post(url, requestData).then(function(response) {
//            renderNewComment(replyParent, response.data)
//        }).catch(function(error) {
//            console.log(error.response);
//            var status = error.response.status;
//            if(status === 401) {
//                alert('You need to log in to post a comment');
//            }
//        });
//    });
//
//});
//
//function renderNewComment(parentElement, newCommentData) {
//    window.reload();
//}



$(document).ready(function () {
    var replyButton = $(".reply-btn");

//    console.log("comments.js loaded");
//    console.log("$Reply button =", replyButton);
//    console.log(reply);

    function showReplyForm(commentId) {
        //console.log("function called");
        var reply = $("#comment-" + commentId);
        reply.addClass("visible");
    }

    replyButton.click(function (e) {
        //console.log("onclick activated");
        //console.log("parentId =", e.target.dataset.parentId);
        showReplyForm(e.target.dataset.parentId);
        $(e.target).addClass("invisible");
    });
});
