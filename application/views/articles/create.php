<div class="container">
  <h2><?= $title; ?></h2>

  <?php echo validation_errors(); ?>


  <?php echo form_open_multipart('articles/create') ?>
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
      <select class="form-control" name="category_id">
        <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
<?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label>Upload Image</label>
      <input type="file" name="userfile" size="20">
    </div>
    <button type="submit" class="btn btn-success">Submit Article</button>
  </form>
