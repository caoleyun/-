<?php 
header("content-Type: text/html; charset=Utf-8"); 
	//   查找  文章   处理 
	//   单击文章时候查找  或则搜索查找
	//   通过类型  文章名字得到
	
	$title=$_GET["title"];//标题
	$title_type=$_GET["title_type"];//类别

	$dir3 = iconv("UTF-8", "GBK", "./artivle/type/".$title_type."/type.json");//中文目录
	//打开文件夹  创建文件   先初始化time.json文件
	$myfile0 = fopen($dir3, "r")or die("Unable to open file!");

	// 从文件中读取数据到PHP变量
	$json_string = file_get_contents($dir3);

	// 把JSON字符串转成PHP数组
	$json_string1=json_decode($json_string,true);
		


	if(!empty($json_string1)){
	   foreach($json_string1 as $v1) {
		  if($v1["title"]==$title){
		  	echo $v1["content"];
		  }
		}
	}

	
	//关闭文件夹
	fclose($myfile0);



?>