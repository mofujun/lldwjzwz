<?php
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
//获取回调函数名
$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
//json数据
$json_data = '["mfj","hello"]';
//输出jsonp格式的数据
echo $jsoncallback . "(" . $json_data . ")";
?>