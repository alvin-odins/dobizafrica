<div class="container">
<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>