
<h1>Posts from <?php: echo $posts{0}->continent;?></h1>

<div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active"><a>Posts</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<br>
<div class="text-center">
<div class='container'>
    <div class="row">
        <?php
        $i = 0;
        foreach ($posts as $post) {
            ?>
            <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 500px; overflow: hidden; border-radius: 1px;">
                <img class="d-block w-full" src=<?php echo "'views/images/" . $post->city . ".jpeg'"; ?>>
            <div class="px-2 py-2">
                <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                    <?php echo $post->category; ?>
                </p>
                <h1 id="title-card" class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                    <?php echo $post->title; ?>
                </h1>
                <p class="mb-1">
                   <?php echo substr(html_entity_decode($post->content), 0, 100) ."..."; ?>
                </p>
            </div>
             <a href="?controller=post&action=read&id=<?php echo $post->id; ?>" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                Read More
            </a> 
            <?php if(isset($_SESSION['author']) == 1) {
                echo "<br><a style='text-decoration:underline;color:black;' class='text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link' href='?controller=post&action=update&id=". $post->id . "'>Update post</a> &nbsp;";
                echo "| <a style='text-decoration:underline;color:black;' class='text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link' href='?controller=post&action=delete&id=". $post->id . "'>Delete post</a> &nbsp;"; 
            }?>
            </div>
            
            <?php
            $i++;
            if ($i % 2 == 0) {
                echo '</div><div class="row">';
            }
        }
        ?>
<br>
</div>
</div>
</div>