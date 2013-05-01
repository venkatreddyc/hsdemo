<div class="admin-box">
    <h3>Property Visits Information </h3>
    <?php $roleid = $this->auth->role_id(); ?>
    <?php echo form_open($this->uri->uri_string()); ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <?php if ($this->auth->has_permission('Visits.Content.Delete') && isset($records) && is_array($records) && count($records)) : ?>
                    <th class="column-check"><input class="check-all" type="checkbox" /></th>
                <?php endif;?>

                <th>Property ID</th>
                <th>Visit ID</th>
                <th>User Name</th>
                <th>User ID</th>
                <th>Visit Date</th>
                <th>Property Info</th>
                <th>file</th>
            </tr>
        </thead>
                        
        <?php if ($roleid == 4)  {
                $this->load->model('property/property_model', 'property_model');
                $property_records = $this->property_model->find_all_by('property_username',$current_user->username);
            } else {
                $this->load->model('property/property_model', 'property_model');
                $property_records = $this->property_model->find_all();
            }
        ?>        
                      
        <?php if (isset($property_records) && is_array($property_records) && count($property_records)) : ?>
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

            <tbody>
                <?php foreach ($property_records as $prop_record) : ?>
                    <?php
                         $this->load->model('visits/visits_model', 'visits_model');
                          $visit_records = $this->visits_model->find_all_by('visits_pid',$prop_record->pid);
                    ?>

                    <?php if (is_array($visit_records)) : ?>
                        <?php foreach ($visit_records as $prop_visit_record) : ?>
                            <tr>
                                <?php if ($this->auth->has_permission('Visits.Content.Delete')) : ?>
                                    <td><input type="checkbox" name="checked[]" value="<?php echo $prop_visit_record->vid ?>" /></td>
                                <?php endif;?>

                                <?php if ($this->auth->has_permission('Visits.Content.Edit')) : ?>
                                    <td><?php echo anchor(SITE_AREA .'/content/visits/edit/'. $prop_visit_record->vid, '<i class="icon-pencil">&nbsp;</i>' .  $prop_visit_record->visits_pid) ?></td>
                                <?php else: ?>
                                    <td><?php echo $prop_visit_record->visits_pid ?></td>
                                <?php endif; ?>                       

                                <td><?php echo $prop_visit_record->vid ?></td>
                                <td><?php echo $prop_record->property_username ?></td>
                                <td><?php echo $prop_record->userid ?></td>
                                <td><?php echo $prop_visit_record->visits_date?></td>
                                <td><?php echo $prop_visit_record->visits_pinfo?></td>
                                <td><?php echo $prop_visit_record->visits_file?></td>                                                       
                           </tr>
                        <?php endforeach; ?>
                    <?php endif;?>
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