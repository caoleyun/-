<?php 
header("content-Type: text/html; charset=Utf-8"); 
	// 项目 存入文件夹  处理 
	// 
	
	$project_name=$_GET["project_name"];//项目名称
	$project_link=$_GET["project_link"];//项目链接
	$heart=0;

	
	$dir1 = iconv("UTF-8", "GBK", "./artivle/item/");

	if (!file_exists($dir1)){
        @mkdir ($dir1,0777,true);
        // echo '创建文件夹bookcover成功';
    } else {
        // echo '需创建的文件夹bookcover已经存在';
    }


	if (!file_exists("./artivle/item/time.json")){
        //打开文件夹  创建文件   先初始化time.json文件
		$myfile0 = fopen("./artivle/item/time.json", "w")or die("Unable to open file!");
		//写入内容 
		fwrite($myfile0,"[]");
		//关闭文件夹
		fclose($myfile0);
    } 
        //打开文件夹  创建文件
		$myfile1 = fopen("./artivle/item/time.json", "r") or die("Unable to open file!");

		

		//存入文件内的内容
		$alljson=array(array("project_name"=>$project_name,"project_link"=>$project_link,"heart"=>$heart));

		// // 从文件中读取数据到PHP变量
		$json_string = file_get_contents("./artivle/item/time.json");
		
		// 把JSON字符串转成PHP数组
		$json_string1=json_decode($json_string);

		//合并数组  将文件现有的  和 添加的 合并
		$kk=array_merge_recursive($alljson,$json_string1);

		//数值转换成json数据存储格式
		$json_string88 = json_encode($kk);

		//关闭文件夹
		fclose($myfile1);


		//打开文件夹
		$myfile2 = fopen("./artivle/item/time.json", "w") or die("Unable to open file!");

		//写入内容 
		fwrite($myfile2,$json_string88);

		//关闭文件夹
		fclose($myfile2);

    





	


	

		echo $project_name;
		echo "*";
		echo $project_link;
		echo "*";
		echo $heart;
		








?>