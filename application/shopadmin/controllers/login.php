<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	private $user;

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->user=isset($this->session->userdata['user']) ? $this->session->userdata['user'] :  "";
	}

	function index(){
		
		$this->load->view('login/index');
	}


	/**
	 * 
	 * 判断是否登录
	 * Enter description here ...
	 */
	private function _isLogin(){
		if(!isset($this->user['userid'])){
			Hcommon::redirect(site_url('login/index'));
		}
	}
	/**
	*
	*获取验证吗
	*
	*/
	public function getCode(){
		$this->load->helper('code');
		Code::getArithmetic(95,30);
	}
}
?>