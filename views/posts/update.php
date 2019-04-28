
<p>Fill in the following form to create a new post:</p>
<form action="" method="POST" class="" enctype="multipart/form-data">

    <h2>Update Post</h2>
    <div class="form-group">
        <p>
            <input class="form-control form-control-lg" type="text" name="title" value="<?= $posts->title; ?>">
            <label>Title</label>
        </p>
    </div>
    <div class="form-group">
        <p>
            <textarea class="form-control" rows="10" type="text" name="content" value=""><?= $posts->content; ?></textarea>
            <label>Post content</label>
        </p>
    </div>
    <p>
        <input class="btn btn-primary mb-2" type="submit" value="Update Post">
    </p>
</form>