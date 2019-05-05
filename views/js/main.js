
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



//$("path, circle").hover(function(e) {
//  $('.label').css('display','block');
//  $('#country-name').html($(this).attr('title'));
//});
//
//
//$("path, circle").mouseleave(function(e) {
//  $('#country-name').css('display','none');
//});
//
//
//$(document).mousemove(function(e) {
//  $('#info-box').css('top',e.pageY-$('#info-box').height()-30);
//  $('#info-box').css('left',e.pageX-($('#info-box').width())/2);
//}).mouseover();

 $("path, circle").hover(function(e) {
  $('#info-box').css('display','block');
  $('#info-box').html($(this).data('info'));
});

$("path, circle").mouseleave(function(e) {
  $('#info-box').css('display','none');
});

//$(document).mousemove(function(e) {
//  $('#info-box').css('top',e.pageY-$('#info-box').height()-30);
//  $('#info-box').css('left',e.pageX-($('#info-box').width())/2);
//}).mouseover();


var e = document.getElementById('worldMap');
e.onmouseover = function() {
  document.getElementById('info-box').style.display = 'block';
};
e.onmouseout = function() {
  document.getElementById('info-box').style.display = 'none';
};
