<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cart_model');
		$this->data['check'] = 0;
	}

	public function index()
	{	
		$this->data['title'] = 'Shopping Carts';

		if (!$this->cart->contents()){
			$this->data['message'] = '<p>Your cart is empty!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');
		}

		$this->load->view('cart', $this->data);
	}

	public function add()
	{
		$this->load->model('Cart_model');
	
		$insert_room = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'stock' => $this->input->post('stock'),
			'qty' => 1
		);		

		$this->cart->insert($insert_room);
			
		redirect('cart');
	}
	
	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		
		redirect('cart');
	}	

	function update_cart(){
 		foreach($_POST['cart'] as $id => $cart)
		{	
			$stock = $cart['stock'];
			$qty = $cart['qty']; 
			if($qty>$stock){
				$this->data['check'] = 1;
			} else{
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			
			$this->Cart_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
			}
		}
		
		$this->data['title'] = 'Shopping Carts';

		if (!$this->cart->contents()){
			$this->data['message'] = '<p>Your cart is empty!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');
		}
		$this->load->view('cart', $this->data);
	}	
}