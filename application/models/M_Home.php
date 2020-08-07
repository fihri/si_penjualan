<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Home extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
    }
    
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

}

/* End of file  */
/* Location: ./application/models/ */