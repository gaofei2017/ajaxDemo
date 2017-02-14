<?php
/**
读取文件，读取出来的一定是一个字符串把字符串输出到客户端
向客户端输出一个响应头
*/
header("Content-Type:text/xml;charset=utf-8");
//读取文件内容
$data=file_get_contents('02books.xml');
echo $data;

?>