<div class="admin-box">
    <h3>Customer Property Details </h3>
    <?php echo form_open($this->uri->uri_string()); ?>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <?php if ($this->auth->has_permission('Property.Content.Delete') && isset($records) && is_array($records) && count($records)) : ?>
                <th class="column-check"><input class="check-all" type="checkbox" /></th>
                <?php endif;?>
                <th>User Name</th>
                <th>Property Address</th>
                <th>City</th>
                <th>Property Info</th>
                <th>file</th>
                <th>Property Landmark</th>
                <th>Property Map URL </th>
            </tr>
        </thead>
                        
        <?php if (isset($records) && is_array($records) && count($records)) : ?>
            <tfoot>
                <?php if ($this->auth->has_permission('Property.Content.Delete')) : ?>
                <tr>
                    <td colspan="6">
                        <?php echo lang('bf_with_selected') ?>
                        <input type="submit" name="delete" id="delete-me" class="btn btn-danger" value="<?php echo lang('bf_action_delete') ?>" onclick="return confirm('<?php echo lang('property_delete_confirm'); ?>')">
                    </td>
                </tr>
                <?php endif;?>
            </tfoot>
	<?php endif; ?>
            
	<tbody>
            <?php if (isset($records) && is_array($records) && count($records)) : ?>
		<?php foreach ($records as $record) : ?>
                    <tr>
                        <?php if ($this->auth->has_permission('Property.Content.Delete')) : ?>
                            <td><input type="checkbox" name="checked[]" value="<?php echo $record->pid ?>" /></td>
                        <?php endif;?>

                        <?php if ($this->auth->has_permission('Property.Content.Edit')) : ?>
                            <td><?php echo anchor(SITE_AREA .'/content/property/edit/'. $record->pid, '<i class="icon-pencil">&nbsp;</i>' .  $record->property_username) ?></td>
                        <?php else: ?>
                            <td><?php echo $record->property_username ?></td>
                            <td><?php echo $record->userid ?></td>
                        <?php endif; ?>

                        <td><?php echo $record->property_address?></td>
                        <td><?php echo $record->property_location?></td>
                        <td><?php echo $record->property_info?></td>
                        <td><?php echo $record->property_file?></td>
                        <td><?php echo $record->property_landmark?></td>
                        <td> <a href="<?php echo $record->property_mapurl?>" > Map Location </a></td>
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