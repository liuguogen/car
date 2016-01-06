<?php
class Hcommon{
	/**
	 * 
	 * 重定向
	 * Enter description here ...
	 */
	public static function redirect($url){
		if($url){
			header("location:{$url}");
			exit(0);
		}
	}
	/**
	 * 
	 * 输出json
	 * Enter description here ...
	 * @param unknown_type $data
	 */
	public static function outjson($data){
		if($data && is_array($data)){
			echo json_encode($data);
		}else{
			echo $data;
			
		}
		exit(0);
	}
	/**
	 * 
	 * 404页面
	 * Enter description here ...
	 */
	public static function show_404(){
		header( " HTTP/1.0  404  Not Found" );
		self::redirect("/404.html");
	}
	/**
	 * 
	 * 防sql注入
	 * Enter description here ...
	 * @param unknown_type $str
	 */
	public static function dowith_sql($str){
		$str = str_replace("and","",$str);
		$str = str_replace("execute","",$str);
		$str = str_replace("update","",$str);
		$str = str_replace("count","",$str);
		$str = str_replace("chr","",$str);
		$str = str_replace("mid","",$str);
		$str = str_replace("master","",$str);
		$str = str_replace("truncate","",$str);
		$str = str_replace("char","",$str);
		$str = str_replace("declare","",$str);
		$str = str_replace("select","",$str);
		$str = str_replace("create","",$str);
		$str = str_replace("delete","",$str);
		$str = str_replace("insert","",$str);
		$str = str_replace("'","",$str);
		$str = str_replace("\"","",$str);
		$str = str_replace(" ","",$str);
		$str = str_replace("or","",$str);
		$str = str_replace("=","",$str);
		$str = str_replace("%20","",$str);
		$str = str_replace("show","",$str);
		$str = str_replace("desc","",$str);
		return $str;
	}
	/**
	 * 
	 * 截取字符串
	 * Enter description here ...
	 * @param unknown_type $str 字符
	 * @param unknown_type $startlen 开始长度
	 * @param unknown_type $endlen 结束长度
	 */
	public static function substr_str($str,$startlen,$endlen){
		if($str){
			$str=mb_substr($str, $startlen,$endlen,"utf-8")."...";
		}
		return $str;
	}
}
?>