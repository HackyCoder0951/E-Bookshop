<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
	}

	public function index()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		$view['user_view'] = "users/myCart";
		$this->load->view('layouts/user_layout', $view);
		
	}

	public function add_to_cart($id)
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		/*=== Get Books info from database ===*/
		$this->load->model('admin_model');
		$books = $this->admin_model->get_book_detail($id);

/*=============== Insert Data into cart =============*/
		$data = array(

				'id'=> $books->id,
				'price'=> $books->price,
				'name'=> $books->book_name,
				'book_image'=> $books->book_image,
				'qty'=> 1
		);

		$this->cart->product_name_rules = '[:print:]'; #...For inserting special char
		$this->cart->insert($data);
		
		#...Redirected same page after action
		redirect($_SERVER['HTTP_REFERER']);

	}
/*=============== Update data from cart ============*/
	public function update_cart()
	{
		$this->load->model('admin_model');
		
		$contents = $this->input->post();
		foreach ($contents as $content) 
		{
			$info = array(

			'rowid'=> $content['rowid'],
			'qty' => $content['qty']

			);
			if($content['qty'] < 0)
			{
				$this->session->set_flashdata('cart_error', '<i class="fas fa-exclamation-triangle"></i> Quantity can not be less than 0 or negative value');
			}
			else 
			{
				/* $books = $this->admin_model->get_book_detail($id);

				if($content['qty'] <= $books->quantity)
				{
					
					$this->cart->update($info);
				}
				else
				{
					$this->session->set_flashdata('error', '*This much quantity is not in stock.');
				}*/
				if($content['qty'] > 5 )
				{
					$this->session->set_flashdata('cart_error', '<i class="fas fa-exclamation-triangle"></i> You can not buy more than 5 books at a time');
				}
				else
				{
					$this->cart->update($info);
				}
				
			}
			
		}
			redirect('cart');
	}


/*============== Delete Data from cart ================*/
	public function delete_cart($rowid)
	{
		/*$this->cart->update(array('rowid'=>$rowid, 'qty'=>0));*/
		if($this->cart->remove($rowid))
		{
			$this->session->set_flashdata('remove_cart', 'Book removed from the cart.');
		}
		redirect('cart');
	}


}
