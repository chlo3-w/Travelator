<!DOCTYPE html>

<html>  
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        
             <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="views/images/Bali.jpeg" alt="Bali">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="views/images/lisbon.jpg" alt="lisbon">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="views/images/test.jpeg" alt="test">
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
    

<!--
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
        </div>-->
    <!--    <div>
            <img class="Map w-100" src="views/images/Map.jpg" alt="World Map" usemap="#Map" />
            <map name="Map" id="Map" class='home-Map'>
                            <area alt="South America" title="South America" href="?controller=post&action=readLocation&location=South America" shape="poly" coords="130,148,150,135,170,134,190,136,206,150,209,168,205,202,197,225,180,233,158,234,139,231,125,208" />
                            <area alt="North America" title="North America" href="?controller=post&action=readLocation&location=Australasia" shape="poly" coords="212,106,251,102,283,103,302,104,314,116,320,132,314,176,301,201,271,211,248,203,234,192" />
                            <area alt="Africa" title="Africa" href="?controller=post&action=readLocation&location=Africa"  shape="poly" coords="26,62,39,107,88,131,121,138,131,143,149,134,174,131,188,122,188,92,177,69,172,48,170,18,124,14,58,24" />
                            <area alt="Australasia" title="Australasia" href="?controller=post&action=readLocation&location=Australasia" shape="poly" coords="361,179,386,171,400,166,416,169,435,175,455,190,481,214,458,227,407,230,378,222" />
                            <area alt="Asia" title="Asia" href="?controller=post&action=readLocation&location=Asia" shape="poly" coords="310,106,322,132,335,152,348,171,359,176,383,169,418,164,441,167,436,145,423,120,422,98,414,85,363,84,337,84,318,94" />
                            <area alt="Europe" title="Europe" href="?controller=post&action=readLocation&location=Europe"  shape="poly" coords="174,18,178,55,193,83,221,100,256,99,286,98,305,99,323,87,338,80,363,81,398,83,421,87,461,98,493,85,488,50,473,27,447,20,350,14,260,12,205,10,182,10"/>
                <area alt="South America" title="South America" aria-hidden="true" onclick="getLocation('South America')" shape="poly" coords="130,148,150,135,170,134,190,136,206,150,209,168,205,202,197,225,180,233,158,234,139,231,125,208" />
                <area alt="North America" title="North America" aria-hidden="true" onclick="getLocation('South America')" shape="poly" coords="212,106,251,102,283,103,302,104,314,116,320,132,314,176,301,201,271,211,248,203,234,192" />
                <area alt="Africa" title="Africa" aria-hidden="true" onclick="getLocation('South America')"  shape="poly" coords="26,62,39,107,88,131,121,138,131,143,149,134,174,131,188,122,188,92,177,69,172,48,170,18,124,14,58,24" />
                <area alt="Australasia" title="Australasia" aria-hidden="true" onclick="getLocation('South America')" shape="poly" coords="361,179,386,171,400,166,416,169,435,175,455,190,481,214,458,227,407,230,378,222" />
                <area alt="Asia" title="Asia" aria-hidden="true" onclick="getLocation('South America')" shape="poly" coords="310,106,322,132,335,152,348,171,359,176,383,169,418,164,441,167,436,145,423,120,422,98,414,85,363,84,337,84,318,94" />
                <area alt="Europe" title="Europe" aria-hidden="true" onclick="getLocation('Europe')"  shape="poly" coords="174,18,178,55,193,83,221,100,256,99,286,98,305,99,323,87,338,80,363,81,398,83,421,87,461,98,493,85,488,50,473,27,447,20,350,14,260,12,205,10,182,10"/>
            </map>
        </div>-->

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