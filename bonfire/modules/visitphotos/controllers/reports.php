<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class reports extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('VisitPhotos.Reports.View');
		$this->load->model('visitphotos_model', null, true);
		$this->lang->load('visitphotos');
		
		Template::set_block('sub_nav', 'reports/_sub_nav');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->visitphotos_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('visitphotos_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('visitphotos_delete_failure') . $this->visitphotos_model->error, 'error');
				}
			}
		}

		$records = $this->visitphotos_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage VisitPhotos');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a VisitPhotos object.
	*/
	public function create()
	{
		$this->auth->restrict('VisitPhotos.Reports.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_visitphotos())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('visitphotos_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'visitphotos');

				Template::set_message(lang('visitphotos_create_success'), 'success');
				Template::redirect(SITE_AREA .'/reports/visitphotos');
			}
			else
			{
				Template::set_message(lang('visitphotos_create_failure') . $this->visitphotos_model->error, 'error');
			}
		}
		Assets::add_module_js('visitphotos', 'visitphotos.js');

		Template::set('toolbar_title', lang('visitphotos_create') . ' VisitPhotos');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of VisitPhotos data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('visitphotos_invalid_id'), 'error');
			redirect(SITE_AREA .'/reports/visitphotos');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('VisitPhotos.Reports.Edit');

			if ($this->save_visitphotos('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('visitphotos_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'visitphotos');

				Template::set_message(lang('visitphotos_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('visitphotos_edit_failure') . $this->visitphotos_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('VisitPhotos.Reports.Delete');

			if ($this->visitphotos_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('visitphotos_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'visitphotos');

				Template::set_message(lang('visitphotos_delete_success'), 'success');

				redirect(SITE_AREA .'/reports/visitphotos');
			} else
			{
				Template::set_message(lang('visitphotos_delete_failure') . $this->visitphotos_model->error, 'error');
			}
		}
		Template::set('visitphotos', $this->visitphotos_model->find($id));
		Assets::add_module_js('visitphotos', 'visitphotos.js');

		Template::set('toolbar_title', lang('visitphotos_edit') . ' VisitPhotos');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_visitphotos()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
	private function save_visitphotos($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['id'] = $id;
		}

		
		$this->form_validation->set_rules('visitphotos_property_id','Property ID','required|trim|xss_clean|max_length[50]');
		$this->form_validation->set_rules('visitphotos_prop_photo','Property Photo','trim|xss_clean');
		$this->form_validation->set_rules('visitphotos_prop_photo_info','Photo Information','max_length[255]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['visitphotos_property_id']        = $this->input->post('visitphotos_property_id');
		$data['visitphotos_prop_photo']        = $this->input->post('visitphotos_prop_photo');
		$data['visitphotos_prop_photo_info']        = $this->input->post('visitphotos_prop_photo_info');

		if ($type == 'insert')
		{
			$id = $this->visitphotos_model->insert($data);

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
			$return = $this->visitphotos_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}