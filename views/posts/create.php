<!--<p>Fill in the following form to create a new post:</p>
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
</form>-->

<div class="container-fluid">
    <div class="container">
        <div class="formBox">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Add new post</h1>
                </div>
            </div>
            <form action="" method="POST" class="" enctype="multipart/form-data">
             <div class="row">
                <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="inputText">Title</div>
                            <input class="input" type="text" name="title" required>
                        </div>
                </div>
                <div class="col-sm-6">
                        <div class="inputBox">
                                <div class="inputText">Location</div>
                                <input class="input" type="text" name="location" required>
                        </div>
                </div>
             </div>
                <div class="row">
                  <div class="col-sm-12">   
                   <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Choose...</option>
                            <?php
                            $db = Db::getInstance();
                            $smt = $db->prepare('SELECT * FROM category');
                            $smt->execute();
                            $data = $smt->fetchAll();
                            foreach ($data as $row):
                            ?>
                          <option> <?=$row["category"]?></option>
                          <?php endforeach ?>
                    </select>
                    <div class="input-group-append">
                      <label class="input-group-text" for="inputGroupSelect02">Select a category</label>
                    </div>
                  </div>
                  </div>
                </div>
                   <div class="row">
                   <div class="col-sm-12">     
                    <textarea id="myeditor" name="content" id="myeditor"> 
                    </textarea>
                       <br>
                   </div>
                </div>
                <div class="row text-left">
                  <div class="col-sm-12 "> 
                    <input type="hidden" 
                     name="MAX_FILE_SIZE" 
                     value="10000000"
                     />
                      <input type="file" name="myUploader" class=""/>     
                  </div>
                </div>
                <br>
              <div class="row">
                <div class="col-sm-12">
                    <input name="login" class="button" type="submit" value="Create post" /> 
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
           