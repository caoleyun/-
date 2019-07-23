<?php 
header("content-Type: text/html; charset=Utf-8"); 
	// 文章 存入文件夹  处理 
	// 
	
	$title=$_GET["title"];//标题
	$title_type=$_GET["title_type"];//类别
	$content=$_GET["content"];//文章内容
	$heart=0;

	
	$dir1 = iconv("UTF-8", "GBK", "./artivle/time/");

	if (!file_exists($dir1)){
        @mkdir ($dir1,0777,true);
        // echo '创建文件夹bookcover成功';
    } else {
        // echo '需创建的文件夹bookcover已经存在';
    }

    $dir2 = iconv("UTF-8", "GBK","./artivle/type/".$title_type);

	if (!file_exists($dir2)){
        @mkdir ($dir2,0777,true);
        // echo '创建文件夹bookcover成功';
    } else {
        // echo '需创建的文件夹bookcover已经存在';
    }
	//新建文件夹   以类别为文件名    带有自动分类功能     分时间和类型两份？
	// @mkdir("./artivle/time/");
	// @mkdir("./artivle/type/".$title_type);
	// @rmdir("upload");//删除文件夹，相对路径
// echo mkdir("./artivle/time/");
// echo "*";


	//
	// $dir = iconv("UTF-8", "GBK", "./artivle/time/");
	if (!file_exists("./artivle/time/time.json")){
        // @mkdir ($dir,0777,true);
        //打开文件夹  创建文件   先初始化time.json文件
		$myfile0 = fopen("./artivle/time/time.json", "w")or die("Unable to open file!");
		//写入内容 
		fwrite($myfile0,"[]");
		//关闭文件夹
		fclose($myfile0);
    } 
        //打开文件夹  创建文件
		$myfile1 = fopen("./artivle/time/time.json", "r") or die("Unable to open file!");

		//返回最近修改的 时间戳
		// $time1=filemtime("./artivle/time/time.json");
		date_default_timezone_set('PRC');
		$time=date("Y-m-d H:i:s",time());

		//存入文件内的内容
		$alljson=array(array("title"=>$title,"title_type"=>$title_type,"content"=>$content,"time"=>$time,"heart"=>$heart));

		// // 从文件中读取数据到PHP变量
		$json_string = file_get_contents("./artivle/time/time.json");
// echo $json_string;
		// 把JSON字符串转成PHP数组
		$json_string1=json_decode($json_string);

		//合并数组  将文件现有的  和 添加的 合并
		$kk=array_merge_recursive($alljson,$json_string1);

		//数值转换成json数据存储格式
		$json_string88 = json_encode($kk);

		//关闭文件夹
		fclose($myfile1);


		//打开文件夹
		$myfile2 = fopen("./artivle/time/time.json", "w") or die("Unable to open file!");

		//写入内容 
		fwrite($myfile2,$json_string88);

		//关闭文件夹
		fclose($myfile2);

    


    $dir3 = iconv("UTF-8", "GBK", "./artivle/type/".$title_type."/type.json");
	if (!file_exists($dir3)){
        // @mkdir ($dir,0777,true);
        //打开文件夹  创建文件   先初始化time.json文件
		$myfile20 = fopen($dir3, "w")or die("Unable to open file!");
		//写入内容 
		fwrite($myfile20,"[]");
		//关闭文件夹
		fclose($myfile20);
    }
    	//打开文件夹  创建文件
		$myfile21 = fopen($dir3, "r") or die("Unable to open file!");

		

		//存入文件内的内容
		$alljson2=array(array("title"=>$title,"title_type"=>$title_type,"content"=>$content,"time"=>$time,"heart"=>$heart));

		// // 从文件中读取数据到PHP变量
		$json_string2 = file_get_contents($dir3);

		// 把JSON字符串转成PHP数组
		$json_string21=json_decode($json_string2);

		//合并数组  将文件现有的  和 添加的 合并
		$kk2=array_merge_recursive($alljson2,$json_string21);

		//数值转换成json数据存储格式
		$json_string288 = json_encode($kk2);

		//关闭文件夹
		fclose($myfile21);


		//打开文件夹
		$myfile22 = fopen($dir3, "w") or die("Unable to open file!");

		//写入内容 
		fwrite($myfile22,$json_string288);

		//关闭文件夹
		fclose($myfile22);
    




	


	

		echo $title;
		echo "*";
		echo $title_type;
		echo "*";
		echo $content;
		echo "*";
		echo $time;
		echo "*";
		echo $heart;








?>