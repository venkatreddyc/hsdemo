<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class reports extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Property.Reports.View');
		$this->load->model('property_model', null, true);
		$this->lang->load('property');
		
		Template::set_block('sub_nav', 'reports/_sub_nav');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		$this->load->model('Gallery_model');
		
                /*
                 * 
		if ($this->input->post('upload')) {
			$this->Gallery_model->do_upload();
		}
                 
                 */
		
		$data['images'] = $this->Gallery_model->get_images();
		
		$this->load->view('reports/gallery', $data);
                
                // Upload Gallery
                if (isset($_POST['upload'])){
                     echo "Image path : ";
                    echo '$this->gallery_path';
                    $this->Gallery_model->do_upload();
                    $data['images'] = $this->Gallery_model->get_images();
                    $this->load->view('reports/index', $data);
                }
            
            
		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->property_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('property_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('property_delete_failure') . $this->property_model->error, 'error');
				}
			}
		}

            /*    $user = $current_user->username;
                
                $roleid = $this->auth->role_id; */
                
                $records = $this->property_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage property');
		Template::render();
                
                
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a property object.
	*/
	public function create()
	{
		$this->auth->restrict('Property.Reports.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_property())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('property_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'property');

				Template::set_message(lang('property_create_success'), 'success');
				Template::redirect(SITE_AREA .'/reports/property');
			}
			else
			{
				Template::set_message(lang('property_create_failure') . $this->property_model->error, 'error');
			}
		}
		Assets::add_module_js('property', 'property.js');

		Template::set('toolbar_title', lang('property_create') . ' property');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of property data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('property_invalid_id'), 'error');
			redirect(SITE_AREA .'/reports/property');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Property.Reports.Edit');

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
                else if (isset($_POST['edit']))
                {
                   redirect(SITE_AREA .'/reports/property/view/'. $record->pid); 
                }
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Property.Reports.Delete');

			if ($this->property_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('property_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'property');

				Template::set_message(lang('property_delete_success'), 'success');

				redirect(SITE_AREA .'/reports/property');
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

	public function view()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('property_invalid_id'), 'error');
			redirect(SITE_AREA .'/reports/property');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Property.Reports.Edit');

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
			$this->auth->restrict('Property.Reports.Delete');

			if ($this->property_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('property_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'property');

				Template::set_message(lang('property_delete_success'), 'success');

				redirect(SITE_AREA .'/reports/property');
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


        
        
        //--------------------------------------------------------------------


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
        
	private function save_property($type='insert', $id=0)
	{
            
           
            
		if ($type == 'update') {
			$_POST['pid'] = $id;
		}

		$this->form_validation->set_rules('property_username','username','required|trim|xss_clean|max_length[25]');
		$this->form_validation->set_rules('property_address','address','required|trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('property_location','location','required|trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('property_info','info','required|trim|xss_clean|max_length[255]');
                
		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['property_username']        = $this->input->post('property_username');
		$data['property_address']        = $this->input->post('property_address');
		$data['property_location']        = $this->input->post('property_location');
		$data['property_info']        = $this->input->post('property_info');
		$data['property_file']        = $this->input->post('property_file');
                

		if ($type == 'insert')
		{
			$id = $this->property_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			} else
			{
				$return = FALSE;
			}
		}
		else if ($type == 'update')
		{
			$return = $this->property_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------
        
        
        
}