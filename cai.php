<?php
include 'token.php';

$token = cacheToken();

$url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token=' . $token;

$curl = new Mycurl($url);

$data = ' 
{
	"button":[
		{	
			"type":"click",
			"name":"学习网站",
			"key":"xuexi"
		},
		{	
			"type":"click",
			"name":"欧美大片",
			"key":"xing"
		},
		{	
			"type":"view",
			"name":"找度娘",
			"url":"http://www.baidu.com"
		},
	]
}';

echo $curl->post($data);
