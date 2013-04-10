<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/reports/property') ?>" id="list"><?php echo lang('property_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Property.Reports.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/reports/property/create') ?>" id="create_new"><?php echo lang('property_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>