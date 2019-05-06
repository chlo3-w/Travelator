    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active"><a>Gallery</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<br>
<div class="container">
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