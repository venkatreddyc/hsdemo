
<?php if (validation_errors()) : ?>
    <div class="alert alert-block alert-error fade in ">
        <a class="close" data-dismiss="alert">&times;</a>
        <h4 class="alert-heading">Please fix the following errors :</h4>
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>

<?php // Change the css classes to suit your needs
    if( isset($property) ) {
        $property = (array)$property;
    }
    $id = isset($property['pid']) ? $property['pid'] : '';
?>

<div class="admin-box">
    <h3>Edit Property Information </h3>
  
    <?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>

    <fieldset>
        <div class="control-group <?php echo form_error('pid') ? 'error' : ''; ?>">
            <?php echo form_label('Property ID'. lang('bf_form_label_required'), 'pid', array('class' => "control-label") ); ?>
            <div class='controls'>
                <label> <?php echo set_value('pid', isset($property['pid']) ? $property['pid'] : ''); ?>  </label>
                <span class="help-inline"><?php echo form_error('pid'); ?></span>
            </div>
        </div>
        
        <div class="control-group <?php echo form_error('property_username') ? 'error' : ''; ?>">
            <?php echo form_label('User Name'. lang('bf_form_label_required'), 'property_username', array('class' => "control-label") ); ?>
            <div class='controls'>
                <label> <?php echo set_value('property_username', isset($property['property_username']) ? $property['property_username'] : ''); ?>  </label>
                <span class="help-inline"><?php echo form_error('property_username'); ?></span>
            </div>
        </div>
        
        <div class="control-group <?php echo form_error('property_address') ? 'error' : ''; ?>">
            <?php echo form_label('address'. lang('bf_form_label_required'), 'property_address', array('class' => "control-label") ); ?>
            <div class='controls'>
                <input id="property_address" type="text" name="property_address" maxlength="255" value="<?php echo set_value('property_address', isset($property['property_address']) ? $property['property_address'] : ''); ?>"  />
                <span class="help-inline"><?php echo form_error('property_address'); ?></span>
            </div>
        </div>
        
        <div class="control-group <?php echo form_error('property_location') ? 'error' : ''; ?>">
            <?php echo form_label('location'. lang('bf_form_label_required'), 'property_location', array('class' => "control-label") ); ?>
            <div class='controls'>
                <input id="property_location" type="text" name="property_location" maxlength="255" value="<?php echo set_value('property_location', isset($property['property_location']) ? $property['property_location'] : ''); ?>"  />
                <span class="help-inline"><?php echo form_error('property_location'); ?></span>
            </div>
        </div>
        
        <div class="control-group <?php echo form_error('property_info') ? 'error' : ''; ?>">
            <?php echo form_label('info'. lang('bf_form_label_required'), 'property_info', array('class' => "control-label") ); ?>
            <div class='controls'>
                <input id="property_info" type="text" name="property_info" maxlength="255" value="<?php echo set_value('property_info', isset($property['property_info']) ? $property['property_info'] : ''); ?>"  />
                <span class="help-inline"><?php echo form_error('property_info'); ?></span>
            </div>
        </div>
        
        <div class="control-group <?php echo form_error('property_file') ? 'error' : ''; ?>">
            <?php echo form_label('file'. lang('bf_form_label_required'), 'property_file', array('class' => "control-label") ); ?>
            <div class='controls'>
                <input id="property_file" type="text" name="property_file" maxlength="255" value="<?php echo set_value('property_file', isset($property['property_file']) ? $property['property_file'] : ''); ?>"  />
                <span class="help-inline"><?php echo form_error('property_file'); ?></span>
            </div>
        </div>

        <div class="control-group <?php echo form_error('property_landmark') ? 'error' : ''; ?>">
            <?php echo form_label('Property Landmark'. lang('bf_form_label_required'), 'property_landmark', array('class' => "control-label") ); ?>
            <div class='controls'>
                <input id="property_landmark" type="text" name="property_landmark" maxlength="255" value="<?php echo set_value('property_landmark', isset($property['property_landmark']) ? $property['property_landmark'] : ''); ?>"  />
                <span class="help-inline"><?php echo form_error('property_landmark'); ?></span>
            </div>
        </div>

        <div class="control-group <?php echo form_error('property_mapurl') ? 'error' : ''; ?>">
            <?php echo form_label(' Google Map URL'. lang('bf_form_label_required'), 'property_mapurl', array('class' => "control-label") ); ?>
            <div class='controls'>
                <input id="property_mapurl" type="text" name="property_mapurl" maxlength="255" value="<?php echo set_value('property_mapurl', isset($property['property_mapurl']) ? $property['property_mapurl'] : ''); ?>"  />
                <span class="help-inline"><?php echo form_error('property_mapurl'); ?></span>
            </div>
        </div>

        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit property" />
            or <?php echo anchor(SITE_AREA .'/content/property', lang('property_cancel'), 'class="btn btn-warning"'); ?>
            <?php if ($this->auth->has_permission('Property.Content.Delete')) : ?>
                or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('property_delete_confirm'); ?>')">
                <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('property_delete_record'); ?>
                </button>
            <?php endif; ?>
        </div>
            
    </fieldset>
    <?php echo form_close(); ?>
</div>