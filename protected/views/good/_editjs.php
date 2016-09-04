$(function(){
	CHelper.uploadOSS(token,{'domain':domain,'browse_button':'picture_img', 'container':'picture_container'},{
        'FileUploaded':function(up,file){
            CHelper.toggleTip('hide');
            link = 'http://nanxiang.img-cn-shanghai.aliyuncs.com/img/'+file.id;
            $('#picture_img').attr('src',link);
            $('#picture').val(link);
        }
    });

    $('#edit_base_form').validate({
        focusInvalid: true,
        onfocusout: function(element){ 
            $(element).valid(); 
        },
        onkeyup: function(element){ 
            $(element).valid(); 
        },
        errorPlacement: function(error, element) {
            element.parent().parent().addClass('error');
        },
        success: function(callback, element) {
            $(element).parent().parent().removeClass('error');
        },
        submitHandler: function(form){
            $('#btn-save').attr('disabled', true);
            
            if($('#action-type').val()=='edit'){
                CHelper.asynRequest('/good/edit', $('#edit_base_form').serialize(), {
                    before: function(xhr){},
                    success: function(response){
                        $.jGrowl('修改成功');
                        location.href="/good/list";
                    },
                    failure: function(msg){
                        $.jGrowl('系统异常，请重试');
                    },
                    error: function(msg){
                        $.jGrowl('系统异常，请重试');
                    },
                });
                $('#btn-save').attr('disabled',false);
            } else {
                form.submit();
            }
        }
    });
})