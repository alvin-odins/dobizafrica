<div class="container">
<br><br><br>
  <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
      <h2><?php echo $articles['title']; ?></h2>
      <small class="post-date">Posted on: <?php echo $articles['created_at']; ?></small><br>


      <img class="img-thumbnail" src="<?php echo site_url(); ?>assets/img/articles/<?php echo $articles['article_image'] ?>" alt="">

      <div class="post-body">
        <?php echo $articles['body']; ?>
      </div>

      <hr>
      <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>articles/edit/<?php echo $articles['slug']; ?>">Edit</a>
      <?php echo form_open('/articles/delete/'.$articles['id']); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>

      <hr>
      <h3>Add Comment</h3>
      <?php echo validation_errors(); ?>
      <?php echo form_open('comments/create/'.$articles['id']); ?>
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Body</label>
          <textarea name="body" class="form-control"></textarea>
        </div>
        <input type="hidden" name="slug" value="<?php echo $articles['slug']; ?>">
        <button type="submit" class="btn btn-primary">Comment</button>
      </form>

      </div><br><br>
    </div>
      


