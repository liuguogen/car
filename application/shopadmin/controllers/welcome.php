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
		$sql="select * from admin where username=? and password=?";
		$where=array('admin','d033e22ae348aeb5660fc2140aec35850c4da997');
		//$r=$this->db->query("select * from ".$this->db->dbprefix('tablename')."admin");
		//$r=$this->db->query($sql,$where);
		//$r=$this->db->select('id,username,password,login_type')->from('admin')->where(array('username'=>'admin','password'=>'d033e22ae348aeb5660fc2140aec35850c4da997'))->limit(0,1)->get();
		var_export($this->db->dbprefix('admin'));exit();
		session_start();
		$username=Hcommon::dowith_sql(filter_var($this->input->post('username'),FILTER_SANITIZE_STRING));
		$password=Hcommon::dowith_sql(filter_var(sha1($this->input->post('password'))),FILTER_SANITIZE_STRING);
		$code=Hcommon::dowith_sql(filter_var($this->input->post('code'),FILTER_SANITIZE_STRING));
		$truecode=$_SESSION['code'];
		//var_export($truecode);
		//exit();
		if($code!=$truecode){
			Hcommon::outjson(array('req'=>'error','msg'=>'验证码不正确！'));
		}
		$this->load->model('shopadmin_model','shopadmin');
		$rRow=$this->shopadmin->checkLogin($username,$password);
		echo "<pre>";
		var_export($rRow);exit();
	}

	private function __isLogin(){
		if(!isset($this->user['userid'])){
			Hcommon::redirect(base_url().'shopadmin/index.php/login/index');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */