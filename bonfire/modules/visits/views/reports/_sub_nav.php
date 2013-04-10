<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/reports/visits') ?>" id="list"><?php echo lang('visits_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Visits.Reports.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/reports/visits/create') ?>" id="create_new"><?php echo lang('visits_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>