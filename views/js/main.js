function gettitle()
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (){
        if (this.readyState == 4 && this.status == 200){
           document.getElementById("demo").innerHTML=this;

        }
           
        };
        

};


//
//
//var country = document.getElementById("Map");
//var output = document.getElementById("demo");
//output.innerHTML = slider.value; // Display the default slider value
//
//
//$(input).mouseover(function()
//{
//   var showID = $(this).attr("ID");
//   alert(showID);
//});
//
//function getTitle() {
//    var xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function () {
//        if (this.readyState == 4 && this.status == 200) {
//            myFunction(this);
//        }
//    };
//    xhttp.open("GET", "cd_catalog.xml", true);
//    xhttp.send();
//}
//function myFunction(xml) {
//    var i;
//    var xmlDoc = xml.responseXML;
//    var table = "<tr><th>Title</th><th>Artist</th></tr>";
//    var x = xmlDoc.getElementsByTagName("CD");
//    for (i = 0; i < x.length; i++) {
//        table += "<tr><td>" +
//                x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
//                "</td><td>" +
//                x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
//                "</td></tr>";
//    }
//    document.getElementById("demo").innerHTML = table;
//}
//
////
////var img = document.getElementById('name');
////var modalImg = document.getElementById("job");
////var captionText = document.getElementById("infoText");
////
////
////function personInfo(ID)
////    {
////        var modal = document.getElementById('infoModal');
////        var xmlhttp = new XMLHttpRequest();
////        xmlhttp.onreadystatechange = function () {
////            if (this.readyState === 4 && this.status === 200) {
////                modal.style.display = "block";
////                
////                var result = $.parseJSON(output);
////                
////                document.getElementById("name").innerHTML = output[1];
////                document.getElementById("job").innerHTML = output[2];
////                document.getElementById("infoText").innerHTML = output[3];
////            }
////        };
////        xmlhttp.open("GET", "peoplearray.php?person=" + strIn, true);
//////        send the request that you opened, ie. the get request. The send(string) would be used for a post.  This sends the get
//////request to the php text file (specified on line 57.) Then the response is delieverd, it will go to responseText.
////        xmlhttp.send();
////      
////    var span = document.getElementsByClassName("close")[0];
////
////// When the user clicks on <span> (x), close the modal
////    span.onclick = function () {
////        modal.style.display = "none";
////    };
////    }
////    
////    var result = $.parseJSON(output);
