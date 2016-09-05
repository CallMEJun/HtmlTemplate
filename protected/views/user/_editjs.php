$(function(){
    // console.log(company)
    $('#country').editable({
        emptytext: "无",
        source: company,
        select2: {
            width: 200,
            placeholder: 'Select country',
            allowClear: true
        },
        success: function(response){
            var data = JSON.parse(response);
            $('.company').val(data.data);
        }
    }); 

    $('#user-form').bootstrapValidator({
        fields: {
            nickName: {
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                }
            },
            mobile: {
                validators: {
                    notEmpty: {
                        message: 'the mobile is required'
                    },
                    digits: {
                        message: 'should be number'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'not empty'
                    },
                    emailAddress: {
                        message: 'not empty'
                    }
                }
            },
            website: {
                validators: {
                    uri: {
                        message: 'should be website'
                    }
                }
            }
        },
        submitHandler: function(validate,form){
            if($('.action').val() == 'edit'){
                CHelper.asynRequest('/user/edit', form.serialize(),{
                    success: function(){
                        notify('success','top center','ok',1500);
                        setTimeout(function(){
                            location.href = '/user/list';
                        },1200);
                    },
                    error: function(){
                        notify('error','top center','error',1500);
                    }
                });
                // console.log('ok');
            } else {
                console.log('asd');
            }
        }
    });

});