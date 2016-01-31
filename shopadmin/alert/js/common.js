function _mpSuccess(msg)
{
	_commonMsgWindow('info',msg);
}

function _mpAlert(msg)
{
	_commonMsgWindow('warning',msg);
}
function _commonMsgWindow(msg_type,msg_content)
{
	$.alert.open({
		type : msg_type,
		title : '提示信息',
		content : msg_content,
		buttons: {
           ok: '确定'
        },
	});
}
/**
 * 
 * ajax提交数据post
 * @param formId
 * @param url
 */
function _ajaxPost(formId,url){
	$.post(url,$("#"+formId).serializeArray(),function(data){
		if(data.req=='ok'){
			_mpSuccess(data.msg);
			if(_isset(data.url)){
				setTimeout(function(){window.location.href=data.url},2000);
			}//else{
				//history.go(-1);
				//window.location.reload();
			//}
		}else{
			_mpAlert(data.msg);
		}
	},"json");
}
function _isset(a)
{
	if ((typeof (a) === 'undefined') || (a === null)){
		return false;
	}
    return true;
}