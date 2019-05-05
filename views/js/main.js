
//CKEDITOR.replace('content');
//
//FORM VALIDATE
//$("#register").validate();
//$("#login").validate();
//
//FORM JQUERY
//$(".input").focus(function() {
//    $(this).parent().addClass("focus");
//  });




 $("path, circle").hover(function(e) {
  $('#info-box').css('display','block');
  $('#info-box').html($(this).data('info'));
});

$("path, circle").mouseleave(function(e) {
  $('#info-box').css('display','none');
});

