<p>Fill in the following form to create a new post:</p>
<form action="" method="POST" class="" enctype="multipart/form-data">
    
    <h2>Add New Post</h2>
<div class="form-group">
    <p>
        <input class="form-control form-control-lg" type="text" name="title" required autofocus>
        <label>Title</label>
    </p>
</div>
      <!--  <p>
        <input class="form-control" type="text" rows="3" name="content" required>
        <label>Content</label>
    </p>
    -->
    <div class="form-group">
     <p>
    <textarea class="form-control" type="text" rows="3" name="content" required></textarea>
    <label>Post content</label>
    </p>
  </div>
            
 <!-- <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="myUploader" class="" required />
-->  
<p>
    <input class="btn btn-primary mb-2" type="submit" value="Create post">
  </p>
</form>