<div class="container">
  <br />
  <br /><h2><?= $title ?></h2>
  <?php foreach($articles as $article) : ?>

    <h3><?php echo $article['title']; ?></h3>
    <small class="post-date">Posted on: <?php echo $article['created_at']; ?></small><br>
    <?php echo $article['body']; ?>
    <br><br>
    <p><a class="btn btn-primary" href="<?php echo site_url('/articles/view/'.$article['slug']); ?>">Read More</a></p>

  <?php endforeach; ?>
</div>
