<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
//��ȡ�ص�������
$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
//json����
$json_data = '["mfj","hello"]';
//���jsonp��ʽ������
echo $jsoncallback . "(" . $json_data . ")";
?>