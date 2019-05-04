$("path, circle").hover(function (e) {
    $("#info-box").css("display", "block");
    $("#info-box").html($(this.title));
});
$("path, circle").mouseleave(function (e) {
    $("#info-box").css("display", "none");
});
$(document)
        .mousemove(function (e) {
            $("#info-box").css("top", e.pageY - $("#info-box").height() - 30);
            $("#info-box").css("left", e.pageX - $("#info-box").width() / 2);
        })
        .mouseover();

CKEDITOR.replace('content');

//FORM VALIDATE
$("#register").validate();
$("#login").validate();

//FORM JQUERY
$(".input").focus(function() {
    $(this).parent().addClass("focus");
  });