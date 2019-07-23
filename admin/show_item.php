<?php 
header("content-Type: text/html; charset=Utf-8"); 
	//  通过 限制的  项目 条数 上下限   返回 一定区域的 项目

	
	$start=$_POST["start"];//开始的下标
	$end=$_POST["end"];//结束的下标

		//打开文件夹  创建文件   
		$myfile0 = fopen("./artivle/item/time.json", "r")or die("Unable to open file!");

		// 从文件中读取数据到PHP变量
		$json_string = file_get_contents("./artivle/item/time.json");

		// 把JSON字符串转成PHP数组
		$json_string1=json_decode($json_string,true);
			
		//从 全部的 数组中 截取 一段
		$json_string1=array_slice($json_string1,$start,$end-$start);
		// if(！empty($json_string1[$leftend+$leftstart-1])){
		// }

		//数组转换成字符串
		$json_string88 = json_encode($json_string1);
		echo $json_string88;

		//关闭文件夹
		fclose($myfile0);
	


?>