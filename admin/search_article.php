<?php 
// header("content-Type: text/html; charset=Utf-8"); 
	//   搜索 文章   处理 
	//   
	//   通过 文章名字得到    耗时   后 优化！！！！
	
	$start=$_GET["start"];//开始的下标
	$end=$_GET["end"];//结束的下标
	$title=$_GET["text"];//标题
	$title=urldecode($title); //URL编码！ 变变成中文
// echo $title;
// echo $start;
// echo $end;
	//打开文件夹  创建文件   先初始化time.json文件
	$myfile0 = fopen("./artivle/time/time.json", "r")or die("Unable to open file!");

	// 从文件中读取数据到PHP变量
	$json_string = file_get_contents("./artivle/time/time.json");

	// 把JSON字符串转成PHP数组
	$json_string1=json_decode($json_string,true);

	// $json_string88 = json_encode($json_string1[0]["title"]);
		
	//定义一个 返回去的  符合要求的 总数组
	$alljson=array();

// $title="as";
	$i=0;
	if(!empty($json_string1)){
	   foreach($json_string1 as $v1) {

		  if(strpos($v1["title"],$title)!==false){
		  	$alljson[$i]=$v1;
		  	//合并数组  将文件现有的  和 添加的 合并
			// $alljson=array_merge_recursive($alljson,$v1);
		  	$i++;
		  }
		}
	}

	//从 全部的 数组中 截取 一段
	$json_string66=array_slice($alljson,$start,$end-$start);

	//数组转换成json数据存储格式
	$json_string88 = json_encode($json_string66);

	
	echo $json_string88;
	//关闭文件夹
	fclose($myfile0);



?>