<?php
header("Content-Type:text/html;charset=utf-8");
//����������Ƿ����ĳ���� array_key_exist() �������� ���ڷ���1
$array=array("username"=>"shandd","age"=>11);
$flag=array_key_exists("username",$array);
echo $flag;
?>