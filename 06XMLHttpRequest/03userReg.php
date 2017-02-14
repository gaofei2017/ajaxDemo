<?php
    //1.获取客户端发送到服务器端的数据
    $data=$_POST["username"];
    //2.输出到客户端
    if($data=='zhangsan'){
        echo '改用户名已被注册！';
    }else{
        echo '恭喜您！您已经成功注册！';
    }


?>