<?php
header("Content-Type:text/html;charset=utf-8");
//检测数组中是否存在某个键 array_key_exist() 关联数组 存在返回1
$array=array("username"=>"shandd","age"=>11);
$flag=array_key_exists("username",$array);
echo $flag;
?>