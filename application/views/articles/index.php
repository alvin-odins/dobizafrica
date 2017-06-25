<div class="container">
  <h2><?= $title ?></h2>
<?php foreach($articles as $article) : ?>
	<h3><?php echo $article['title']; ?></h3>
	<div class="row">
		<div class="col-md-9">
			<small class="post-date">Posted on: <?php echo $article['created_at']; ?> in <strong><?php echo $article['name']; ?></strong></small><br>
		<?php echo word_limiter($article['body'], 60); ?>
		<br><br>
		<p><a class="btn btn-default" href="<?php echo site_url('/articles/'.$article['slug']); ?>">Read More</a></p>
		</div>
	</div>
<?php endforeach; ?>
</div>
