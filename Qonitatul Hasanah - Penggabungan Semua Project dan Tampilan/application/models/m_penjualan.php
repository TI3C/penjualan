<?php

class m_penjualan extends CI_Model {

	function insert_penjualan($object){
		$this->db->insert('tblpenjualan', $object);
	}	

	function insert_detail(){
		// $object = array(
		// 	'kd_penjualan' 		=> ,
		// 	'kd_barang' 		=> , 
		// 	'jumlah_penjualan'  => ,
		// );
		$this->db->insert('tbdetailpenjualan', $object);
	}

}

/* End of file m_penjualan.php */
/* Location: ./application/models/m_penjualan.php */