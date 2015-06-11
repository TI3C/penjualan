<?php
	
	/**
	* 
	*/
	class M_barang extends CI_Model
	{
		//ini buat fungsi model insert
		function insert_barang($db_query){
				$simpan =$this->db->insert('tblbarang', $db_query);
				return $simpan;	
		}

		function chose_barang($id){
			$tampil = $this->db->get_where('tblbarang', array('kd_barang'=>$id));
			return $tampil->first_row("array");
		}

		function view_barang(){
			$this->db->select()->from('tblbarang');
			$query=$this->db->get();
			return $query->result_array();
		}

		function UploadImage($fupload_name)
		{
			$config['upload_path'] = './upload';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			//$config['max_width']  = '1024';
			//$config['max_height']  = '768';
			$config['file_name']  = $fupload_name;
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if ( ! $this->upload->do_upload('fupload')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				
				}
		}

		function delete_barang($kd_barang){
			$query=$this->db->query("DELETE FROM tblbarang WHERE kd_barang='$kd_barang'");
		}

		function update_barang($db_query, $kd_barang){
			$this->db->where('kd_barang', $kd_barang);
			$db=$this->db->update('tblbarang', $db_query);
			return $db; 
		}

		function tampil_update($id){
			$tampil=$this->db->get_where('tblbarang', array('kd_barang' =>$id));
			return $tampil->result_array();
		}


		function beli_barang($db_query){
			if(isset($_POST['proses_beli'])){
				$id=$this->session->userdata('id_user');

			}
		}

		function create_id(){
			$tgl = date("ymd");
			$total = $this->db->count_all("tblorder")+1;

			$id = $tgl.sprintf("%03s", $total);

			return $id;
		}

		function insert_order($array){
			$this->db->insert('tblorder', $array);
		}

		function insert_deorder($array){
			$this->db->insert('tbldetailorder', $array);
		}

		function tampil_stok($id){
			$stok = $this->db->get_where('tblbarang', array('kd_barang'=>$id));
			return $stok->first_row("array"); 
		}

		function update_stock($kd_barang, $kurang ){
			$this->db->where('kd_barang', $kd_barang);
			$this->db->update('tblbarang', $kurang);
		}
	}

?>