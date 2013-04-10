<div class="admin-box">
	<h3>visits</h3>
        
        <?php $roleid = $this->auth->role_id(); ?>
        
	<?php echo form_open($this->uri->uri_string()); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<?php if ($this->auth->has_permission('Visits.Content.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="checkbox" /></th>
					<?php endif;?>
					
					<th>pid</th>
                                        <th>username</th>
                                        
					<th>date</th>
					<th>pinfo</th>
					<th>file</th>
				</tr>
			</thead>
                        
            <?php if ($roleid == 4)  {
                    $this->load->model('property/property_model', 'property_model');
                    $records02 = $this->property_model->find_all_by('property_username',$current_user->username);
                    
                } else {
                    $this->load->model('property/property_model', 'property_model');
                    $records02 = $this->property_model->find_all();
                }
            ?>        

                        
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<tfoot>
				<?php if ($this->auth->has_permission('Visits.Content.Delete')) : ?>
				<tr>
					<td colspan="5">
						<?php echo lang('bf_with_selected') ?>
						<input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('visits_delete_confirm'); ?>')">
					</td>
				</tr>
				<?php endif;?>
			</tfoot>
			<?php endif; ?>
			<tbody>
			<?php if (isset($records) && is_array($records) && count($records)) : ?>
			<?php foreach ($records as $record) : ?>
				<tr>
					<?php if ($this->auth->has_permission('Visits.Content.Delete')) : ?>
					<td><input type="checkbox" name="checked[]" value="<?php echo $record->vid ?>" /></td>
					<?php endif;?>
					
				<?php if ($this->auth->has_permission('Visits.Content.Edit')) : ?>
				<td><?php echo anchor(SITE_AREA .'/content/visits/edit/'. $record->vid, '<i class="icon-pencil">&nbsp;</i>' .  $record->visits_pid) ?></td>
				<?php else: ?>
				<td><?php echo $record->visits_pid ?></td>
				<?php endif; ?>
                                
                                <td><?php // echo $record->visits_username ?></td>
				<td><?php echo $record->visits_date?></td>
				<td><?php echo $record->visits_pinfo?></td>
				<td><?php echo $record->visits_file?></td>
				</tr>
			<?php endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="5">No records found that match your selection.</td>
				</tr>
			<?php endif; ?>
			</tbody>
		</table>
	<?php echo form_close(); ?>
</div>