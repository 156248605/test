$(function () {
    $('input[name=send]').on('click',function(){
        var user=$('input[name=user]').val();
        var pass=$('input[name=pass]').val();
        var notpass=$('input[name=notpass]').val();
        var level = $('select[name=level]').val();
        if (user == '') {
            alert('管理员用户名不得为空！');
            $('input[name=user]').focus();
            return false;
        }
        if (user.length<2) {
            alert('管理员用户名不得小于2位！');
            $('input[name=user]').focus();
            return false;
        }
        if (user.length>20) {
            alert('管理员用户名不得大于20位！');
            $('input[name=user]').focus();
            return false;
        }
        if (pass.length<6) {
            alert('管理员密码不得小于6位！');
            $('input[name=pass]').focus();
            return false;
        }
        if (pass != notpass ) {
            alert('管理员密码和确认密码必须保持一致！');
            $('input[name=pass]').focus();
            return false;
        }
        if (level==0){
            alert('管理员等级权限必须选择！');
            $('input[name=user]').focus();
            return false;
        }
        return true;
    });





})