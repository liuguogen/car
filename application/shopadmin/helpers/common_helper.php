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

	/**
	**JS 跳转
	**@param $url url地址
	**@param $msg 提示信息
	**@return 
	**/

	public static function js_redirect($url,$msg){
		$redirect='<script type="text/javascript">
					alert("'.$msg.'");
					window.location.href="'.$url.'";
			</script>';

		return $redirect;
	}

	/**
	**文件上传
	**@param $_FILES POST 文件
	**@return 
	**/

	public static function upload($files){
		$filename=date("Y-m-d",time());

		if(!file_exists("/uploads/".$filename)){
			mkdir("/uploads/".$filename,0777);
		}
		$targetFolder= '/uploads/'.$filename;
		$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYX";
		$verifyToken = md5('unique_salt' . $_POST['timestamp']);
		if (!empty($files) && $_POST['token'] == $verifyToken) {
			$tempFile = $files['fileField']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$newname=substr(strrchr($files['fileField']['name'],"."),0);
			
			$new_name=substr(str_shuffle($str),0,10).$newname;
			$targetFile = rtrim($targetPath,'/') . '/' .$new_name;
			
			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
			$fileParts = pathinfo($targetFile);
			if (in_array($fileParts['extension'],$fileTypes)) {
				move_uploaded_file($tempFile,$targetFile);
				$new_filename=$targetFolder."/".$new_name;
				return  $new_filename;
			} else {
				return 'Invalid file type.';
			}
		}
	}
}
?>