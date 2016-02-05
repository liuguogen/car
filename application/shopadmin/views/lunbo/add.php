<?php echo $this->load->view('header') ?>

<script src="<?php echo base_url() ?>shopadmin/js/jquery.uploadify.min.js" type="text/javascript"></script>
<link href="<?php echo base_url() ?>shopadmin/css/uploadify.css" type="text/css" rel="stylesheet">
<script src="<?php echo base_url(); ?>shopadmin/js/jquery-1.8.0.min.js" type="text/javascript"></script>
 <ul class="breadcrumb">
            <li><a href="<?php echo base_url() ?>shopadmin/index.php/lunbo/add">轮播图</a> </li>
            <li class="active">添加轮播图</li>
        </ul>

        </div>
  <div class="main-content">

  	<table>
  		<tr>
  			<td>第一张轮播图：</td>
  			<td><input id="file_upload" name="file_upload" type="file" multiple="true"></td>
  			<td><input type="hidden" name="thumb" value=""></td>
  		</tr>
  	</table>
  </div>

  <script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			
			$('#file_upload').uploadify({
				alert("fafdsaf");
				'buttonText' : '选择文件',
			   'fileSizeLimit' : '500KB',
				'fileTypeDesc' : '选择图片',
			   'fileTypeExts' : '*.gif; *.jpg;*.jpeg; *.png',
			   'fileObjName' : 'fileField',
			   'method'   : 'post',
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : '<?php echo base_url(); ?>shopadmin/swf/uploadify.swf',
				'uploader' : "<?php echo base_url();?>shopadmin/lunbo/upload",
				'onUploadSuccess':function(file,data,response){
					if(response && data!='error'){
						$("[name='thumb']").val(data);
						$('#queue').append('<a><img src="'+data+'" style="height: 120px;width: 120px;margin-right:5px;margin-left:38px;" /></a>');
					}
				}
			});
		});
	</script>