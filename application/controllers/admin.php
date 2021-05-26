<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$type = $this->session->userdata('type');
		if($type != 'A')
		{
			$this->session->set_flashdata('no_access', '<i class="fas fa-exclamation-triangle"></i> You are not allowed or not logged in! Please Log in with an admin account');
			redirect('users/login');
		}

		/*=== Load the cart library ===*/
		$this->load->library('cart');
		
	}

/*=============== Admin Index Page =================*/
	public function index()
	{
		$this->load->model('admin_model');
		
		$view['admin_view'] = "admin/admin_index";
		$this->load->view('layouts/admin_layout', $view);
	}
/*======================================================
					CATEGORY
========================================================*/

/*============= Category && Category List Page =========*/
	public function category()
	{
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();

		$view['admin_view'] = "admin/category";
		$this->load->view('layouts/admin_layout', $view);
	}

/*============ Category Create page =====================*/
	public function add_category()
	{
		$this->form_validation->set_rules('category', 'Category name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('tag', 'Category tag', 'trim|required|alpha|strip_tags[tag]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|strip_tags[description]');

		if($this->form_validation->run() == FALSE)
		{
			$view['admin_view'] = "admin/add_category";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$this->load->model('admin_model');
			if($this->admin_model->create_category())
			{
				$this->session->set_flashdata('success', 'Category created successfully');
				redirect('admin/category');
			}
			else
			{
				print $this->db->error();
			}
		}

	}

/*================ Category Detail display page ================*/
	public function ctg_view($id)
	{
		$this->load->model('admin_model');
		$view['ctg_detail'] = $this->admin_model->get_ctg_detail($id);

		if($this->admin_model->get_ctg_detail($id))
		{
			$view['admin_view'] = "admin/ctg_view";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}

	}

/*================ Category Edit || Update ================*/
	public function ctg_edit($id)
	{
		/* For geting the existing info...*/
		$this->load->model('admin_model');
		$view['ctg_detail'] = $this->admin_model->get_ctg_detail($id);

		$this->form_validation->set_rules('category', 'Category name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('tag', 'Category tag', 'trim|required|alpha|strip_tags[tag]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|strip_tags[description]');


		if($this->form_validation->run() == FALSE)
		{
			if($this->admin_model->get_ctg_detail($id))
			{
				$view['admin_view'] = "admin/ctg_edit";
				$this->load->view('layouts/admin_layout', $view);
			}
			else
			{
				$view['admin_view'] = "temp/404page";
				$this->load->view('layouts/admin_layout', $view);
			}

		}
		else
		{
			$this->load->model('admin_model');
			if($this->admin_model->edit_category($id, $data))
			{
				$this->session->set_flashdata('success', 'Category Updated successfully');
				redirect('admin/category');
			}
			else
			{
				print $this->db->error();
			}
		}
	}

/*=============== Delete Category =================*/
	public function ctg_delete($id)
	{
		$this->load->model('admin_model');
		$this->admin_model->delete_category($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Category deleted successfully');
		redirect('admin/category');
	}



/*==================================================
					USERS
====================================================*/

/*============= Display all Users ================*/
	public function allUsers()
	{
		$this->load->model('admin_model');
		$view['users_data'] = $this->admin_model->get_users();

		$view['admin_view'] = "admin/view_users";
		$this->load->view('layouts/admin_layout', $view);
	}
/*=============== ADD Users By admin ===============*/
	public function add_users()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|alpha_dash|min_length[3]');
		$this->form_validation->set_rules('repassword', 'Confirm Password','trim|required|alpha_dash|min_length[3]|matches[password]');
		$this->form_validation->set_rules('type', 'Type','trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|max_length[80]|strip_tags[address]');
		$this->form_validation->set_rules('city', 'City', 'trim|required|alpha_numeric_spaces');


		if($this->form_validation->run() == FALSE)
		{
			$view['admin_view'] = "admin/add_users";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$this->load->model('admin_model');

			if($this->admin_model->add_user())
			{
				$this->session->set_flashdata('success', 'User Registration is successfull');
				redirect('admin/allUsers');
			}
			else
			{
				print $this->db->error();
			}

		}
	}
/*=============== Delete User =================*/
	public function user_delete($id)
	{
		$this->load->model('admin_model');
		$this->admin_model->delete_user($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> User deleted successfully');
		redirect('admin/allUsers');
	}


/*=============================================
					BOOKS
===============================================*/
/*================ Books &&  All Books list page ===============*/
	public function books()
	{
		$this->load->model('admin_model');
		$this->load->library('pagination');
		$config = [

			'base_url' => base_url('admin/books'),
			'per_page' => 10,
			'total_rows'=>  $this->admin_model->num_rows_admin_books(),
			'full_tag_open' => "<ul class='custom-pagination'>",
			'full_tag_close' => "</ul>", 
			'first_tag_open' => '<li>',
			'first_tag_close' => '</li>',
			'last_tag_open' => '<li>',
			'last_link'=>'last',
			'last_tag_close' => '</li>',
			'next_tag_open' => '<li>',
			'next_tag_close' => '</li>',
			'prev_tag_open' => '<li>',
			'prev_tag_close' => '</li>',
			'cur_tag_open' => "<li class = 'active'><a>",
			'cur_tag_close' => '</a></li>',
		];
		$this->pagination->initialize($config);


		$this->load->model('admin_model');
		$view['books'] = $this->admin_model->get_books($config['per_page'], $this->uri->segment(3));

		$view['admin_view'] = "admin/books";
		$this->load->view('layouts/admin_layout', $view);
	}

/*================ Add Books Page =================*/
	public function add_books()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		/*==== Image Upload validation*/
		$config = [
			'upload_path'=>'./uploads/image/',
			'allowed_types'=>'jpg|png',
			'max_size' => '400',
			'overwrite' => FALSE
			];

		$this->load->library('upload', $config);

		$this->form_validation->set_rules('book_name', 'Book name', 'trim|required|strip_tags[book_name]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[100]|strip_tags[description]');
		$this->form_validation->set_rules('author', 'Author name', 'trim|required|strip_tags[author]');
		$this->form_validation->set_rules('publisher', 'Publisher name', 'trim|required|strip_tags[publisher]');
		$this->form_validation->set_rules('price', 'Price', 'trim|required|strip_tags[price]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|numeric|strip_tags[quantity]');
		$this->form_validation->set_rules('categoryId', 'Category', 'trim|required');


		if(($this->form_validation->run() && $this->upload->do_upload()) == FALSE)
		{

			$view['admin_view'] = "admin/add_books";
			$this->load->view('layouts/admin_layout', $view);

		}
		else
		{
			$this->load->model('admin_model');

			if($this->admin_model->add_books())
			{
				$this->session->set_flashdata('success', 'Book added successfully');
				redirect('admin/books');
			}
			else
			{
				print $this->db->error();
			}

		}
	}

	public function book_view($id)
	{
		$this->load->model('admin_model');
		$view['book_detail'] = $this->admin_model->get_book_detail($id);

		if($this->admin_model->get_book_detail($id))
		{
			$view['admin_view'] = "admin/book_view";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}
	}

	public function book_edit($id)
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/
		/* For geting the existing info...*/
		$this->load->model('admin_model');
		$view['book_detail'] = $this->admin_model->get_book_detail($id);

		/*==== Image Upload validation*/
		$config = [
			'upload_path'=>'./uploads/image/',
			'allowed_types'=>'jpg|png',
			'max_size' => '400',
			'overwrite' => TRUE
			];

		$this->load->library('upload', $config);

		$this->form_validation->set_rules('book_name', 'Book name', 'trim|required|strip_tags[book_name]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[100]|strip_tags[description]');
		$this->form_validation->set_rules('author', 'Author name', 'trim|required|strip_tags[author]');
		$this->form_validation->set_rules('publisher', 'Publisher name', 'trim|required|strip_tags[publisher]');
		$this->form_validation->set_rules('price', 'Price', 'trim|required|alpha_numeric_spaces|strip_tags[price]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'trim|required|numeric|strip_tags[quantity]');
		$this->form_validation->set_rules('categoryId', 'Category', 'trim|required');


		if(($this->form_validation->run() && $this->upload->do_upload()) == FALSE)
		{

			if($this->admin_model->get_book_detail($id))
			{
				$view['admin_view'] = "admin/book_edit";
				$this->load->view('layouts/admin_layout', $view);
			}
			else
			{
				$view['admin_view'] = "temp/404page";
				$this->load->view('layouts/admin_layout', $view);
			}

		}
		else
		{
			$this->load->model('admin_model');

			if($this->admin_model->edit_book($id, $data))
			{
				$this->session->set_flashdata('success', 'Book info update successfully');
				redirect('admin/books');
			}
			else
			{
				print $this->db->error();
			}

		}
	}

	public function book_delete($id)
	{
		$this->load->model('admin_model');
		$this->admin_model->delete_book($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Book deleted successfully');
		redirect('admin/books');
	}
	
	/*======Pending Books =======*/
	public function pending_books()
	{
		$this->load->model('admin_model');
		$view['books'] = $this->admin_model->pending_books();

		$view['admin_view'] = "admin/pending_books";
		$this->load->view('layouts/admin_layout', $view);
	}

	public function published_books($id)
	{
		$this->load->model('admin_model');
		if($this->admin_model->published_books($id, $data))
		{
			$this->session->set_flashdata('success','Book published successfully');
			redirect('admin/books');
		}
	}
	public function delete_pending_books($id)
	{
		$this->load->model('admin_model');
		$this->admin_model->delete_book($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Book deleted successfully');
		redirect('admin/pending_books');
	}

	#...Display all orders
	public function orders()
	{
		$this->load->model('admin_model');
		$view['orders'] = $this->admin_model->get_orders();

		$view['admin_view'] = "admin/display_orders";
		$this->load->view('layouts/admin_layout', $view);
	}

	#...Display Order Details
	public function order_view($orderId)
	{
		$this->load->model('admin_model');
		$view['order_detail'] = $this->admin_model->get_order_detail($orderId);

		if($this->admin_model->get_order_detail($orderId))
		{
			$view['admin_view'] = "admin/order_detail";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}
		
	}

	#...Accepting order
	public function accept_order($orderId)
	{
		$this->load->model('admin_model');
		if($this->admin_model->accept_order($orderId, $data))
		{
			$this->session->set_flashdata('success','Order number '.$this->uri->segment(3).' is accepted');
			redirect('admin/order_view/'.$this->uri->segment(3).'');
		}
	}

	#...Deleting orders
	public function delete_order($orderId)
	{
		$this->load->model('admin_model');
		$this->admin_model->delete_order($orderId);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> Order number '.$this->uri->segment(3).' is deleted');
		redirect('admin/orders');
	}


	/*======== E-BOOK ======*/

	public function add_ebooks()
	{
		/*=== LOAD DYNAMIC CATAGORY ===*/
		$this->load->model('admin_model');
		$view['category'] = $this->admin_model->get_category();
		/*==============================*/

		#...File Upload validation
		$config = [
			'upload_path'=>'./uploads/file/',
			'allowed_types'=>'pdf',
			'max_size' => '100000',
			'overwrite' => FALSE
			];
			

		$this->load->library('upload', $config);

		$this->form_validation->set_rules('ebook_name', 'Book name', 'trim|required|strip_tags[book_name]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[100]|strip_tags[description]');
		$this->form_validation->set_rules('author', 'Author name', 'trim|required|alpha_numeric_spaces|strip_tags[author]');
		
		$this->form_validation->set_rules('categoryId', 'Category', 'trim|required');


		if(($this->form_validation->run() && $this->upload->do_upload()) == FALSE)
		{

			$view['admin_view'] = "admin/add_ebooks";
			$this->load->view('layouts/admin_layout', $view);

		}
		else
		{
			$this->load->model('admin_model');

			if($this->admin_model->add_ebooks())
			{
				$this->session->set_flashdata('success', 'E-Book added successfully');
				redirect('admin/ebooks');
			}
			else
			{
				print $this->db->error();
			}

		}

	}

	public function ebooks()
	{
		$this->load->model('admin_model');
		$view['ebooks'] = $this->admin_model->get_ebooks();

		$view['admin_view'] = "admin/ebooks";
		$this->load->view('layouts/admin_layout', $view);
	}

	public function ebook_view($id)
	{
		$this->load->model('admin_model');
		$view['ebook_detail'] = $this->admin_model->get_ebook_detail($id);

		if($this->admin_model->get_ebook_detail($id))
		{
			$view['admin_view'] = "admin/ebook_view";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}
		
	}

	#...Deleting e-books
	public function delete_ebook($id)
	{
		$this->load->model('admin_model');
		$this->admin_model->delete_ebook($id);

		$this->session->set_flashdata('success', '<i class= "fas fa-trash text-danger"></i> E-Book deleted successfully.');
		redirect('admin/ebooks');
	}

	public function ready_to_deliver()
	{
		$this->load->model('admin_model');
		$view['orders'] = $this->admin_model->get_orders_to_deliver();

		$view['admin_view'] = "admin/ready_to_deliver";
		$this->load->view('layouts/admin_layout', $view);
	}

	public function delivery_details($orderId)
	{
		$this->load->model('admin_model');
		$view['order_detail'] = $this->admin_model->get_order_detail($orderId);

		if($this->admin_model->get_order_detail($orderId))
		{
			$view['admin_view'] = "admin/delivery_details";
			$this->load->view('layouts/admin_layout', $view);
		}
		else
		{
			$view['admin_view'] = "temp/404page";
			$this->load->view('layouts/admin_layout', $view);
		}
	}

	#...Confirm delivery
	public function confirm_delivery($orderId)
	{
		$this->load->model('admin_model');
		if($this->admin_model->confirm_delivery($orderId, $data))
		{
			$this->session->set_flashdata('success','Order number '.$this->uri->segment(3).' is delivered successfully');
			redirect('admin/ready_to_deliver');
		}
	}

	public function cancle_delivery($orderId)
	{
		$this->load->model('admin_model');
		if($this->admin_model->cancle_delivery($orderId, $data))
		{
			$this->session->set_flashdata('success','Order number '.$this->uri->segment(3).' is cancled.');
			redirect('admin/ready_to_deliver');
		}
	}



}
