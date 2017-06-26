<div class="container">
<div class="row">
	<div class="col-md-4 col-sm-4 col-xs-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
		<h2><?= $title; ?></h2>
		<?php echo validation_errors(); ?>

		<?php echo form_open('users/register'); ?>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Name" autofocus>
			</div>
			<div class="form-group">
				<label>Country</label>
				<input type="text" name="country" class="form-control" placeholder="Country">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="password2" class="form-control" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Sign up</button>
		<?php echo form_close(); ?>
			</div>
		</div>