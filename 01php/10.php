<?php
header("Content-type:text/html;charset=utf-8");
//file_get_contents 获取文件内容 获取的是一个字符串
$data=file_get_contents("file.txt");
echo $data;

?>