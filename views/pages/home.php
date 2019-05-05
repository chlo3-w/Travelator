<html>  
<div class="text-center">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="card home-card">
                        <div class="row"> 
                            <div class="col-md-6">
                                <img class="home-card-img card-img" src=<?php echo "'views/images/" . $home{0}->city . ".jpeg'"; ?> >
                            </div>
                            <div class="col-md-6">
                                <div class="home-card-block">
                                    <h4 class="card-title"><?php echo $home{0}->title; ?></h4>
                                    <p class="card-text"><?php echo substr(html_entity_decode($home{0}->content), 0, 100) . "..."; ?></p>
                                    <a class="btn btn-light" id="home-card-button" href='?controller=post&action=read&id=<?php echo $home{0}->id; ?>'>Read More</a>

                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="card home-card">
                        <div class="row"> 
                            <div class="col-md-6">
                                <img class="home-card-img card-img" src=<?php echo "'views/images/" . $home{1}->city . ".jpeg'"; ?> >
                            </div>
                            <div class="col-md-6">
                                <div class="home-card-block">
                                    <h4 class="card-title"><?php echo $home{1}->title; ?></h4>
                                    <p class="card-text"><?php substr(html_entity_decode($home{1}->content), 0, 100) ."...";  ?></p>
                                    <a class="btn btn-light" id="home-card-button" href='?controller=post&action=read&id=<?php echo $home{1}->id; ?>'>Read More</a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="card home-card">
                        <div class="row"> 
                            <div class="col-md-6">
                                <img class="home-card-img card-img" src=<?php echo "'views/images/" . $home{2}->city . ".jpeg'"; ?> >
                            </div>
                            <div class="col-md-6">
                                <div class="home-card-block">
                                    <h4 class="card-title"><?php echo $home{2}->title; ?></h4>
                                    <p class="card-text"><?php substr(html_entity_decode($home{2}->content), 0, 100) ."...";  ?></p>
                                    <a class="btn btn-light" id="home-card-button" href='?controller=post&action=read&id=<?php echo $home{2}->id; ?>'>Read More</a>
                                </div>
                            </div>
                        </div>  
                    </div>
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

    <div class="container">
        <div class="row">
            <div class="col-md home-categories">
                <img src="views/images/pascal burger.jpg">
                <div class="overlay">
                    <span>
                        <a class="home-cat-link" href="?controller=post&action=readCategory&category=food">Food</a>
                    </span>
                </div>
            </div>
            <div class="col-md home-categories">
                <img src="views/images/SXSW.jpeg">
                <div class="overlay">
                    <span>
                        <a class="home-cat-link" href="?controller=post&action=readCategory&category=adventure">Adventure</a>
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
        </div>
    </div>
    
    
    <div>
        <div>
            <div id="info-box"></div>
            <?php echo file_get_contents("views/images/Continents.svg") ?>
        </div>
    </div>

    </div>
</html>
