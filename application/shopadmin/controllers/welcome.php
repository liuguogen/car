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

		//$this->__isLogin();
		$this->load->view('index/index');
	}

	#登录
	public function islogin(){
		session_start();
		$username=Hcommon::dowith_sql(filter_var($this->input->post('username'),FILTER_SANITIZE_STRING));
		$password=Hcommon::dowith_sql(filter_var(sha1($this->input->post('password'))),FILTER_SANITIZE_STRING);
		$code=Hcommon::dowith_sql(filter_var($this->input->post('code'),FILTER_SANITIZE_STRING));
		//var_export($_SESSION);exit();
		$truecode=$_SESSION['code'];
		//var_export($truecode);
		//exit();
		if($code!=$truecode){
			Hcommon::outjson(array('req'=>'error','msg'=>'验证码不正确！'));
		}
		$this->load->model('shopadmin_model','shopadmin');
		$rRow=$this->shopadmin->checkLogin($username,$password);
		if($rRow){
			$user=array(
				'userid'=>$rRow['id'],
				'username'=>$rRow['username'],
				'login_type'=>$rRow['login_type'],
			);
			$this->session->set_userdata('member',$user);
			Hcommon::outjson(array("req"=>'ok',"msg"=>'登录成功',"url"=>base_url()."shopadmin/index.php/welcome/index"));
		}else{
			Hcommon::outjson(array("req"=>'error',"msg"=>'用户名或密码错误'));
		}

	}

	private function __isLogin(){
		if(!isset($this->user['userid'])){
			Hcommon::redirect(base_url().'shopadmin/index.php/login/index');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */