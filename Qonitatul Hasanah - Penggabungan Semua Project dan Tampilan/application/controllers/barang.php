<?php
	
	/**
	* 
	*/
	class Barang extends CI_Controller
	{
		function index(){
			$this->load->view('v_admin');
		}

		function data_barang(){
			$this->load->model('m_barang');
			$data['view']=$this->m_barang->view_barang();
			$this->load->view('v_data_barang', $data);
		}

		function view_data_barang_user(){
			
			$this->load->model('m_barang');
			$data['view']=$this->m_barang->view_barang();
			$this->load->view('v_member', $data);
		}

		function form_tambah_barang(){
			//load view
			$this->load->view('v_form_tambah_barang');
			$this->load->model('m_barang');
			if (isset($_POST['proses_tambah_barang'])) 
				{
					$nama_file      = $_FILES['fupload']['name'];
					$acak           = rand(1,99);
					$nama_file_unik = $acak.$nama_file;
					$ekstensi      	= pathinfo($nama_file,PATHINFO_EXTENSION);

					$db_query=array(
					'nama_barang'=>$this->input->post('nama_barang'),
					'jenis_kategori'=>$this->input->post('kategori_barang'),
					'harga_barang'=>$this->input->post('harga'),
					'stok_barang'=>$this->input->post('stok_barang'),
					'gambar'=>$nama_file_unik
					);
					//proses memanggil insert dari model
					$data['insert']=$this->m_barang->insert_barang($db_query);
					$this->m_barang->UploadImage($nama_file_unik);
					redirect(base_url().'barang/data_barang');
				}else{
					echo mysql_error();
				}	
		}

		function update_barang($kd_barang){
			
			$this->load->model('m_barang');
			$data['view_update']= $this->m_barang->tampil_update($kd_barang);

				if (isset($_POST['proses_edit_barang'])) 
					{
						$nama_file      = $_FILES['fupload']['name'];
						$acak           = rand(1,99);
						$nama_file_unik = $acak.$nama_file;
						$ekstensi      	= pathinfo($nama_file,PATHINFO_EXTENSION);
						
						$db_query=array(
						'nama_barang'=>$this->input->post('nama_barang'),
						'jenis_kategori'=>$this->input->post('kategori_barang'),
						'harga_barang'=>$this->input->post('harga'),
						'stok_barang'=>$this->input->post('stok_barang'),
						'gambar'=>$nama_file_unik
						);

						$data['update']=$this->m_barang->update_barang($db_query, $kd_barang);
						$this->m_barang->UploadImage($nama_file_unik);
						redirect(base_url().'barang/data_barang');
					}

				$this->load->view('v_form_edit_data_barang',$data);
		}

		function delete_barang($kd_barang){
			$this->load->model('m_barang');
			$this->m_barang->delete_barang($kd_barang);
			redirect(base_url().'barang/data_barang');
		}


		// KERANJANG

		function add_keranjang(){

			$this->load->model('m_barang');

			$id 	= $this->input->post('id');
			$jumlah = $this->input->post('jumlah_barang');
			$harga 	= $this->input->post('harga');
			$nama 	= $this->input->post('nama');
			$status = $this->input->post('status');

			$harga_asli = $jumlah * $harga;

			$sql = $this->m_barang->chose_barang($id);

			$stok = $sql['stok_barang'];

			if($jumlah > $stok){
				echo "Stok Tidak mencukupi kebutuhan";
			}
			else{

			$cart = array(
				'id'      => $id,
				'qty'     => $jumlah,
				'price'   => $harga,
				'name'    => $nama,
				'total_harga' => $harga_asli,
				'status'  => $status
			);

			print_r($cart);
			
			$this->cart->insert($cart);
			redirect(base_url().'barang/view_data_barang_user');
			}
		}

		function keranjang(){
			$keranjang = $this->cart->contents();

			echo "<pre>";
			print_r($keranjang);
		}

		function view_checkout(){
			$this->load->view('v_checkout');
		}

		function clear_cart(){
			$this->cart->destroy();
			redirect(base_url().'barang/view_data_barang_user');
		}


		function penjualan(){
			$this->load->model('m_penjualan');
			$keranjang = $this->cart->contents();


			// cari kode_user di session
			$object = array(
				'kd_penjualan' 		=> NULL,
				'tgl_penjualan' 	=> date('Y-m-d'), 
				'kd_member' 		=> $this->session->userdata('id_user'),
				'status_penjualan'  => "proses"
			);

			$insert_penjualan = $this->m_penjualan->insert_penjualan($object);
		}	

		function beli_barang(){
			$this->load->model('m_barang');
			$id = $this->m_barang->create_id();

			$input = array(
				'kd_order'	=> $id,
				'kd_member' => $this->session->userdata('id_user')
			);

			// print_r($input);

			// $this->m_barang->insert_order($input);

			$keranjang = $this->cart->contents();

			$i=1;
			foreach ($keranjang as $key) {

				$input2 = array(
					"kd_detailorder"	=>$id.$i,
					"kd_order" 			=>$id,
					"kd_barang"			=>$key['id'],
					"jumlah_order"		=>$key['qty'],
					"total_harga"		=>$key['total_harga']
				);

				$stok = $this->m_barang->tampil_stok($key['id']);
				$kurang = $stok['stok_barang']-$key['qty'];

				if($kurang<=0){
					echo "Stok barang tidak memenuhi kriteria, coba anda kurangi";
				}else{
					$ubah = array(
					'stok_barang' => $kurang
					);

					$id_barang = $key['id'];
				
					$this->m_barang->update_stock($id_barang, $ubah);
				}

				

				// $this->m_barang->insert_deorder($input2);


				$i++;
			}
			redirect(base_url().'barang/view_data_barang_user');
			
			// $this->m_barang->insert_order();
			// $this->m_barang->insert_detail_order();
		}

	}

?>