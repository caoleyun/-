<?php 
	//   heart 个数保存
	
	$project_name=$_POST["project_name"];//项目名称
	$heart=$_POST["heart"];//heart 个数
	
	$project_name=urldecode($project_name); //URL编码！ 变变成中文



	//打开文件夹  创建文件   先初始化time.json文件
	$myfile1 = fopen("./artivle/item/time.json", "r+")or die("Unable to open file!");

	// 从文件中读取数据到PHP变量
	$json_string = file_get_contents("./artivle/item/time.json");

	// 把JSON字符串转成PHP数组
	$json_string1=json_decode($json_string,true);
		


	for($i=0;empty($json_string1[$i])!==true;$i++){
			if($json_string1[$i]["project_name"]==$project_name){
				$json_string1[$i]["heart"]=$json_string1[$i]["heart"]+1;
			}
		}

	//数组转换成json数据存储格式
	$json_string88 = json_encode($json_string1);
	fwrite($myfile1,$json_string88);


	//关闭文件夹
	fclose($myfile1);






?>