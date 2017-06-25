<div class="container">

  <h2><?php echo $articles['title']; ?></h2>
  <small class="post-date">Posted on: <?php echo $articles['created_at']; ?></small><br>
  <div class="post-body">
    <?php echo $articles['body']; ?>
  </div>

  <hr>
  <?php echo form_open('/articles/delete/'.$articles['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger">

</div>
