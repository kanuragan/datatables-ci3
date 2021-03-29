<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('WelcomeSystem','model');

    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function get_data() {
		header('Content-Type: application/json');
		echo $this->model->get_datatables();
	}
}
