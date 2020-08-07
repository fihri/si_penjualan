<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        
	}

	public function index()
	{
        $data['title'] = 'Home Penjualan';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('home');
		$this->load->view('template/script');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */