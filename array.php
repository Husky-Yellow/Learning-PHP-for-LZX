<?php 
    $newsList = array();
    $newsList2 = [];
    var_dump($newsList);
    var_dump($newsList2);

	// 基础数组遍历 
	$arr = ['中国', '美国', '日本', '法国'];
	foreach ($arr as $key => $value) {
		echo "$key".' => '."$value"."\n";
	} 

	// 二维数组
	$arr2 = [
		['苹果', '雪梨', '桃子', '芒果'],
		['猪肉', '羊肉', '牛肉', '鸡肉'],	
		  ];
		print_r($arr2[1][2]);
		$len = count($arr2);
		$len2 = count($arr);
		echo "\n" . "$len" . "\n" . "$len2";
 ?>