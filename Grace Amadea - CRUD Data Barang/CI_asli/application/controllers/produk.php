<?php
	class Produk extends CI_Controller
	{
		function new_produk()
		{
			$this->load->model('m_produk');
			$data=$this->m_produk->insert_produk();
			$this->load->view('form_produk',$data);
		}
	
		function index(){
			$this->load->model('m_produk');
			$data['view']=$this->m_produk->view();
			$this->load->view('daftar_produk',$data);
		}

		function tambah_produk()
		{
			if($_POST)
			{
				$data=array(
					'kode_produk'=>$_POST['kode_produk'],
					'nama_produk'=>$_POST['nama_produk'],
					'warna'=>$_POST['warna'],
					'stok'=>$_POST['stok'],
					'picture'=>$_POST['picture'],
					);
				$this->produk->tambah_produk($data);
				redirect(base_url().'produk');
			}
			else
			{
				$this->load->view('form_produk');
			}
		}
	
		function edit_produk($kode_produk)
		{
			//$user_type=$this->session->userdata('user_type');
			//if(!$this->correct_permission('author'))
			//{
				//redirect(base_url().'users/login');
			//}
			$data['success']=0;
			if($_POST)
			{
				$data_barang=array
				(
					'kode_produk'=>$_POST['kode_produk'],
					'nama_produk'=>$_POST['nama_produk'],
					'warna'=>$_POST['warna'],
					'stok' =>$_POST['stok'],
					'picture'=>$_POST['picture'],
				);
				$this->m_produk->update_produk($kode_produk,$data_produk);
				$data['success']=1;
			}
			$data['data_produk']=$this->m_produk->get_produk($kode_produk);
			
			//$this->load->view('header');
			$this->load->view('edit_produk',$data);
			//$this->load->view('footer');
		}
		
		function delete_produk($kode_produk)
		{
			//$level=$this->session->userdata('level');
			//if($level !="admin")
			//{
				//redirect(base_url().'users/login');
			//}
			$this->m_produk->delete_produk($kode_produk);
			redirect(base_url().'data_produk');
		}
	}
?>