<?php 

class admin_model extends CI_Model
{
	#...Create category
	public function create_category()
	{
		$data = array(

		'category' => $this->input->post('category'),
		'description' => $this->input->post('description'),
		'tag' => $this->input->post('tag')

		);

		$insert_ctg = $this->db->insert('category', $data);
		return $insert_ctg;
	}

	#...Display all category
	public function get_category()
	{
		$query = $this->db->get('category');
		return $query->result();
	}

	#...Display category details
	public function get_ctg_detail($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('category');
		return $query->row();
	}

	#...Edit category
	public function edit_category($id, $data)
	{
		$data = array(

		'category' => $this->input->post('category'),
		'description' => $this->input->post('description'),
		'tag' => $this->input->post('tag')

		);

		return $query = $this->db->where('id', $id)->update('category', $data);
	}

	#...Delete category
	public function delete_category($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('category');
		
	}

	#...Display all user
	public function get_users()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

	#...Add user
	public function add_user()
	{

		$options = ['cost'=> 12];
		$encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

		'name'	=> $this->input->post('name'),
		'contact'	=> $this->input->post('contact'),
		'email'	=> $this->input->post('email'),
		'address'	=> $this->input->post('address'),
		'city'	=> $this->input->post('city'),
		'password' => $encripted_pass,
		'type' => $this->input->post('type')

		);

		$insert_user = $this->db->insert('users', $data);
		return $insert_user;

	}

	#...Delete User
	public function delete_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
		
	}

	#...Add books
	public function add_books()
	{
		$data = $this->upload->data();
		$image_path = base_url("uploads/image/".$data['raw_name'].$data['file_ext']);
		
		$data = array(
			'book_name' => $this->input->post('book_name'),
			'description' => $this->input->post('description'),
			'author' => $this->input->post('author'),
			'publisher' => $this->input->post('publisher'),
			'price' => $this->input->post('price'),
			'quantity' => $this->input->post('quantity'),
			'categoryId' => $this->input->post('categoryId'),
			'book_image' => $image_path,
			'userId' => $this->session->userdata('id'),
			'status' => $this->input->post('status')
		);

		$insert_book = $this->db->insert('books', $data);
		return $insert_book;
	}

	#...Display all books
	public function get_books($limit, $offset)
	{	
		/*=== SQL join ===*/
		$this->db->select('books.id, books.book_name, books.description, books.author, books.publisher, books.quantity, books.price, books.book_image, category.category, users.name');

		$this->db->from('books');
		$this->db->join('category', 'books.categoryId = category.id');
		$this->db->join('users', 'books.userId = users.id'); // Join 3rd table

		$this->db->order_by('books.id', 'DESC');
		$this->db->where('books.status', '1');
		$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query->result();
	}
	#...For pagination
	public function num_rows_admin_books()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('books', 'books.categoryId = category.id');

		$this->db->order_by('books.id', 'DESC');
		$this->db->where('books.status', '1');
		$query = $this->db->get();
		return $query->num_rows();
	}
	#...For count total books
	public function count_total_books()
	{
		$this->db->where('status', '1');
		$query = $this->db->get('books');
		return $query->result();
	}

	#...Display book details
	public function get_book_detail($id)
	{
		/*=== SQL join ===*/
		$this->db->select('books.*, users.name, category.category');
		$this->db->from('books');
		$this->db->join('category', 'books.categoryId = category.id');
		$this->db->join('users', 'books.userId = users.id'); // Join 3rd table

		$this->db->where('books.id', $id);
		$query = $this->db->get();
		return $query->row();		
	}

	#...Edit book info
	public function edit_book($id, $data)
	{
		$data = $this->upload->data();
		$image_path = base_url("uploads/image/".$data['raw_name'].$data['file_ext']);
		
		$data = array(
			'book_name' => $this->input->post('book_name'),
			'description' => $this->input->post('description'),
			'author' => $this->input->post('author'),
			'publisher' => $this->input->post('publisher'),
			'price' => $this->input->post('price'),
			'quantity' => $this->input->post('quantity'),
			'categoryId' => $this->input->post('categoryId'),
			'book_image' => $image_path,
			'userId' => $this->session->userdata('id'),
			'status' => $this->input->post('status')
		);

		return $query = $this->db->where('id', $id)->update('books', $data);
	}

	#...Delete book
	public function delete_book($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('books');
	}


	#...Get pending books
	public function pending_books()
	{	
		/*=== SQL join ===*/
		$this->db->select('books.*, users.name, category.category');
		$this->db->from('books');
		$this->db->join('category', 'books.categoryId = category.id');
		$this->db->join('users', 'books.userId = users.id'); //Join 3rd table

		$this->db->order_by('books.id', 'DESC');
		$this->db->where('books.status', '0');
		$query = $this->db->get();
		return $query->result();
	}

	#...Published books
	public function published_books($id, $data)
	{
		
		$data = array(
			'status' => 1
		);

		return $query = $this->db->where('id', $id)->update('books', $data);
	}

	#...Get all orders
	public function get_orders()
	{
		$this->db->order_by('orderId', 'DESC');
		$query = $this->db->get('orders');
		return $query->result();
	}

	#...Get order details
	public function get_order_detail($orderId)
	{
		$this->db->select('orders.*, users.name , books.book_name');
		$this->db->from('orders');
		$this->db->join('users', 'orders.userId = users.id');
		$this->db->join('books', 'orders.bookId = books.id');
		$this->db->where('orders.orderId', $orderId);
		$query = $this->db->get();
		return $query->row();
	}

	#...Accept orders
	public function accept_order($orderId, $data)
	{
		
		$data = array(
			'status' => 1
		);

		return $query = $this->db->where('orderId', $orderId)->update('orders', $data);
	}

	#...Delete order
	public function delete_order($orderId)
	{
		$this->db->where('orderId', $orderId);
		$this->db->delete('orders');
	}

	/*==== E-Book ====*/
	#...Add E-books
	public function add_ebooks()
	{
		$data = $this->upload->data();
		$file_path = base_url("uploads/file/".$data['raw_name'].$data['file_ext']);
		
		$data = array(
			'ebook_name' => $this->input->post('ebook_name'),
			'description' => $this->input->post('description'),
			'author' => $this->input->post('author'),
			'categoryId' => $this->input->post('categoryId'),
			'book_file' => $file_path
		);

		$insert_ebook = $this->db->insert('ebooks', $data);
		return $insert_ebook;
	}

	#...Get all e-books
	public function get_ebooks()
	{	
		/*=== SQL join ===*/
		$this->db->select('ebooks.*, category.category');
		$this->db->from('ebooks');
		$this->db->join('category', 'ebooks.categoryId = category.id');

		$this->db->order_by('ebooks.id', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	#...Get E-book details
	public function get_ebook_detail($id)
	{
		/*=== SQL join ===*/
		$this->db->select('ebooks.*, category.category');
		$this->db->from('ebooks');
		$this->db->join('category', 'ebooks.categoryId = category.id');

		$this->db->where('ebooks.id', $id);
		$query = $this->db->get();
		return $query->row();		
	}

	#...Delete order
	public function delete_ebook($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('ebooks');
	}

	#...Get all orders ready to deliver
	public function get_orders_to_deliver()
	{
		$this->db->order_by('orderId', 'DESC');
		$this->db->where('status', '1');
		$query = $this->db->get('orders');
		return $query->result();
	}
	#...Confirm order delivery
	public function confirm_delivery($orderId, $data)
	{
		
		$data = array(
			'del_status' => 1
		);

		return $query = $this->db->where('orderId', $orderId)->update('orders', $data);
	}

	#...cencle order delivery
	public function cancle_delivery($orderId, $data)
	{
		
		$data = array(
			'del_status' => 0
		);

		return $query = $this->db->where('orderId', $orderId)->update('orders', $data);
	}


}