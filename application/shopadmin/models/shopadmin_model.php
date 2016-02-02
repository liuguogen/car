<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shopadmin_model extends CI_Model
{
	public function checkLogin($username,$password){
		if(!$username && !$password)return false;
		$rRow=$this->db->select('id,username,password,login_type')->from('sdb_admin')->where(array('username'=>$username,'password'=>$password))->limit(0,1)->get();
		return $rRow;
	}
}
?>