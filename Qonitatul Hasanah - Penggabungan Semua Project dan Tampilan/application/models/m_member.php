<?php
	
	class M_member extends CI_Model
	{
		function insert_member($db_query){
			$simpan =$this->db->insert('tblmember', $db_query);
			return $simpan;	
		}

		function view_member(){
			$this->db->select()->from('tblmember');
			$query=$this->db->get();
			return $query->result_array();
		}

		function update_member($db_query, $kd_member){
			$this->db->where('kd_member', $kd_member);
			$db=$this->db->update('tblmember', $db_query);
			return $db; 
		}

		function tampil_update($id){
			$tampil=$this->db->get_where('tblmember', array('kd_member'=>$id));
			return $tampil->result_array();
		}

		function delete_member($kd_member){
			$query=$this->db->query("DELETE FROM tblmember WHERE kd_member='$kd_member'");
		}
	}
	

?>