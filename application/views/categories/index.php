<div class="container">
	<h2><?= $title; ?></h2>

	<ul class="list-group">
		<?php foreach($categories as $category) : ?>
			<li class="list-group-item">
				<a href="<?php echo site_url('/categories/articles/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>