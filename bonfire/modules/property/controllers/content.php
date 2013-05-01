<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class content extends Admin_Controller {

	public function __construct(){
		parent::__construct();

		$this->auth->restrict('Property.Content.View');
		$this->load->model('property_model', null, true);
		$this->lang->load('property');
		
		Template::set_block('sub_nav', 'content/_sub_nav');
	} // end of __construct method


	/*
		Method: index()
		Displays a list of form data.
	*/
	public function index(){
		// Deleting anything?
		if (isset($_POST['delete']))	{
			$checked = $this->input->post('checked');
			if (is_array($checked) && count($checked)) {
				$result = FALSE;
				foreach ($checked as $pid){
					$result = $this->property_model->delete($pid);
				}

				if ($result){
					Template::set_message(count($checked) .' '. lang('property_delete_success'), 'success');
				} else {
					Template::set_message(lang('property_delete_failure') . $this->property_model->error, 'error');
				}
			} // end if for check
		} // end if for post delete

                $roleid = $this->auth->role_id(); 
                $user_id = $this->auth->user_id(); 
         
                if ($roleid == 4)  {
                    $this->load->model('property/property_model', 'property_model');
                    $records = $this->property_model->find_all_by('userid',$user_id);
                } else {
                    $this->load->model('property/property_model', 'property_model');
                    $records = $this->property_model->find_all();
                } 

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage property');
		Template::render();
	} // end of index method

	/*
		Method: create()
		Creates a property object.
	*/
	public function create(){
		$this->auth->restrict('Property.Content.Create');
		if ($this->input->post('save'))	{
			if ($insert_id = $this->save_property()){
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('property_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'property');
				Template::set_message(lang('property_create_success'), 'success');
				Template::redirect(SITE_AREA .'/content/property');
			} else	{
				Template::set_message(lang('property_create_failure') . $this->property_model->error, 'error');
			}
		}
		Assets::add_module_js('property', 'property.js');
		Template::set('toolbar_title', lang('property_create') . ' property');
		Template::render();
	} // end of create()

	//--------------------------------------------------------------------



	/*
		Method: view()
		Allows editing of property data.
	*/
        
	public function view()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('property_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/property');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Property.Content.Edit');

			if ($this->save_property('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('property_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'property');

				Template::set_message(lang('property_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('property_edit_failure') . $this->property_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Property.Content.Delete');

			if ($this->property_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('property_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'property');

				Template::set_message(lang('property_delete_success'), 'success');

				redirect(SITE_AREA .'/content/property');
			} else
			{
				Template::set_message(lang('property_delete_failure') . $this->property_model->error, 'error');
			}
		}
		Template::set('property', $this->property_model->find($id));
		Assets::add_module_js('property', 'property.js');

		Template::set('toolbar_title', lang('property_edit') . ' property');
		Template::render();
	}
        

        public function edit() {
		$id = $this->uri->segment(5);
		if (empty($id))
		{
			Template::set_message(lang('property_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/property');
		}

		if (isset($_POST['save'])) {
			$this->auth->restrict('Property.Content.Edit');

			if ($this->save_property('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('property_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'property');

				Template::set_message(lang('property_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('property_edit_failure') . $this->property_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Property.Content.Delete');

			if ($this->property_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('property_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'property');

				Template::set_message(lang('property_delete_success'), 'success');

				redirect(SITE_AREA .'/content/property');
			} else
			{
				Template::set_message(lang('property_delete_failure') . $this->property_model->error, 'error');
			}
		}
		Template::set('property', $this->property_model->find($id));
		Assets::add_module_js('property', 'property.js');

		Template::set('toolbar_title', lang('property_edit') . ' property');
		Template::render();
	} // end of edit()
	
	
	
	public function do_upload($field = 'userfile')    {
  
      // Is $_FILES[$field] set? If not, no reason to continue.
          if ( ! isset($_FILES[$field]))
          {
              $this->set_error('upload_no_file_selected');
              return FALSE;
          }
  
          // Is the upload path valid?
          if ( ! $this->validate_upload_path())
          {
              // errors will already be set by validate_upload_path() so just return FALSE
              return FALSE;
          }
  
          // Was the file able to be uploaded? If not, determine the reason why.
          if ( ! is_uploaded_file($_FILES[$field]['tmp_name']))        {
              $error = ( ! isset($_FILES[$field]['error'])) ? 4 : $_FILES[$field]['error'];
              switch($error)  {
                  case 1: // UPLOAD_ERR_INI_SIZE
                      $this->set_error('upload_file_exceeds_limit');
                      break;
                  case 2: // UPLOAD_ERR_FORM_SIZE
                      $this->set_error('upload_file_exceeds_form_limit');
                      break;
                  case 3: // UPLOAD_ERR_PARTIAL
                      $this->set_error('upload_file_partial');
                      break;
                  case 4: // UPLOAD_ERR_NO_FILE
                      $this->set_error('upload_no_file_selected');
                      break;
                  case 6: // UPLOAD_ERR_NO_TMP_DIR
                      $this->set_error('upload_no_temp_directory');
                      break;
                  case 7: // UPLOAD_ERR_CANT_WRITE
                      $this->set_error('upload_unable_to_write_file');
                      break;
                  case 8: // UPLOAD_ERR_EXTENSION
                      $this->set_error('upload_stopped_by_extension');
                      break;
                  default :   $this->set_error('upload_no_file_selected');
                      break;
              }
  
              return FALSE;
          }
  
  
          // Set the uploaded data as class variables
          $this->file_temp = $_FILES[$field]['tmp_name'];
          $this->file_size = $_FILES[$field]['size'];
          $this->_file_mime_type($_FILES[$field]);
          $this->file_type = preg_replace("/^(.+?);.*$/", "\\1", $this->file_type);
          $this->file_type = strtolower(trim(stripslashes($this->file_type), '"'));
          $this->file_name = $this->_prep_filename($_FILES[$field]['name']);
          $this->file_ext  = $this->get_extension($this->file_name);
          $this->client_name = $this->file_name;
  
          // Is the file type allowed to be uploaded?
          if ( ! $this->is_allowed_filetype())
          {
              $this->set_error('upload_invalid_filetype');
              return FALSE;
          }
  
          // if we're overriding, let's now make sure the new name and type is allowed
          if ($this->_file_name_override != '')
          {
              $this->file_name = $this->_prep_filename($this->_file_name_override);
  
              // If no extension was provided in the file_name config item, use the uploaded one
              if (strpos($this->_file_name_override, '.') === FALSE)
              {
                  $this->file_name .= $this->file_ext;
              }
  
              // An extension was provided, lets have it!
              else
              {
                  $this->file_ext  = $this->get_extension($this->_file_name_override);
              }
  
              if ( ! $this->is_allowed_filetype(TRUE))
              {
                  $this->set_error('upload_invalid_filetype');
                  return FALSE;
              }
          }
  
          // Convert the file size to kilobytes
          if ($this->file_size > 0)
          {
              $this->file_size = round($this->file_size/1024, 2);
          }
  
          // Is the file size within the allowed maximum?
          if ( ! $this->is_allowed_filesize())
          {
              $this->set_error('upload_invalid_filesize');
              return FALSE;
          }
  
          // Are the image dimensions within the allowed size?
          // Note: This can fail if the server has an open_basdir restriction.
          if ( ! $this->is_allowed_dimensions())
          {
              $this->set_error('upload_invalid_dimensions');
              return FALSE;
          }
  
          // Sanitize the file name for security
 
 
          $this->file_name = $this->clean_file_name($this->file_name);
  
         // Truncate the file name if it's too long
          if ($this->max_filename > 0)
          {
              $this->file_name = $this->limit_filename_length($this->file_name, $this->max_filename);
          }
  
         // Remove white spaces in the name
          if ($this->remove_spaces == TRUE)
          {
              $this->file_name = preg_replace("/\s+/", "_", $this->file_name);
          }
  
          /*
           * Validate the file name
           * This function appends an number onto the end of
           * the file if one with the same name already exists.
           * If it returns false there was a problem.
           */
          $this->orig_name = $this->file_name;
  
          if ($this->overwrite == FALSE)
          {
              $this->file_name = $this->set_filename($this->upload_path, $this->file_name);
  
              if ($this->file_name === FALSE)
              {
                  return FALSE;
              }
          }
  
          /*
           * Run the file through the XSS hacking filter
           * This helps prevent malicious code from being
           * embedded within a file.  Scripts can easily
           * be disguised as images or other file types.
           */
          if ($this->xss_clean)
          {
              if ($this->do_xss_clean() === FALSE)
              {
                  $this->set_error('upload_unable_to_write_file');
                  return FALSE;
              }
          }
  
          /*
           * Move the file to the final destination
           * To deal with different server configurations
           * we'll attempt to use copy() first.  If that fails
           * we'll use move_uploaded_file().  One of the two should
           * reliably work in most environments
           */
          if ( ! @copy($this->file_temp, $this->upload_path.$this->file_name))
          {
              if ( ! @move_uploaded_file($this->file_temp, $this->upload_path.$this->file_name))
              {
                  $this->set_error('upload_destination_error');
                  return FALSE;
              }
          }
  
          /*
           * Set the finalized image dimensions
           * This sets the image width/height (assuming the
           * file was an image).  We use this information
           * in the "data" function.
           */
          $this->set_image_properties($this->upload_path.$this->file_name);
  
          return TRUE;
      } // end of do_upload()
      
	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_property()
		Does the actual validation and saving of form data.
		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.
		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
      
	private function save_property($type='insert', $id=0) {
		if ($type == 'update') {
			$_POST['pid'] = $id;
		}
		
		$this->form_validation->set_rules('property_username','username','required|trim|xss_clean|max_length[25]');
		$this->form_validation->set_rules('property_address','address','required|trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('property_location','location','required|trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('property_info','info','required|trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('property_file','file','required|trim|xss_clean|max_length[255]');

		if ($this->form_validation->run() === FALSE)	{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['property_username']        = $this->input->post('property_username');
		$data['property_address']        = $this->input->post('property_address');
		$data['property_location']        = $this->input->post('property_location');
		$data['property_info']        = $this->input->post('property_info');
		$data['property_file']        = $this->input->post('property_file');

		if ($type == 'insert')	{
			$id = $this->property_model->insert($data);
			if (is_numeric($id)){
				$return = $id;
			} else	{
				$return = FALSE;
			}
		} else if ($type == 'update'){
			$return = $this->property_model->update($id, $data);
		}

		return $return;
	} // end of save_property()

}