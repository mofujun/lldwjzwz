<?php
header('Content-type: application/json');

//��ȡ�ص�������
$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
//json����
$json_data = '["customername����1","customername����2"]';
//���jsonp��ʽ������
echo $jsoncallback . "(" . $json_data . ")";
?>
