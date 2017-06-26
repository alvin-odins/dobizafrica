<div class="container">
  
  <div class="row">
    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
      <h4 class="text-center" style="margin-top: 60px;">Articles by seasoned professionals and business coaches</h4>
    </div>
  </div>

  <div class="divider" style=" border-bottom: 1px solid #44bcc5;"></div>

  <div class="section-a" style="margin-top: 100px; border-top: 1px solid #f1f1f1;">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <i class="fa fa-lightbulb-o"></i>
        <h3>Business Ideas</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
      <div class="col-md-4 col-sm-4">
        <i class="fa fa-gear"></i>
        <h3>Innovative Transformation</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
      <div class="col-md-4 col-sm-4">
        <i class="fa fa-money"></i>
        <h3>Profitable Business and Growth</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
  </div>

  </div>
  <div class="row" style="background: #f1f1f1;">
    <div class="col-md-4 col-sm-4"></div>

    <div class="col-md-5 col-sm-5">
      <h2><?= $title ?></h2>
        <?php foreach($articles as $article) : ?>
          <h3><?php echo $article['title']; ?></h3>
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
              <img class="img-thumbnail article-thumb" src="<?php echo site_url(); ?>assets/img/articles/<?php echo $article['article_image'] ?>" alt="">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <small class="post-date">Posted on: <?php echo $article['created_at']; ?> in <strong><?php echo $article['name']; ?></strong></small><br>
              <?php echo word_limiter($article['body'], 60); ?>
              <br><br>
              <p><a class="btn btn-default" href="<?php echo site_url('/articles/'.$article['slug']); ?>">Read More</a></p>
            </div>
          </div>
        <?php endforeach; ?>
    </div>

  <div class="col-md-3 col-sm-3"></div>
  </div>

