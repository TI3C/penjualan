<?php 
	/**
	* 
	*/
	class M_login extends CI_Model
	{
		
		function do_login()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$login = $this->db->query("SELECT * FROM tblmember WHERE username='$username' AND password='$password'");
			if($login){
					return $login->first_row();
				}
		}
}
?>

