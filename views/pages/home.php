<html>  

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="card">
                    <div class="row"> 
                        <div class="col-md-6">
                            <img class="card-img" src=<?php echo "'views/images/" . $home{0}->city . ".jpg'"; ?> >
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <h4 class="card-title"><?php echo $home{0}->title; ?></h4>
                                <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
                            </div>
                            <div class="card-footer">
                                <a class="card-text text-right" href="?controller=post&action=read&id=<?php echo $home{0}->id; ?>">Read More</a>
                            </div>   
                        </div>
                        <div class="card carousel-item">
                            <div class="home-card-block ">
                                <!--if this is changed to the location being the name of the picture, the .jpg file path will need to be added-->
                                <img class="card-img float-left w-50" src="views/images/<?php echo $home{1}->img; ?>" alt="Bali">
                                <h4 class="card-title"><?php echo $home{1}->title; ?></h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <a class="card-text text-right" href="?controller=post&action=read&id=<?php echo $home{1}->id; ?>">Read More</a>
                            </div>   
                        </div>
                        <div class="card carousel-item">
                            <div class="home-card-block">
                                <!--if this is changed to the location being the name of the picture, the .jpg file path will need to be added-->
                                <img class="card-img float-left w-50" src="views/images/<?php echo $home{2}->img; ?>" alt="Bali">
                                <h4 class="card-title"><?php echo $home{2}->title; ?></h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <a class="card-text text-right" href="?controller=post&action=read&id=<?php echo $home{2}->id; ?>">Read More</a>
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
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md home-categories">
            <img src="views/images/pascal burger.jpg">
            <div class="overlay">
                <span>
                    <a class="home-cat-link" href="?controller=post&action=readCategory&category=Food">Food</a>
                </span>
            </div>
        </div>
        <div class="col-md home-categories">
            <img src="views/images/SXSW.jpeg">
            <div class="overlay">
                <span>
                    <a class="home-cat-link" href="?controller=post&action=readCategory&category=Budget">Budget</a>
                </span>
            </div>
        </div>
        <div class="col-md home-categories">
            <img src="views/images/cathedral.jpeg">
            <div class="overlay">
                <span>
                    <a class="home-cat-link" href="?controller=post&action=readCategory&category=culture">Culture</a>
                </span>
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
