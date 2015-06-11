<?php 

	class Login extends CI_Controller 
		{

			public function index()
			{
				$this->load->model('m_login');
				$this->load->view('v_form_login');
				if ($_POST) {
					$query = $this->m_login->do_login();

				if (!$query) {
						echo mysql_error();
						echo "
								<div class='alert alert-block alert-danger fade in'>
				                	<button data-dismiss='alert' class='close close-sm' type='button'>
				                    <i class='icon-remove'></i>
				                    </button>
				                   	<strong>Opsss!!</strong> Anda belum mengisikan Username dan Password Anda.
				                </div>
				                ";
					} else {
						$level=$query->level;
						echo $level;
						
						if($level=='1'){
							$data=array(
							'useradmin' 	=> $query->username,
							'passadmin' 	=> $query->password,
							'leveladmin' 	=> $query->level
							);
						$this->session->set_userdata($data);
						redirect(base_url().'member');
						}

						elseif ($level=='2'){
									$ses=array(
									'userpeg' 	=> $query->username,
									'passpeg' 	=> $query->password,
									'levelpeg'	=> $query->level,
									'id_user' 	=> $query->kd_member
									);
								$this->session->set_userdata($ses);
								redirect(base_url().'barang/view_data_barang_user');
						}
						
					}
						
				}
			}

			function logout(){
				$this->session->sess_destroy();
				redirect(base_url().'login');
			}

			function logout_user(){
				$this->session->sess_destroy();
				redirect(base_url().'barang/view_data_barang_user');
			}

		}
?>

