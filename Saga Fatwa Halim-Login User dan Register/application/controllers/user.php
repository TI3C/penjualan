<?php

class user extends CI_Controller {

	public function register(){
		$this->load->model('model_user');

		if(isset($_POST['ok'])){
			$id = $this->model_user->create_id();
			$this->model_user->tambah_user($id);
		}

		 $this->load->view('register');
	}

	public function login(){
		$this->load->view('login');
	}

	public function tampil_cek(){
		$this->load->view('cek');
	}

	public function login_admin(){
		$this->load->model('model_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($_POST['ok']){
			$login = $this->model_user->login_admin($username, $password);

			if($login){

				$array = array(
					'username' 	=> $login[0]->userName,
					'id'		=> $login[0]->IdAdmin,
					'status' 	=>'admin'
				);
				
				$this->session->set_userdata( $array );
				//$this->session->set_userdata($object);
				redirect(base_url().'user/tampil_cek');
			}

		}

		
		


		


		
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */