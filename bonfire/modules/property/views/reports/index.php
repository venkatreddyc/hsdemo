<div class="admin-box">
	
    <h3>Customer Property Details </h3>
	
        <?php $roleid = $this->auth->role_id(); ?>
      
  
	<?php echo form_open($this->uri->uri_string()); ?>
	
            <table class="table table-striped">
		<thead>
				<tr>
					<?php if ($this->auth->has_permission('Property.Reports.Delete') && isset($records) && is_array($records) && count($records)) : ?>
					<th class="column-check"><input class="check-all" type="hidden"  /></th>
					<?php endif;?>
					
					<th>User Name</th>
					<th>address</th>
					<th>location</th>
					<th>info</th>
					<th>Property Image </th>
				</tr>
			</thead>
         
            <?php if ($roleid == 4)  {
                    $this->load->model('property/property_model', 'property_model');
                    $records = $this->property_model->find_all_by('property_username',$current_user->username);
                } else {
                    $this->load->model('property/property_model', 'property_model');
                    $records = $this->property_model->find_all();
                }
            ?>        

	<?php if (isset($records) && is_array($records) && count($records)) : ?>
                        
			<tfoot>
                            
                            
                            
				<?php if ($this->auth->has_permission('Property.Reports.Delete')) : ?>
				<tr>
					<td colspan="6">
                        <?php echo lang('bf_with_selected') ?>
                        <input type="submit" name="view" id="view-me" class="btn btn-info" value="<?php echo lang('bf_action_view') ?>" onclick="">
                        <input type="submit" name="edit" id="edit-me" class="btn btn-success" value="<?php echo lang('bf_action_edit') ?>" onclick="return confirm('<?php echo lang('property_edit'); ?>'">
                        <input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('property_delete_confirm'); ?>')">
                    </td>
				</tr>
				<?php endif;?>
                                        
			</tfoot> 
			<?php endif; ?>

            <tbody>
                
                
				<?php if (isset($records) && is_array($records) && count($records)): ?>
					<?php foreach ($records as $record) : ?>
						<tr>
							<?php if ($this->auth->has_permission('Property.Reports.Delete'))  : ?>
								<td><input type="radio" name="checked[]" value="<?php echo $record->pid ?>" /></td>
							<?php endif;?>
							
							<?php if (($this->auth->has_permission('Property.Reports.Edit')) ) : ?>
								<td><?php echo anchor(SITE_AREA .'/reports/property/view/'. $record->pid,   $record->property_username) ?></td>
							<?php else: ?>
								<td><?php echo $record->property_username ?></td>
							<?php endif; ?>  
						
							<td><?php echo $record->property_address?></td>
							<td><?php echo $record->property_location?></td>
							<td><?php echo $record->property_info?></td>
							<td><?php echo $record->property_file?></td>
						</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td colspan="6">No records found that match your selection.</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
		
    <?php echo form_close(); ?>
        
</div>