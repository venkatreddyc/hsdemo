
<div class="container">

	<div class="hero-unit">
		<h2 align="center"> Habitech PMS App</h2>

		<p align="center">Best Property Management Services in India</p>
	</div>

    
<p>Home Suraksha is a new generation Property Management & Monitoring Company that offers innovative services. Home Suraksha has started with a vision to provide Peace of Mind to Property Owners in India. Our services are designed towards the vision.

Property Management & Monitoring has become a challenge to the individuals due to busy life and residing away from the location of the property. As a Property Owner, you need to have latest information and updates on its current status. This is a challenging and time consuming. Home Suraksha has started with the objective of solving this unique problem and provide best quality professional services on Property Management.

The investments into real estate properties give good returns in the long run and its important to protect these properties. Owning a property in the fast growing cities is a fortune. However, the property needs to be monitored regularly for any misuse. Property Owners needs to have peace of mind about their properties and this needs lot of information around the property at a regular intervals. </p>



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
