<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class content extends Admin_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Visits.Content.View');
		$this->load->model('visits_model', null, true);
		$this->lang->load('visits');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
		Template::set_block('sub_nav', 'content/_sub_nav');
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
					$result = $this->visits_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('visits_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('visits_delete_failure') . $this->visits_model->error, 'error');
				}
			}
		}

		$records = $this->visits_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage visits');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: create()

		Creates a visits object.
	*/
        
	public function create()
	{
		$this->auth->restrict('Visits.Content.Create');

		if ($this->input->post('save'))
		{
			if ($insert_id = $this->save_visits())
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('visits_act_create_record').': ' . $insert_id . ' : ' . $this->input->ip_address(), 'visits');

				Template::set_message(lang('visits_create_success'), 'success');
				Template::redirect(SITE_AREA .'/content/visits');
			}
			else
			{
				Template::set_message(lang('visits_create_failure') . $this->visits_model->error, 'error');
			}
		}
		Assets::add_module_js('visits', 'visits.js');

		Template::set('toolbar_title', lang('visits_create') . ' visits');
		Template::render();
	}

	//--------------------------------------------------------------------



	/*
		Method: edit()

		Allows editing of visits data.
	*/
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('visits_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/visits');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Visits.Content.Edit');

			if ($this->save_visits('update', $id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('visits_act_edit_record').': ' . $id . ' : ' . $this->input->ip_address(), 'visits');

				Template::set_message(lang('visits_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('visits_edit_failure') . $this->visits_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Visits.Content.Delete');

			if ($this->visits_model->delete($id))
			{
				// Log the activity
				$this->activity_model->log_activity($this->current_user->id, lang('visits_act_delete_record').': ' . $id . ' : ' . $this->input->ip_address(), 'visits');

				Template::set_message(lang('visits_delete_success'), 'success');

				redirect(SITE_AREA .'/content/visits');
			} else
			{
				Template::set_message(lang('visits_delete_failure') . $this->visits_model->error, 'error');
			}
		}
		Template::set('visits', $this->visits_model->find($id));
		Assets::add_module_js('visits', 'visits.js');

		Template::set('toolbar_title', lang('visits_edit') . ' visits');
		Template::render();
	}

	//--------------------------------------------------------------------


	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/*
		Method: save_visits()

		Does the actual validation and saving of form data.

		Parameters:
			$type	- Either "insert" or "update"
			$id		- The ID of the record to update. Not needed for inserts.

		Returns:
			An INT id for successful inserts. If updating, returns TRUE on success.
			Otherwise, returns FALSE.
	*/
        
	private function save_visits($type='insert', $id=0)
	{
		if ($type == 'update') {
			$_POST['vid'] = $id;
		}

		
		$this->form_validation->set_rules('visits_pid','pid','required|trim|xss_clean|max_length[11]');
		$this->form_validation->set_rules('visits_date','date','required|trim|xss_clean');
		$this->form_validation->set_rules('visits_pinfo','pinfo','required|trim|xss_clean|max_length[255]');
		$this->form_validation->set_rules('visits_file','file','required|trim|xss_clean|max_length[255]');

		if ($this->form_validation->run() === FALSE)
		{
			return FALSE;
		}

		// make sure we only pass in the fields we want
		$data = array();
		$data['visits_pid']        = $this->input->post('visits_pid');
		$data['visits_date']        = $this->input->post('visits_date') ? $this->input->post('visits_date') : '0000-00-00';
		$data['visits_pinfo']        = $this->input->post('visits_pinfo');
		$data['visits_file']        = $this->input->post('visits_file');

		if ($type == 'insert')
		{
			$id = $this->visits_model->insert($data);

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
			$return = $this->visits_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------



}