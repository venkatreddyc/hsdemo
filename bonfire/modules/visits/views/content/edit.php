
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($visits) ) {
    $visits = (array)$visits;
}
$id = isset($visits['vid']) ? $visits['vid'] : '';
?>
<div class="admin-box">
    <h3>visits</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('visits_pid') ? 'error' : ''; ?>">
            <?php echo form_label('pid'. lang('bf_form_label_required'), 'visits_pid', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="visits_pid" type="text" name="visits_pid" maxlength="11" value="<?php echo set_value('visits_pid', isset($visits['visits_pid']) ? $visits['visits_pid'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('visits_pid'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('visits_date') ? 'error' : ''; ?>">
            <?php echo form_label('date'. lang('bf_form_label_required'), 'visits_date', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="visits_date" type="text" name="visits_date"  value="<?php echo set_value('visits_date', isset($visits['visits_date']) ? $visits['visits_date'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('visits_date'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('visits_pinfo') ? 'error' : ''; ?>">
            <?php echo form_label('pinfo'. lang('bf_form_label_required'), 'visits_pinfo', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="visits_pinfo" type="text" name="visits_pinfo" maxlength="255" value="<?php echo set_value('visits_pinfo', isset($visits['visits_pinfo']) ? $visits['visits_pinfo'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('visits_pinfo'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('visits_file') ? 'error' : ''; ?>">
            <?php echo form_label('file'. lang('bf_form_label_required'), 'visits_file', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="visits_file" type="text" name="visits_file" maxlength="255" value="<?php echo set_value('visits_file', isset($visits['visits_file']) ? $visits['visits_file'] : ''); ?>"  />
        <span class="help-inline"><?php echo form_error('visits_file'); ?></span>
        </div>


        </div>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit visits" />
            or <?php echo anchor(SITE_AREA .'/content/visits', lang('visits_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Visits.Content.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php echo lang('visits_delete_confirm'); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('visits_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
