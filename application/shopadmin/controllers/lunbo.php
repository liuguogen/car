<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lunbo extends CI_Controller {
	private  $user;


	function __construct(){
		
		parent::__construct();
		$this->load->library('session');
		$this->user=isset($this->session->userdata['user']) ? $this->session->userdata['user'] :  "";
		
	}
	public function add()
	{



		$this->__isLogin();
		$this->load->view('lunbo/add');
	}
	private function __isLogin(){
		if(!isset($this->user['userid'])){
			Hcommon::redirect(base_url().'shopadmin/index.php/login/index');
		}
	}
}