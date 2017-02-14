<?php
header("Content-Type:text/html;charset=utf-8");
//内容输出：访问php，访问的是一个资源，服务端向客户端输出内容
//一般情况输出字符串
//echo 输出字符串
//var_dump向客户端输出一个数组
$arr=array("username"=>"lisi","age"=>12);
echo $arr;
var_dump($arr);
print_r($arr);
?>