<?php 
	//   heart 个数保存
	
	$title=$_GET["title"];//标题
	$title_type=$_GET["title_type"];//类别
	$heart=$_GET["heart"];//heart 个数
	$title=urldecode($title); //URL编码！ 变变成中文
	$dir3 = iconv("UTF-8", "GBK", "./artivle/type/".$title_type."/type.json");//中文目录
	//打开文件夹  创建文件   先初始化time.json文件
	$myfile0 = fopen($dir3, "r+")or die("Unable to open file!");

	// 从文件中读取数据到PHP变量
	$json_string = file_get_contents($dir3);

	// 把JSON字符串转成PHP数组
	$json_string1=json_decode($json_string,true);
		

		for($i=0;empty($json_string1[$i])!==true;$i++){
			if($json_string1[$i]["title"]==$title){
				$json_string1[$i]["heart"]=$json_string1[$i]["heart"]+1;
			}
		}

	//数组转换成json数据存储格式
	$json_string88 = json_encode($json_string1);
	fwrite($myfile0,$json_string88);
	echo $json_string88;

	//写入内容 

	// echo 'ok';
	//关闭文件夹
	fclose($myfile0);




	//打开文件夹  创建文件   先初始化time.json文件
	$myfile1 = fopen("./artivle/time/time.json", "r+")or die("Unable to open file!");

	// 从文件中读取数据到PHP变量
	$json_string = file_get_contents("./artivle/time/time.json");

	// 把JSON字符串转成PHP数组
	$json_string1=json_decode($json_string,true);
		


	for($i=0;empty($json_string1[$i])!==true;$i++){
			if($json_string1[$i]["title"]==$title){
				$json_string1[$i]["heart"]=$json_string1[$i]["heart"]+1;
			}
		}

	//数组转换成json数据存储格式
	$json_string88 = json_encode($json_string1);
	fwrite($myfile1,$json_string88);
	// echo $json_string88;

	//写入内容 

	// echo 'ok';
	//关闭文件夹
	fclose($myfile1);






?>