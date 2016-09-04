$(function(){

    $('.btn-login').on('click', function(e){
        e.stopPropagation();
        e.preventDefault();
        var username = $.trim($('input.username').val()),
            password = $.trim($('input.password').val());
        if(!username){
            notify('warning',"top center",'请输入用户名','800');
            // CHelper.toggleTip('show', '请输入用户名', 'warn', 800);
            $('input.username').focus();
        }else if(!password){
            notify('warning',"top center",'请输入密码','800');
            $('input.password').focus();
        }else{
            CHelper.asynRequest('/user/login', {username: username, password: password}, {
                before: function(xhr){
                    // notify('info',"top center",'登陆中。。。','800');
                },
                success: function(response){
                    // CHelper.toggleTip('show', '登录成功', null, 800, function(){
                    //     // location.href = '/';
                    //     var targetUrl = response.returnurl || '/';console.log(targetUrl)
                    //     location.href = targetUrl;
                    // });
                    notify('success',"top center",'登陆成功!','2000');
                    setTimeout(function(){
                        location.href = '/';
                    }, 1000);
                },
                successReturnAll: true,
                failure: function(response){
                    notify('warning',"top center",'用户名或密码错误！','800');
                },
                refuse: function(response){
                    notify('warning',"top center",'应用错误，请稍后重试！','800');
                },
                complete: function(status){},
                error: function(msg){
                    notify('error',"top center",'登录失败，请重新登录！','800');
                }
            });
        }
    });
});