<div class="container">
<br><br><br>
  <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-8">
      <h2><?php echo $articles['title']; ?></h2>
      <small class="post-date">Posted on: <?php echo $articles['created_at']; ?></small><br>


      <img class="img-thumbnail" src="<?php echo site_url(); ?>assets/img/articles/<?php echo $articles['article_image'] ?>" alt="">

      <div class="post-body">
        <?php echo $articles['body']; ?>
      </div>
    </div>

  </div><br><br>
      <hr>
    	<a class="btn btn-default pull-left" href="<?php echo base_url(); ?>articles/edit/<?php echo $articles['slug']; ?>">Edit</a>
    	<?php echo form_open('/articles/delete/'.$articles['id']); ?>
    		<input type="submit" value="Delete" class="btn btn-danger">
      </form>


