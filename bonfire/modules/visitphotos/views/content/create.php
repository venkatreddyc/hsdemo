
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($visitphotos) ) {
    $visitphotos = (array)$visitphotos;
}
$id = isset($visitphotos['id']) ? $visitphotos['id'] : '';
?>
<div class="admin-box">
    <h3>VisitPhotos</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('visitphotos_property_id') ? 'error' : ''; ?>">
            <?php echo form_label('Property ID'. lang('bf_form_label_required'), 'visitphotos_property_id', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="visitphotos_property_id" type="text" name="visitphotos_property_id" maxlength="50" value="<?php echo set_value('visitphotos_property_id', isset($visitphotos['visitphotos_property_id']) ? $visitphotos['visitphotos_property_id'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('visitphotos_property_id'); ?></span>
        </div>


        </div>


        <?php // Change the values in this array to populate your dropdown as required ?>

<?php $options = array(
); ?>

        <?php echo form_dropdown('visitphotos_prop_photo', $options, set_value('visitphotos_prop_photo', isset($visitphotos['visitphotos_prop_photo']) ? $visitphotos['visitphotos_prop_photo'] : ''), 'Property Photo')?>        <div class="control-group <?php echo form_error('visitphotos_prop_photo_info') ? 'error' : ''; ?>">
            <?php echo form_label('Photo Information', 'visitphotos_prop_photo_info', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="visitphotos_prop_photo_info" type="text" name="visitphotos_prop_photo_info" maxlength="255" value="<?php echo set_value('visitphotos_prop_photo_info', isset($visitphotos['visitphotos_prop_photo_info']) ? $visitphotos['visitphotos_prop_photo_info'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('visitphotos_prop_photo_info'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create VisitPhotos" />
            or <?php echo anchor(SITE_AREA .'/content/visitphotos', lang('visitphotos_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
