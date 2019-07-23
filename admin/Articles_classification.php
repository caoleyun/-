<?php 
header("content-Type: text/html; charset=GBK"); 
	// 文章分类  显示
	//通过 获取 文件夹  得到 类型 名字
	
	//
	
	// $smlist=array();//类型里面的？
	
	// 获取 当前文件夹下的  文件夹的 名称
	function traverseDir($dir){

		// $list=array();//类型

		if($dir_handle = @opendir($dir)){

			while($filename = readdir($dir_handle)){

				if($filename != "." && $filename != ".."){

					$subFile = $dir.DIRECTORY_SEPARATOR.$filename; //要将源目录及子文件相连
					
					if(is_dir($subFile)){ //若子文件是个目录

						// traverseDir($subFile); //递归找出下级目录名称
						// array_push($list,$filename);
						// $filename =mb_convert_encoding($filename,"UTF-8","auto");
						echo $filename.'*'; //输出该目录名称
						
					}

				}
			}
			closedir($dir_handle);
		}
		// //数组转 字符串
		// $list=json_encode($list);
		// echo $list;
	}

	$dirNames = traverseDir("./artivle/type"); //测试某目录


// $datas=array_keys($datas);//提取$datas的键  成新数组
// array_combine(array_keys($datas),$data);//合并数组 一个为 键 一个为值
// array_push($list,"as");




?>