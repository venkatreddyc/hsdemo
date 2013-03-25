
<div class="container">

	<div class="hero-unit">
		<h2 align="center"> Welcome to Home Suraksha.</h2>

		<p align="center">Best Property Management Services in India</p>
	</div>

    
<p>Home Surkasha has started with a vision to provide peace of mind to the property owners in India. It takes care of all the aspects related to Property management.  </p>



<?php if (isset($current_user->email)) : ?>


	<div class="alert alert-info" style="text-align: center">
		<?php echo anchor(SITE_AREA, "Enter into Account Area"); ?>
	</div>

<?php else :?>

	<p style="text-align: center">
		<?php echo anchor('/login', '<i class="icon-lock icon-white"></i> '. lang('bf_action_login'), ' class="btn btn-primary btn-large" '); ?>
		<?php echo anchor('/register', '<i class="icon-lock icon-white"></i> '. lang('bf_action_register'), ' class="btn btn-primary btn-large" '); ?>

        </p>

<?php endif;?>



</div>
