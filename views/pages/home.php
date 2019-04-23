<!DOCTYPE html>

<html>  
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="h-25 d-block w-100 " src="views/images/Bali.jpeg" alt="Bali">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-25" src="views/images/lisbon.jpg" alt="lisbon">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-25" src="views/images/test.jpeg" alt="test">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div>
        <img src="views/images/world_map_watercolour.jpg" alt="world map" usemap="#Map" />
        <map name="Map" id="Map" class="Map">
            <area alt="South America" title="South America" href="?controller=post&action=readLocation&location=South America" shape="poly" coords="51,93,72,84,92,85,92,101,93,121,78,140,51,142" />
            <area alt="Australasia" title="Australasia" href="?controller=post&action=readLocation&location=Australasia" shape="poly" coords="170,108,189,104,206,106,216,113,219,134,207,138,177,130" />
            <area alt="North America" title="North America" href="?controller=post&action=readLocation&location=North America"  shape="poly" coords="11,35,12,65,18,85,42,86,50,89,77,79,87,79,94,70,85,58,76,39,72,30" />
            <area alt="Asia" title="Asia"  shape="poly" coords="142,97,150,67,196,69,202,67,204,85,208,98,202,103,174,104" />
            <area alt="Africa" title="Africa" shape="poly" coords="97,75,140,69,146,75,142,102,142,117,125,127,106,126" />
            <area alt="Europe" title="Europe" shape="poly" href="?controller=post&action=readLocation&location=Europe" coords="75,28,97,68,106,72,143,68,154,65,198,66,219,66,230,58,226,39,211,27" />
        </map>
    </div>
    <p>Hello there <?php echo $first_name . ' ' . $last_name; ?>!<p>
    <p>Welcome to the world's best Travel Blog!</p>
    <p>This is the home page of the blog, be free to start exploring!</p>
    <p id="demo"></p>

<!--    <div id="infoModal" class="modal">
        <h2 class="modal-content" id="country"></h2>
                <h3 class="modal-content" id="job"></h3>
                <p class="modal-content" id="infoText"><p>
        <span class="close">×</span>
    </div>-->

</html>