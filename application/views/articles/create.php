<div class="container">
  <br><br><br>
  <h2><?= $title; ?></h2>
  <form>
    <div class="form-group">
      <label>Title:</label>
      <input type="text" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
      <label>Body:</label>
      <textarea name="body"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit Article</button>
  </form>
</div>
