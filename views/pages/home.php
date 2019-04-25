<html>  
    <div class="container">
        <div class="row">
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
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md home-categories">
                <img src="views/images/pascal burger.jpg">
                <div
                <div class="overlay">
                    <span>
                        <a class="home-cat-link" href="?controller=post&action=readLocation&category=Food">Food</a>
                    </span>
                </div>
            </div>
            <div class="col-md home-categories">
                <img src="views/images/SXSW.jpeg">
                <div class="overlay">
                    <span>
                        <a class="home-cat-link" href="?controller=post&action=readLocation&category=experiences">Experiences</a>
                    </span>
                </div>
            </div>
            <div class="col-md home-categories">
                <img src="views/images/cathedral.jpeg">
                <div class="overlay">
                    <span>
                        <a class="home-cat-link" href="?controller=post&action=readLocation&category=culture">Culture</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div>
            <img src="views/images/world.svg">
            <!--<img class="Map w-100" src="views/images/Map.jpg" alt="World Map" usemap="#Map">-->
<!--            <map name="Map" id="Map" class='home-map'>
                <area class="home-map-area" alt="South America"title="South America" href="?controller=post&action=readLocation&location=South America" shape="poly" coords="130,148,150,135,170,134,190,136,206,150,209,168,205,202,197,225,180,233,158,234,139,231,125,208"  hidefocus="true"  />
                <area class="home-map-area" alt="North America" title="North America" href="?controller=post&action=readLocation&location=Australasia" shape="poly" coords="212,106,251,102,283,103,302,104,314,116,320,132,314,176,301,201,271,211,248,203,234,192"  hidefocus="true"  />
                <area class="home-map-area" alt="Africa" title="Africa" href="?controller=post&action=readLocation&location=Africa"  shape="poly" coords="26,62,39,107,88,131,121,138,131,143,149,134,174,131,188,122,188,92,177,69,172,48,170,18,124,14,58,24"  hidefocus="true" />
                <area class="home-map-area" alt="Australasia"  title="Australasia" href="?controller=post&action=readLocation&location=Australasia" shape="poly" coords="361,179,386,171,400,166,416,169,435,175,455,190,481,214,458,227,407,230,378,222"  hidefocus="true"  />
                <area class="home-map-area" alt="Asia" title="Asia" href="?controller=post&action=readLocation&location=Asia" shape="poly" coords="310,106,322,132,335,152,348,171,359,176,383,169,418,164,441,167,436,145,423,120,422,98,414,85,363,84,337,84,318,94"  hidefocus="true"  />
                <area class="home-map-area" alt="Europe"  title="Europe" href="?controller=post&action=readLocation&location=Europe"  shape="poly" coords="174,18,178,55,193,83,221,100,256,99,286,98,305,99,323,87,338,80,363,81,398,83,421,87,461,98,493,85,488,50,473,27,447,20,350,14,260,12,205,10,182,10"  hidefocus="true" />
            </map>-->
        </div>
    </div>

    <p>Hello there <?php
        if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            echo $_SESSION['username'];
        } else
            echo "world explorer";
        ?>!<p>
    <p>Welcome to the world's best Travel Blog!</p>
    <p>This is the home page of the blog, be free to start exploring!</p>

</html>