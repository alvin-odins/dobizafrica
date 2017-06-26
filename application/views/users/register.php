<div class="container">
<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	
<?php echo form_close(); ?>