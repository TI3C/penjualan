<?php

	class Member extends CI_Controller
	{
		
		function index(){
			$this->load->view('v_admin');
		}

		function data_member(){
			$this->load->model('m_member');
			$data['view']=$this->m_member->view_member();
			$this->load->view('v_data_member', $data);
		}

		function form_tambah_member(){
			//load view
			$this->load->view('v_form_tambah_member');
			$this->load->model('m_member');
			if (isset($_POST['proses_tambah_member'])) 
				{
					$db_query=array(
					'nama_member'=>$this->input->post('nama'),
					'alamat_member'=>$this->input->post('alamat'),
					'email_member'=>$this->input->post('email'),
					'tlp_member'=>$this->input->post('telp'),
					'username'=>$this->input->post('username'),
					'password'=>$this->input->post('password'),
					'level'=>'2'
					);
					//proses memanggil insert dari model
					$this->db->insert('tblmember', $db_query);
					redirect(base_url().'member/data_member');
				}else{
					echo mysql_error();
				}	
		}

		function update_member($kd_member){
			$this->load->model('m_member');
			$data['view_update']= $this->m_member->tampil_update($kd_member);

			if (isset($_POST['proses_edit_data_member'])) {
				$db_query=array(
					'nama_member'	=>$this->input->post('nama'),
					'alamat_member'	=>$this->input->post('alamat'),
					'email_member'	=>$this->input->post('email'),
					'tlp_member'	=>$this->input->post('telp'),
					'username'		=>$this->input->post('username'),
					'password'		=>$this->input->post('password'),
					);

				$data['update']=$this->m_member->update_member($db_query, $kd_member);
				redirect(base_url().'member/data_member');
			}
			$this->load->view('v_form_edit_data_member',$data);
		}

		function delete_member($kd_member){
			$this->load->model('m_member');
			$this->m_member->delete_member($kd_member);
			redirect(base_url().'member/data_member');
		}

		function form_register(){
			//load view
			$this->load->view('v_form_register');
			$this->load->model('m_member');
			if (isset($_POST['proses_register'])) 
				{
					$db_query=array(
					'nama_member'=>$this->input->post('nama'),
					'alamat_member'=>$this->input->post('alamat'),
					'email_member'=>$this->input->post('email'),
					'tlp_member'=>$this->input->post('telp'),
					'username'=>$this->input->post('username'),
					'password'=>$this->input->post('password'),
					'level'=>'2'
					);
					//proses memanggil insert dari model
					$this->db->insert('tblmember', $db_query);
					$url = base_url();
					echo "<script>alert('Anda sudah terdaftar sebagi member, silahkan sign in.'); window.location = '".$url."barang/view_data_barang_user'</script>";
					//redirect(base_url().'barang/view_data_barang_user');
				}else{
					echo mysql_error();
				}
		}

	}
?>