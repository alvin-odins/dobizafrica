<div class="container">

  <div class="row">
    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
      <h2><?php echo $articles['title']; ?></h2>
      <small class="post-date">Posted on: <?php echo $articles['created_at']; ?></small><br>
      <div class="post-body">
        <?php echo $articles['body']; ?>
      </div>
    </div>

  </div><br><br>
  <div class="row">
    <div class="col-md-2 col-sm-2 col-md-offset-2 col-sm-offset-2">
      <hr>
      <?php echo form_open('/articles/delete/'.$articles['id']); ?>
        <input type="submit" value="delete" class="btn btn-danger">
      </form>
    </div>
    <div class="col-md-2 col-sm-2">
      <a href="<?php echo base_url(); ?>articles/edit/<?php echo $articles['slug']; ?>" class="btn btn-success">Edit Article</a>
    </div>
  </div>
</div>
