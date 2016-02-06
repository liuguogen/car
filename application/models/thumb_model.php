<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Thumb_model extends CI_Model
{


		
	

	#获取首页轮播图

	public function getThumb(){
		$rRow=$this->db->select('*')->from($this->db->dbprefix('thumb'))->get();
		if($rRow->num_rows()<1)return false;
		return $rRow->row_array();
	}

	
}
?>