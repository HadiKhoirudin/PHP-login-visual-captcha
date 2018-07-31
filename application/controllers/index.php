<?php 

class Index extends CI_Controller
{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index()
	{
		$this->load->view('login');
	}

	function login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("home"));

		}else{
			    echo "<script>
		window.alert('Maaf Username & atau Password Anda Salah!');
		window.location = '../';
		</script>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function setTheme()
	{
		$this->session->set('theme','css/'.$_POST['theme'].'/easyui.css');
		echo 'ya';
	}
}