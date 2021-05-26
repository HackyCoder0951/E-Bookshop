<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		/*=== Load the cart library ===*/
		$this->load->library('cart');
	}

	public function index()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		/*=== Recent Books ===*/
		$this->load->model('user_model');
		$view['books'] = $this->user_model->recent_books();

		/*=== CSE Books ===*/
		$this->load->model('user_model');
		$view['cse_books'] = $this->user_model->cse_books();

		$this->load->view('layouts/home_layout', $view);
	}
}
