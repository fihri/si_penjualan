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

    public function widgets() 
    {
        $data['title'] = 'Widget Penjualan';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('widgets');
        $this->load->view('template/script');
    }

    public function charts()  
    {
        $data['title'] = 'Charts Penjualan';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('charts');
        $this->load->view('template/script');
    }

    public function elements()
    {
        $data['title'] = 'UI Element Penjualan';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('elements');
        $this->load->view('template/script');
    }

    public function panel()
    {
        $data['title'] = 'Alert & Panel Penjualan';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('panels');
        $this->load->view('template/script');
    }
}

/* End of file  */
/* Location: ./application/controllers/ */