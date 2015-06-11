<?php
	class M_Produk extends CI_Model
	{
		function insert_produk()
		{
		if(isset($_POST['save'])){
			$input_barang=array
			(
				'Kode_Produk' => $this->input->post('kode_produk'),
				'Nama_Produk' => $this->input->post('nama_produk'),
				'Warna' => $this->input->post('warna'),
				'Stok' => $this->input->post('stok'),
				'Picture' => $this->input->post('picture'),
			);
			$save=$this->db->insert('data_produk',$input_produk);
			return $save;
			}
		}
		
		function view(){
			$this->db->select()->from('data_produk');
			$query=$this->db->get();
			return $query->result_array();
		}
		
		function update_produk($kode_produk,$data)
		{
			$this->db->where('kode_produk',$kode_produk);
			$this->db->update('data_produk',$data);
		}
		
		function delete_produk($kode_produk,$data)
		{
			$this->db->where('kode_produk',$kode_produk);
			$this->db->delete('data_produk');
		}
		
		function get_produk($kode_produk)
		{
			$this->db->select()->from('data_produk')->where(array('kode_produk'=>$kode_produk)); 
			$query=$this->db->get();
			return $query->first_row('array');
		}
	}
?>