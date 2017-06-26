<div class="container">
<br><br><br>
  <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-3"></div>

    <div class="col-md-7 col-sm-7 col-xs-7">
      <h2><?php echo $article['title']; ?></h2>
      <small class="post-date">Posted on: <?php echo $article['created_at']; ?></small><br>


      <img class="img-thumbnail" src="<?php echo site_url(); ?>assets/img/articles/<?php echo $article['article_image'] ?>" alt="">

      <div class="post-body">
        <?php echo $article['body']; ?>
      </div>

      <hr>
      <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>articles/edit/<?php echo $article['slug']; ?>">Edit</a>
      <?php echo form_open('/articles/delete/'.$article['id']); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      <hr>
      <h3>Comments</h3>
      <?php if($comments) : ?>
        <?php foreach($comments as $comment) : ?>
          <div class="lead" style="margin: 20px 0;">
            <h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
          <p>No comments to display</p>
      <?php endif; ?>

      <hr>
      <h3>Add Comment</h3>
      <?php echo validation_errors(); ?>
      <?php echo form_open('comments/create/'.$article['id']); ?>
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
        <input type="hidden" name="slug" value="<?php echo $article['slug']; ?>">
        <button type="submit" class="btn btn-primary">Comment</button>
      </form>

    </div><br><br>

    <div class="col-md-2 col-sm-2 col-xs-2"></div>

  </div>
      


