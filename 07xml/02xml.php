<?php
/**
��ȡ�ļ�����ȡ������һ����һ���ַ������ַ���������ͻ���
��ͻ������һ����Ӧͷ
*/
header("Content-Type:text/xml;charset=utf-8");
//��ȡ�ļ�����
$data=file_get_contents('02books.xml');
echo $data;

?>