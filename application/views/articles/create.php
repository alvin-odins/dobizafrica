<div class="container">
  <br><br><br>
  <h2><?= $title; ?></h2>

  <?php echo validation_errors(); ?>


  <?php echo form_open('articles/create') ?>
    <div class="form-group">
      <label>Title:</label>
      <input class="form-control" type="text" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
      <label>Body:</label>
      <textarea id="editor1" class="form-control" name="body"></textarea>
    </div>
    <div class="form-group">
      <label>Category</label>
      <select class="form-control" name="articles_cat_id">
        <?php foreach ($articles_cat as $article_cat): ?>
          <option value="<?php echo $article_cat['id']; ?>"><?php echo $article_cat['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Submit Article</button>
  </form>
</div>
