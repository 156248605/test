$(function () {
    $('input[name=send]').on('click',function(){

        var user=$('input[name=name]').val();
        var info = $('#info').val();
        if (user == '') {
            alert('导航名称不得为空！');
            $('input[name=name]').focus();
            return false;
        }
        if (user.length<2) {
            alert('导航名称不得小于2位！');
            $('input[name=name]').focus();
            return false;
        }
        if (user.length>4) {
            alert('导航名称不得大于4位！');
            $('input[name=name]').focus();
            return false;
        }
        if (info==''){
            alert('导航信息不得为空！');
            $('#info').focus();
             return false;
        }
        if (info.length>200) {
            alert('导航信息不得大于200位！');
            $('#info').focus();
            return false;
        }
        return true;
    });

    })