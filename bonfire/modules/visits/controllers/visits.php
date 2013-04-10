<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class visits extends Front_Controller {

	//--------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('visits_model', null, true);
		$this->lang->load('visits');
		
			Assets::add_css('flick/jquery-ui-1.8.13.custom.css');
			Assets::add_js('jquery-ui-1.8.13.min.js');
	}

	//--------------------------------------------------------------------



	/*
		Method: index()

		Displays a list of form data.
	*/
	public function index()
	{

		$records = $this->visits_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------




}