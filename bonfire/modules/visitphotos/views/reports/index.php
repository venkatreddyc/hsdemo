<div class="admin-box">
	<h3>VisitPhotos</h3>
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('VisitPhotos.Reports.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>Property ID</th>
					<th>Property Photo</th>
					<th>Photo Information</th>
				</tr>
			</thead>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('VisitPhotos.Reports.Delete')) : ?>
				<tr>
					<td colspan="4">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('visitphotos_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('VisitPhotos.Reports.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->id ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('VisitPhotos.Reports.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/reports/visitphotos/edit/'. $record->id, '<i class="icon-pencil">&nbsp;</i>' .  $record->visitphotos_property_id) ?></td>
				<?php else: ?>
				<td><?php echo $record->visitphotos_property_id ?></td>
				<?php endif; ?>
			
				<td><?php echo $record->visitphotos_prop_photo?></td>
				<td><?php echo $record->visitphotos_prop_photo_info?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="4">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>