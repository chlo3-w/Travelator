<p>Fill in the following form to create a new post:</p>
<form action="" method="POST" class="" enctype="multipart/form-data">

    <h2>Add New Post</h2>
<div class="form-group">
    <p>
        <input class="form-control form-control-lg" type="text" name="title" required autofocus>
        <label>Title</label>
    </p>
</div>
    <p>
        <input class="form-control form-control-sm" type="text" name="location" required>
        <label>Location</label>
    </p>
    <div class="form-group">
        <p>
            <textarea class="form-control" type="text" rows="3" name="content" required></textarea>
            <label>Post content</label>
        </p>
    </div>

    <input type="hidden" 
           name="MAX_FILE_SIZE" 
           value="10000000"
           />

  <input type="file" name="myUploader" class=""/>
  <p><br>
    <input class="btn btn-info" type="submit" value="Create post">
  </p>
</form>