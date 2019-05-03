<?php
$dirname = "views/images/";
$images = glob($dirname."*.jpeg");


foreach($images as $image) {
    echo '<div class="gallery">';
    echo '<img style= "height:300px; padding:10px;" src="'.$image.'" /><br />';
    echo '</div>';
}

?>

<!-- Page Content -->
<div class="container">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Thumbnail Gallery</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

      <?php  
        foreach($posts as $post) {
        echo '<div class="col-lg-3 col-md-4 col-6">';
        echo "<a href='?controller=post&action=read&id=". $post->id . "' class='d-block mb-4 h-100'>";
        ?>
        <img class="img-fluid img-thumbnail" src=<?php echo "'views/images/" . $post->city . ".jpeg'"; ?> > 
        <?php
        echo '</a>';
        echo '</div>';
        }
        ?>
  </div>
</div>
