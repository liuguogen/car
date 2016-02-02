<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shopadmin_model extends CI_Model
{


		
	public function checkLogin($username,$password){
		//var_export($userTable);exit();
		if(!$username && !$password)return false;
		$rRow=$this->db->select('id,username,password,login_type')->from($this->db->dbprefix('admin'))->where(array('username'=>$username,'password'=>$password))->limit(1)->get();
		if($rRow->num_rows()<1)return false;
		return $rRow->row_array();
	}
}
?>