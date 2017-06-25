<div class="container">
<h2><?= $title; ?></h2>

<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-6">
		<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" placeholder="enter name">
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>
	</div>
</div>
