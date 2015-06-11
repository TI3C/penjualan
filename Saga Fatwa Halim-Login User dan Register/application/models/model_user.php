<?php 

class model_user extends CI_Model {

	function create_id(){
		$inisial = "ADM";
		$sql = $this->db->count_all('tbladmin')+1;

		$id = $inisial. sprintf("%05s",$sql);

		return $id;
	}

	function tambah_user($id){
		$object = array(
			'IdAdmin'			=> $id,
			'userName'			=> $this->input->post('username'),
			'password'			=> $this->input->post('password'),
		);
		$this->db->insert('tbladmin', $object);
	}

	function login_admin($username, $password){
		$sql=$this->db->get_where('tbladmin', array('userName'=>$username, 'password'=>$password));

		if($sql->num_rows()==1){
			return $sql->result();
		}else{
			return null;
		}
	}

}

