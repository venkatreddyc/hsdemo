<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Property_model extends BF_Model {

	protected $table		= "property";
	protected $key			= "pid";
	protected $soft_deletes	= false;
	protected $date_format	= "datetime";
	protected $set_created	= false;
	protected $set_modified = false;
        
        function doUploadImage(){
            
        }
}
