<?php
header("Content-Type:text/html;charset=utf-8");
//接收客户端数据
$username=$_POST["username"];
//echo $username;
$password=$_POST["password"];
//实际开发去数据库查询数据验证
if($username=="wangqiang" && $password=="123"){
    echo "欢迎，欢迎！".$username;
}else{
    echo "登录错误！";
}
?>