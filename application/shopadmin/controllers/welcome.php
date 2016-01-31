<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	private  $user;


	function __construct(){
		
		parent::__construct();
		$this->load->library('session');
		$this->user=isset($this->session->userdata['user']) ? $this->session->userdata['user'] :  "";
		
	}
	public function index()
	{
		$this->__isLogin();
		$this->load->view('index/index');
	}

	#登录
	public function islogin(){
		var_export($_POST);
		exit();
	}

	private function __isLogin(){
		if(!isset($this->user['userid'])){
			Hcommon::redirect(base_url().'shopadmin/index.php/login/index');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */