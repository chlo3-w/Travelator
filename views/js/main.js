
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

function getPosts(city) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            myObj = JSON.parse(this.responseText);
            getContent(myObj);
        }
    };
    xmlhttp.open("GET", "controllers/map_controller.php?city=" + city, true);
    xmlhttp.send();
}

function getContent(myObj){
//for (i = 0; i < myObj.length; i++) {
    var title = myObj[0].title;
    var city = "views/images/" + myObj[0].city + ".jpeg";
    var id = "?controller=post&action=read&id=" + myObj[0].id;
    var continent = "?controller=post&action=readLocation&location=" + myObj[0].continent;
    document.getElementById("postTitle").innerHTML = title;
    document.getElementById("postCity").src = city;
    document.getElementById("postid").href = id;
    document.getElementById("postContinent").href = continent;
    if (myObj[0].id > 0){
        $('#infoBoxContainer').css('display','block');
        $("path").css('display', 'block');
    }
}


