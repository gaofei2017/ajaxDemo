<?php
header("Content-type:text/html;charset=utf-8");
//$_GET 这个变量可以获取到客户端以get方式提交的数据
//这个变量对应的值是一个关联数组
/*
username=zhangsan&age=11
$_GET=array(
    "username"=>"zhangsan"
    "age"=>11
)
*/
$username=$_GET["username"];
$age=$_GET['age'];
echo $username;
echo $age;
?>