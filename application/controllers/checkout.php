<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('logged_in') == FALSE)
		{
			$this->session->set_flashdata('no_access', '<i class="fas fa-exclamation-triangle"></i> You are not allowed or not logged in! Please Log in.');
			redirect('users/login');
		}

		/*=== Load the cart library ===*/
		$this->load->library('cart');
	}

	public function index()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$this->form_validation->set_rules('name', 'Name', 'trim|required|strip_tags[name]');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|numeric|required|strip_tags[contact]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|strip_tags[email]');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|strip_tags[address]');
		$this->form_validation->set_rules('zipcode', 'Zip code or post code', 'trim|required|numeric|strip_tags[zipcode]');
		$this->form_validation->set_rules('city', 'City', 'trim|required|strip_tags[city]');
		$this->form_validation->set_rules('paymentcheck', 'Payment methods', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			if($this->cart->contents())
			{
				$view['user_view'] = "users/checkout_page";
				$this->load->view('layouts/user_layout', $view);
			}
			else
			{
				$this->session->set_flashdata('cart_error', '<i class="fas fa-exclamation-triangle"></i> You cart is empty! Add books to cart for checkout.');
				redirect('cart');
			}

		}
		else
		{
			$this->load->model('user_model');

			if($this->user_model->add_orders())
			{
				$this->session->set_flashdata('success', 'Your Order placed successfully. Our support team will contact you soon');
				$this->cart->destroy();
				redirect('checkout/place_order');

			}
		}
		
	}

	public function place_order()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$view['user_view'] = "users/place_order_page";
		$this->load->view('layouts/user_layout', $view);
	}


	
}
