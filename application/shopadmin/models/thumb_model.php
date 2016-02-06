<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Thumb_model extends CI_Model
{


		
	public function insertThumb($data){
		//var_export($userTable);exit();
		if(!$data && !is_array($data))return false;
		
		$flag=$this->db->insert($this->db->dbprefix('thumb'),$data);
		return $flag ? true :false;
	}

	#获取首页轮播图

	public function getThumb(){
		$rRow=$this->db->select('*')->from($this->db->dbprefix('thumb'))->get();
		if($rRow->num_rows()<1)return false;
		return $rRow->row_array();
	}

	#更新轮播图

	public function updateThumb($data,$id){
		$flag=$this->db->update($this->db->dbprefix('thumb'),$data,array('id'=>$id));
		return $flag ? true :false;
	}
}
?>