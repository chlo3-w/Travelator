<div class="container-fluid">
    <div class="container">
        <div class="formBox">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Update post</h1>
                </div>
            </div>
            <form action="" method="POST" class="" enctype="multipart/form-data">
             <div class="row">
                <div class="col-sm-6">
                        <div class="inputBox">
                            <div class="">Title</div>
                            <input class="input" type="text" name="title" value="<?= $posts->title; ?>" required>
                        </div>
                </div>
                <div class="col-sm-6">
                        <div class="inputBox">
                                <div class="">Location</div>
                                <input class="input" type="text" name="location" value="<?= $posts->city; ?>" required>
                        </div>
                </div>
             </div>
                <div class="row">
                  <div class="col-sm-12">   
                   <div class="input-group mb-3">
                    <select class="custom-select" id="inputGroupSelect02" name="category">
                        <option selected><?= $posts->category;?></option>
                            <?php
                            $db = Db::getInstance();
                            $smt = $db->prepare('SELECT * FROM category WHERE category_id in (1,2,3)');
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
                    <textarea id="myeditor" name="content" id="myeditor"><?= $posts->content;?>
                    </textarea>
                       <br>
                   </div>
                </div>
              <div class="row">
                <div class="col-sm-12">
                    <input name="login" class="button" type="submit" value="Update post" /> 
                </div>
              </div>
            </form>
        </div>
    </div>
</div>