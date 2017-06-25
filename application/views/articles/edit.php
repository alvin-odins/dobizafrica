<div class="container">
  <br><br><br>
  <h2><?= $title; ?></h2>

  <?php echo validation_errors(); ?>


  <?php echo form_open('articles/update') ?>
    <input type="hidden" name="id" value="<?php echo $articles['id']; ?>">
    <div class="form-group">
      <label>Title:</label>
      <input type="text" name="title" value="<?php echo $articles['title']; ?>" placeholder="Add Title">
    </div>
    <div class="form-group">
      <label>Body:</label>
      <textarea id="editor1" class="form-control" name="body" value="<?php echo $articles['body']; ?>"></textarea>
    </div>
    <div class="form-group">
      <label>Category</label>
      <select class="form-control" name="articles_cat_id">
        <?php foreach ($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Submit Article</button>
  </form>

