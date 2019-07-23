<?php 
header("content-Type: text/html; charset=Utf-8"); 
	//  通过 限制的  文章 条数 上下限   返回 一定区域的 数据 文章
	//  判断 是不是 按类型 返回数据   或则直接按时间返回
	//  注意 自定义类型 不能是 time  后期注意
	
	$start=$_POST["start"];//开始的下标
	$end=$_POST["end"];//结束的下标
	$timeORtype=$_POST["timeORtype"];//判断 是不是 按类型 返回数据   或则直接按时间返回
	$timeORtype=urldecode($timeORtype); //URL编码！ 变变成中文
	if($timeORtype=="time"){
		//打开文件夹  创建文件   
		$myfile0 = fopen("./artivle/time/time.json", "r")or die("Unable to open file!");

		// 从文件中读取数据到PHP变量
		$json_string = file_get_contents("./artivle/time/time.json");

		// 把JSON字符串转成PHP数组
		$json_string1=json_decode($json_string,true);
			
		//从 全部的 数组中 截取 一段
		$json_string1=array_slice($json_string1,$start,$end-$start);
		// if(！empty($json_string1[$leftend+$leftstart-1])){
		// }

		// //将截取一段中的  具体文章内容 再截取一段
		// for($i=0;empty($json_string1[$i])!==true;$i++){
		// 	$string=$json_string1[$i]["content"];
		// 	$string = str_replace(array("/r/n", "/r", "/n"), ' ', $string);//将具体文章 空格 换行 制表  去掉
		// 	$json_string1[$i]["content"]=substr($string,0,101);
		// }

		//数组转换成字符串
		$json_string88 = json_encode($json_string1);
		echo $json_string88;

		//关闭文件夹
		fclose($myfile0);
	}else{
		$dir3 = iconv("UTF-8", "GBK", "./artivle/type/".$timeORtype."/type.json");
		//打开文件夹  创建文件   
		$myfile0 = fopen($dir3, "r")or die("Unable to open file!");

		// 从文件中读取数据到PHP变量
		$json_string = file_get_contents($dir3);

		// 把JSON字符串转成PHP数组
		$json_string1=json_decode($json_string,true);
			
		//从 全部的 数组中 截取 一段
		$json_string1=array_slice($json_string1,$start,$end-$start);
		// if(！empty($json_string1[$leftend+$leftstart-1])){
		// }

		// //将截取一段中的  具体文章内容 再截取一段
		// for($i=0;empty($json_string1[$i])!==true;$i++){
		// 	$string=$json_string1[$i]["content"];
		// 	$string = str_replace(array("/r/n", "/r", "/n"), '', $string);//将具体文章 空格 换行 制表  去掉
		// 	$json_string1[$i]["content"]=substr($string,0,101);
		// }

		//数组转换成字符串
		$json_string88 = json_encode($json_string1);
		echo $json_string88;

		//关闭文件夹
		fclose($myfile0);
	}



?>