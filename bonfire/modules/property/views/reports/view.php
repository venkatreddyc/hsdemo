
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
    <h3>property</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>
        <div class="control-group <?php echo form_error('property_username') ? 'error' : ''; ?>">
            <?php echo form_label('username'. lang('bf_form_label_required'), 'property_username', array('class' => "control-label") ); ?>
            <div class='controls'>
        
              
        <input id="property_username" type="text" name="property_username" maxlength="25" value="<?php echo set_value('property_username', isset($property['property_username']) ? $property['property_username'] : ''); ?>" readonly  />
        <span class="help-inline"><?php echo form_error('property_username'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('property_address') ? 'error' : ''; ?>">
            <?php echo form_label('address'. lang('bf_form_label_required'), 'property_address', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="property_address" type="text" name="property_address" maxlength="255" value="<?php echo set_value('property_address', isset($property['property_address']) ? $property['property_address'] : ''); ?>"  readonly />
        <span class="help-inline"><?php echo form_error('property_address'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('property_location') ? 'error' : ''; ?>">
            <?php echo form_label('location'. lang('bf_form_label_required'), 'property_location', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="property_location" type="text" name="property_location" maxlength="255" value="<?php echo set_value('property_location', isset($property['property_location']) ? $property['property_location'] : ''); ?>" readonly />
        <span class="help-inline"><?php echo form_error('property_location'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('property_info') ? 'error' : ''; ?>">
            <?php echo form_label('info'. lang('bf_form_label_required'), 'property_info', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="property_info" type="text" name="property_info" maxlength="255" value="<?php echo set_value('property_info', isset($property['property_info']) ? $property['property_info'] : ''); ?>" readonly />
        <span class="help-inline"><?php echo form_error('property_info'); ?></span>
        </div>


        </div>
        <div class="control-group <?php echo form_error('property_file') ? 'error' : ''; ?>">
            <?php echo form_label('file'. lang('bf_form_label_required'), 'property_file', array('class' => "control-label") ); ?>
            <div class='controls'>
        <input id="property_file" type="text" name="property_file" maxlength="255" value="<?php echo set_value('property_file', isset($property['property_file']) ? $property['property_file'] : ''); ?>" readonly />
        <span class="help-inline"><?php echo form_error('property_file'); ?></span>
        </div>


        </div>

        <table border="1" style="background-color:#FFFAFA;border:1px dotted black;width:40%;border-collapse:collapse;">
            <tr>
            <td style="padding:3px;"><b>User Name:</b> &nbsp;</td> 
            <td style="padding:3px;"><?php echo set_value('property_username', isset($property['property_username']) ? $property['property_username'] : ''); ?></td>
            </tr>
            <tr>
            <td style="padding:3px;"><b>Address:</b> &nbsp; </td> 
            <td style="padding:3px;"><?php echo set_value('property_address', isset($property['property_address']) ? $property['property_address'] : ''); ?></td>
            </tr>
            <tr>
            <td style="padding:3px;"><b>Location:</b> &nbsp; </td> 
            <td style="padding:3px;"><?php echo set_value('property_location', isset($property['property_location']) ? $property['property_location'] : ''); ?></td>
            </tr>
            <tr>
            <td style="padding:3px;"><b>Property Info:</b> &nbsp; </td> 
            <td style="padding:3px;"><?php echo set_value('property_info', isset($property['property_info']) ? $property['property_info'] : ''); ?></td>
            </tr>
            <tr>
            <td style="padding:3px;"><b>Property File:</b> &nbsp; </td> 
            <td style="padding:3px;"><?php echo set_value('property_file', isset($property['property_file']) ? $property['property_file'] : ''); ?></td>
            </tr>
            
        </table>
        
        
        
        
        
        
        
        
        
        <div class="form-actions">
            
            <br/>
     
         
        
        
            
        <?php 
        
       echo " <br/>";
        
        $this->load->model('visits/visits_model', 'visits_model');
       
        $visitrecords = $this->visits_model->find_all_by('visits_pid',$property['pid']);
        

        
?>

          
         <h4>Property Visits Info </h4>
         <br/>
 <?php echo form_open($this->uri->uri_string()); ?>
  <table class="table table-striped">
   <thead>
    <tr>
     <th>Property ID</th>
     <th>Visit Date</th>
     <th>Property Info</th>
     
     <th>Visit Photo</th>
    
    </tr>
   </thead>

   <tbody>   
   <?php foreach ($visitrecords as $record) : ?>
    <tr>
     
    <?php if ($this->auth->has_permission('visits.Content.Edit')) : ?>
    <td><?php echo anchor(SITE_AREA .'/content/visits/edit/'. $record->vid, '<i class="icon-pencil">&nbsp;</i>' .  $record->visits_pid) ?></td>
    <?php else: ?>
    <td><?php echo $record->visits_pid ?></td>
    <?php endif; ?>
   
    <td><?php echo $record->visits_date?></td>
  
    <td><?php echo $record->visits_pinfo?></td>
    <td><?php echo $record->visits_file?></td>
   
    </tr>
   <?php endforeach; ?>
    
    </tbody>
            </table>
       
     
             
      
             
            <div class='controls'>

        </div>


        </div>

        </div>
    </fieldset>
    
    
    <?php echo form_close(); ?>


</div>
