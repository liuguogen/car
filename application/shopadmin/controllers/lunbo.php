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
		$this->load->model('thumb_model','thumb');
		$row=$this->thumb->getThumb();
		

		$this->load->view('lunbo/add',array(
			'thumb'=>$row
			));
	}

	#images upload
	public function upload(){
		$filename=date("Y-m-d",time());
		if(!file_exists("../uploads/".$filename)){
			mkdir("../uploads/".$filename,0777);
		}
		$targetFolder= '../uploads/'.$filename;
		$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYX";
		$verifyToken = md5('unique_salt' . $_POST['timestamp']);
		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			$tempFile = $_FILES['fileField']['tmp_name'];
			$targetPath = $targetFolder;//$_SERVER['DOCUMENT_ROOT'] ."/car/". $targetFolder;
			
			$newname=substr(strrchr($_FILES['fileField']['name'],"."),0);
			//这种方法获取的是图片名称的所有名字进行加密
			//$new_name=md5($_FILES['fileField']['name']).$newname;
			//这一种方法是获取图片名称不加后缀
			//$exName=explode(".",$_FILES['fileField']['name']);
			$new_name=substr(str_shuffle($str),0,10).$newname;
			//$targetFile = rtrim($targetPath,'/') . '/' .$new_name;
			$targetFile="../uploads/".$new_name;
			// Validate the file type
			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
			$fileParts = pathinfo($targetFile);
			if (in_array($fileParts['extension'],$fileTypes)) {
				move_uploaded_file($tempFile,"../uploads/".$new_name);
				$new_filename=base_url()."uploads/".$new_name;
				echo $new_filename;
			} else {
				echo 'Invalid file type.';
			}
		}
	}

	#保存轮播图
	public function addimg(){


		$this->load->model('thumb_model','thumb');
		if($_POST['id']==''){
			$flag=$this->thumb->insertThumb($_POST);
			if($flag){
				echo "<script>
				alert('succ');
				window.location.href='".base_url()."shopadmin/index.php/lunbo/add'
				</script>";
			}else{
				echo "<script>
				alert('fail');
				
				</script>";
			}
		}else{//update
			$id=$_POST['id'];
			unset($_POST['id']);
			$date=$_POST;
			$flag=$this->thumb->updateThumb($date,$id);
			if($flag){
				echo "<script>
				alert('succ');
				window.location.href='".base_url()."shopadmin/index.php/lunbo/add'
				</script>";
			}else{
				echo "<script>
				alert('fail');
				
				</script>";
			}
		}
	}
	private function __isLogin(){
		if(!isset($this->user['userid'])){
			Hcommon::redirect(base_url().'shopadmin/index.php/login/index');
		}
	}
}