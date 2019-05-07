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
                                        <p class="card-text"><?php echo substr(html_entity_decode($home{0}->content), 0, 150) . "..."; ?></p>
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
                                        <p class="card-text"><?php echo substr(html_entity_decode($home{1}->content), 0, 120) . "..."; ?></p>
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
                                        <p class="card-text"><?php echo substr(html_entity_decode($home{2}->content), 0, 100) . "..."; ?></p>
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

        <hr>

        <!-- Banner -->

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="banner_item align-items-center" style="background-image:url(views/images/barcelona.jpg)">
                            <div class="banner_category">
                                <a href="?controller=post&action=readCategory&category=food">FOOD</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner_item align-items-center" style="background-image:url(views/images/zealand.jpg)">
                            <div class="banner_category">
                                <a href="?controller=post&action=readCategory&category=adventure">ADVENTURE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner_item align-items-center" style="background-image:url(views/images/singapore.jpg)">
                            <div class="banner_category">
                                <a href="?controller=post&action=readCategory&category=culture">CULTURE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <hr>

    <!--Map -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Need inspiration?</h2>
                    </div>
                </div>
            </div>
            <div id="map" class="container">
                <div class="row">
                    <div class="col text-left" id="mapContainer">
                        <?php echo file_get_contents('views/images/world.svg'); ?>
                    </div>
                    <div class="col" id="infoBoxContainer">
                        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 400px; overflow: hidden; border-radius: 1px;">
                            <img class="d-block w-full" id="postCity" >
                            <div class="px-2 py-2">
                                <h1 id="postTitle" class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                    <?php echo $post->title; ?>
                                </h1>
                            </div>
                            <a id="postid" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                                Read More
                            </a>
                            <a id="postContinent" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
<!--                                Read other posts from this region-->
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

