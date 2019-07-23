<!-- 网页主页面 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <!-- 设置IE的兼容模式，可以防止IE有一些兼容错误 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- 视口标签 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签必须放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>小小博客</title>
  <!-- 链接了一个样式表 -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- 下面的js是给IE6、7、8用的，让IE6、7、8能够支持html5标签和媒体查询 -->
  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- 网站图标 -->
  <link rel="shortcut icon" href="./bitbug_favicon.ico" />

  <style type="text/css">
						/*雅虎css初始化文件*/
						body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td { 
						margin:0; padding:0; 
						}
						body { 
						background:#fff; 
						color:#555;
						font-size:14px;
						font-family: Verdana, Arial, Helvetica, sans-serif; 
						}
						td,th,caption { 
						font-size:14px; 
						}
						h1, h2, h3, h4, h5, h6 { 
						font-weight:normal; 
						font-size:100%; 
						}
						address, caption, cite, code, dfn, em, strong, th, var { 
						font-style:normal; 
						font-weight:normal;
						}
						a { 
						color:#555; 
						text-decoration:none; 
						}
						a:hover { 
						text-decoration:underline; 
						}
						img { 
						border:none; 
						}
						ol,ul,li { 
						list-style:none; 
						}
						input, textarea, select, button { 
						font:14px Verdana,Helvetica,Arial,sans-serif; 
						}
						table { 
						border-collapse:collapse; 
						}
						html {
						overflow-y: scroll;
						} 

						.clearfix:after {
						content: "."; 
						display: block; 
						height:0; 
						clear:both; 
						visibility: hidden;
						}
						.clearfix { 
						*zoom:1; 
						}
		
		body{
			background-color:rgb(237,239,242);
			font-size:12px;
			/*
			background: url("./images/2.jpg")  no-repeat ;
			background-size:contain;
			-moz-background-size: contain;
			background-position:center;
			background-attachment: fixed;*/
		}
		.my-nav{
			position:fixed;
			top:0px;
			left:0px;
			z-index:10;
			width:100%;
		}
  		.my-nav-heard{
  			width:85%;/*版心比例 80%*/
  			margin:0 auto;
  		}  
  		.my-banner{
  			width:67%;
  			margin:0 auto;
  			margin-top:70px;
  		}
  		.my-footer{
  			width:67%;
  			margin:0 auto;
  			z-index:-1;
  		}
  		/*首页*/
  		.my-homepage:hover{
			background-color:#eee;
  		}
  		.my-show-item:hover{
  			background-color:#eee;
  		}
  		.my-sign-in{
  			display:none;
  			position:absolute;
  			left:0;
  			top:0;
  			background-color:rgb(28,29,23,0.6);
  			width:100%;
  			height:100%;
  			z-index: 200;
  		}
  		.my-sign-in .my-form{
  			width:40%;
  			height:40%;
  			margin:10% auto;
  		}

  		/*文章试例*/
  		.my-txt{
  			/*background-color:yellow;*/
  			margin:10px 10px;
  			padding:10px 20px 20px 20px;
  		}
  		.my-txt a{
  			text-decoration:none;
  			cursor:pointer;
  		}
  		.my-txt a:hover{
  			color:#2cab5a;
  		}
  		.my-title{
  			/*background-color:red;*/
  			font-size: 18px;
  			font-weight:bold;
  			margin:5px 0 0 0;
  			color:black;
			font-weight:700;
			color:#69aba5;
  		}
  		.my-content{
  			/*background-color:green;*/
  			font-size:13px;
  			color:#999;
  			margin:0 8px;
  			/*line-height:24px;*/
  			/*height:48px;*/
  			overflow:hidden;
  		}
  		.my-foot{
			/*background-color:pink;*/
			margin:0 0 5px 0;
			color:#655d5d;
  		}
  		 .my-foot-box1{
			color:#655d5d;
  		}
  		.my-foot-box2{
			margin-left:10px;
			cursor:pointer;
  		}
  		.my-foot-box3{
  			width:100%;
  			height:100%;
			margin-left:10px;
			cursor:pointer;
  		}
		.my-foot-box3:hover{
			color:red;
  		}
  		.my-icon-heart{
  			color:#999;
  		}
  		.my-icon-heart:hover{
  			color:red;
  			cursor:pointer;
  		}
  		.my-load-more{
			width: 100%;
		    border-radius: 20px;
		    background-color: #a5a5a5;
		    height: 40px;
		    margin: 30px auto 60px;
		    padding: 10px 15px;
		    text-align: center;
		    font-size: 15px;
		    color: #fff;
		    cursor: pointer;
  		}
  		.my-load-more:hover{
  			background-color:#9B9B9B;
  		}
  		/*具体文章显示 小条目*/
  		.my-entries{
			height:48px;
			margin:10px 0;
  		}
  		/*具体文章显示 标题*/
  		/*.my-article-title{
			font-size: 34px;
		    font-weight: 700;
		    line-height: 1.3;
		    margin-top:10px;
		    /*text-align:center;*/
  		}*/
  		/*具体文章显示 具体内容*/
  		.my-article-content{
			font-size: 16px;
		    font-weight: 400;
		    line-height: 1.7;
		    word-wrap:break-word; /*纯英文溢出处理*/
		    word-break:break-all;  /*纯英文溢出处理*/
  		}
	
		/*更多的 公共类*/
  		.my-more{
  			float:right;
  			top:-15px;
  			cursor:pointer;
  			color:gray;
  		}
  		/*没有更多*/
  		.my-no-more{
  			position:fixed;
  			text-align:center;
  			top:50px;
  			left:38%;
  			width:18%;
  			height:30px;
  			line-height:30px;
  			/*border:1px solid green;*/
  			z-index:15;
  			display:none;
  			background-color:#dee8de;
  		}
  		/*返回顶部*/
  		.gotop{
  			width:50px;
  			height:50px;
  			/*background-color:red;*/
  			border:solid 1px #ccc;
  			text-align:center;
  			line-height:50px;
  			/*padding-top:16px;*/
  			font-size:20px;
  			cursor:pointer;
  			position:fixed;
  			right:23px;
  			bottom:100px;
  			color:#ccc;
  			display:none;
  		}
  		.gotop:hover{
  			background-color:#a59a9a;
  		}
  		/*个人分类*/
  		.my-type:hover{
			background-color:rgb(237,239,242);
  		}
  		/*css3 动画 加载时动画*/
  		.my-box1{
			animation:mymove1 0.6s ease-in-out infinite;
			animation-direction:alternate;
			/* Safari and Chrome */
			-webkit-animation:mymove1 0.6s ease-in-out infinite;
			-webkit-animation-direction:alternate;
  		}
  		.my-box2{
			animation:mymove2 0.6s ease-in-out infinite;
			animation-direction:alternate;
			/* Safari and Chrome */
			-webkit-animation:mymove2 0.6s ease-in-out infinite;
			-webkit-animation-direction:alternate;
  		}
  		@keyframes mymove1
		{
		from {width:80%;}
		to {width:50%;}
		}
		/*Safari and Chrome*/
		@-webkit-keyframes mymove1 
		{
		from {width:80%;}
		to {width:50%;}
		}
		@keyframes mymove2
		{
		from {width:50%;}
		to {width:80%;}
		}
		/*Safari and Chrome*/
		@-webkit-keyframes mymove2 
		{
		from {width:50%;}
		to {width:80%;}
		}
		/*点击爱心*/
		.heart{
			width: 10px;
			height: 10px;
			position: fixed;
			background: red;
			transform: rotate(45deg);
			-webkit-transform: rotate(45deg);
			-moz-transform: rotate(45deg);
			z-index:20;
		}
		.heart:after,.heart:before{
			content: '';
			width: inherit;
			height: inherit;
			background: inherit;
			border-radius: 50%;
			-webkit-border-radius: 50%;
			-moz-border-radius: 50%;
			position: absolute;
		}
		.heart:after{
			top: -5px;
		}
		.heart:before{
			left: -5px;
		}
		/*友情链接模块*/
		.container{
			display:block;
			width:100%;
			height:42px;	/*固定高？?*/
			/*background-color:green;*/
			text-align:center;
			line-height:42px;
			font-size:18px;
			margin-top:3px;
		}
		.my-friendship-links{
			display:block;
			background-color:#eee;
			width:49%;
			height:100%;
			float:left;
			margin-right:1%;
			/*line-height:100%;*/
			color:black;
			margin-top:7px;
			margin-bottom:7px;
		}
		.my-friendship-links:hover{
			background-color:rgb(235,236,241);
			color:black;
			text-decoration: none;
		}
		/*项目展示*/
		.my-item{
			position:relative;
			background-color:#eee;
			width:50%;
			height:165px;
			line-height:165px; 
			margin:10px auto;
		}
		.my-item a{
			display:block;
			width:100%;
			height:100%;
			text-decoration:none;
			color:black;
			font-weight: 700;
			font-size:30px;
			text-align: center;
		}
		.my-item a:hover{
			background-color:rgb(235,236,241);
		}
		.my-item .my-foot-box3 p{
			position:absolute;
			top:111px;
			left:72%;
			font-size: 42px;
		}
  </style>
</head>
<body>
	<!-- 导航条 开始 -->
	<div class="my-nav">
		<nav class=" navbar navbar-default " style="margin-bottom:0;">
			<div class=" my-nav-heard">
			  <div class="container-fluid">
			    <!-- 小屏 出现三条杠  自动适应  -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a style="margin-right:35px;" class="navbar-brand" href="/" ><i class="glyphicon glyphicon-user"></i>博客名称</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="my-homepage" id="my-homepage" ><a  href="/">首页</a></li>
			      </ul>
			      <ul class="nav navbar-nav">
			        <li class="my-show-item" id="my-show-item" ><a  href="/#/project">项目展示</a></li>
			      </ul>
				  <div class="navbar-form navbar-left">
				      <input onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;" type="text" class="form-control" placeholder="文章搜索" id="my-search-text">
				      <button  type="button" class="btn btn-default" id="my-search-btn">搜索</button>
			      </div>

			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">分类 <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="/#/NewActive">最新文章</a></li>
			            <li><a href="/#/alltype">个人分类</a></li>
			            <li><a href="#">最新留言</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="/#/project">项目展示</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</div>
		</nav>
	</div>
	<!-- 导航条结束 -->

	<!-- 中部版心 开始 -->
		<div class="my-banner">
			<div class="row">
				<!-- 文章详细 开始 -->
				<div class="col-xs-12 col-sm-8 col-md-8  col-lg-8 ">
					<div href="#" class="thumbnail">
						<!-- 从文件夹读取文件  文章 -->
						<div id="article">
							
						</div>
						<!-- 加载时候 显示的 盒子 -->
						<div class='my-txt panel panel-success' id="my-lodding" style="display:none;">
						    <a class='my-title' style="display:block;background-color:#eaeaea;width:43%;height:20px;"></a>
						    <div class='my-box1' style="margin:8px 0;background-color:#eaeaea;width:43%;height:16px;"></div>
						    <div class='my-box2' style="margin:8px 0;background-color:#eaeaea;width:43%;height:16px;"></div>

						    <div class='my-foot'style="height:16px;width:100%;">
						    	<span>
							    	<span style="color:#eaeaea;float:left;" class="glyphicon glyphicon-time"></span>
							    	<b style="float:left;background-color:#eaeaea;width:9%;height:16px;margin-left:8px;"></b>
						    	</span>
						    	<span>
							    	<span style="margin-left:8px;color:#eaeaea;float:left;" class="glyphicon glyphicon-link"></span>
							    	<b style="float:left;background-color:#eaeaea;width:9%;height:16px;margin-left:8px;"></b>
						    	</span>
						    	<span>
							    	<span style="margin-left:8px;color:#eaeaea;float:left;" class="my-icon-heart glyphicon glyphicon-heart"></span>
							    	<b style="float:left;background-color:#eaeaea;width:8%;height:16px;margin-left:8px;"></b>
						    	</span>

						    </div>
						</div>
							
							<!-- 阅读更多 开始 -->
							<div class="my-load-more" id="my-load-more">阅读更多</div>
							<!-- 阅读更多 结束 -->
					</div>
				</div>
				<!-- 文章详细 结束 -->

				<!-- 右侧文章分类 开始 -->
				<div class="col-xs-12 col-sm-4 col-md-4  col-lg-4 ">
					<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12  ">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">博客主 信息</h3>
						  </div>
						  <div class="panel-body">
						    访客量    阅读量。。？
						  </div>
						</div>
					</div>

					

					<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12  ">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">最新文章</h3>
						    <div class="glyphicon glyphicon-option-horizontal my-more" id="my-new-Articles-more" ></div>
						  </div>
						  <div class="panel-body" id="my-new-Articles">
						    
						  </div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12  ">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">个人分类</h3>
						    <div class="glyphicon glyphicon-option-horizontal my-more" id="my-new-Articles-classification-more" ></div>
						  </div>
						  <div class="panel-body" id="my-Articles-classification">
						    
						  </div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12  col-lg-12  ">
						<div class="panel panel-default">
						  <div class="panel-heading">
						    <h3 class="panel-title">最新评论</h3>
						  </div>
						  <div class="panel-body">
						    具体3
						  </div>
						</div>
					</div>

				</div>
				<!-- 右侧文章分类 结束 -->

			</div>
		</div>
	<!-- 中部版心 结束 -->

	<!-- 底部友情链接 开始 -->
		<div class="my-footer">
			<nav class="navbar navbar-default ">
			  <div class="container">
				<a class="my-friendship-links">联系我们</a>
				<a class="my-friendship-links">加入我们</a>
				<a href="http://caoleyun.xyz/" class="my-friendship-links">我的网站</a>
				<a href="https://github.com/caoleyun" class="my-friendship-links">GitHub</a>
				<a href="https://github.com/caoleyun" class="my-friendship-links">GitHub</a>
			  </div>
			</nav>
		</div>
	<!-- 底部友情链接 结束 -->


	<!-- 登入页面 开始-->
		<div class="my-sign-in" id="my-sign-in">
			<!-- <div class="my-mask"></div> -->
			<div class="my-form">
				<div class="panel panel-default">
			 		<div class="panel-heading">
						<form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" >
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  >
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox" > Check me out
						    </label>
						  </div>
						  <button type="submit" class="btn btn-default" id="my-Submit" >Submit</button>
						</form>
					</div>
			  </div>
			</div>
		</div>

	<!-- 返回顶部  开始-->
	<div class="gotop" id="gotop"><p class="glyphicon glyphicon-menu-up"></p></div>

	<!-- 没有更多 	 -->
	<div class="my-no-more" id="my-no-more">没有更多了</div>

  <!-- 引用jQuery和bootstarp自己的js-->
  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

	<script>

	// 定义   左侧  一次展现几个文章
	const start=0;
	const end=5;
	// 定义   右侧  一次展现几个文章
	const rightstart=0;
	const rightend=3;
	//定义 点击更多 一次添加多少
	const step=5;







	//小图标 点击事件
	$(document).ready(function(){
		console.log("as");
		//小类型 点击事件
		$("body").on('click',".my-foot-box2>i",function(ev){
		    let e=ev||window.event;
		    let target=e.target||e.srcElement;
		    //得到 当前点击的 类型
		    let title_type=$(target).html();
			// console.log("类型");
			location.href="?"+title_type+"#/type";
		});
		$("body").on('click',".my-foot-box2>span",function(ev){
		    let e=ev||window.event;
		    let target=e.target||e.srcElement;
		    //得到 当前点击的 类型
		    let title_type=$(target).siblings().html();
			// console.log("类型");
			location.href="?"+title_type+"#/type";
		});

		//点击 爱心 改变数量(只点击一次)
		$("body").on('click',".my-foot-box3>span",function(ev){
			let e=ev||window.event;
		    let target=e.target||e.srcElement;
		    let string=$(target).html().slice(1,-1);
		    //本地页面+1  后台+1 保存  去除点击事件
		    	//heart个数
		   		let heart=parseInt(parseInt(string)+1);
		    let string1=`(`+heart+`)`;
		    $(target).html(string1);

		    //后台+1 保存
		    let title=$(target).parent().parent().siblings(".my-title").html();
		    let title_type=$(target).parent().siblings(".my-foot-box2").find(".title_type").html();
		    console.log(title,title_type);
		    $.post(
		    	'./admin/change_heart.php',
		    	{"title":title,"title_type":title_type,"heart":heart},
		    	function(data){
		    		let Data=JSON.parse(data);
		    		console.log(Data);
		    		// console.log(data);
		    	}
		    );

		    // console.log(parseInt(string+3));
			console.log("小红心");

		});

		//点击 爱心 改变数量(只点击一次)(项目页)
			$("body").on("click",".my-foot-box3>p",function(ev){
				let e=ev||window.event;
			    let target=e.target||e.srcElement;
			    let string=$(target).html().slice(1,-1);
			    //本地页面+1  后台+1 保存  去除点击事件
			    	//heart个数
			   		let heart=parseInt(parseInt(string)+1);
			    let string1=`(`+heart+`)`;
			    $(target).html(string1);

			    //后台+1 保存
			    let project_name=$(target).parent().siblings("a").find("p").html();
			   
			    $.post(
			    	'./admin/change_item_heart.php',
			    	{"project_name":project_name,"heart":heart},
			    	function(data){
			    		// let Data=JSON.parse(data);
			    		// console.log(Data);
			    		// console.log(data);
			    	}
			    );

			    // console.log(parseInt(string+3));
				console.log("小红心");

			});
	});
		


	// ***非常耗时！！！！因为是文件操作**只是做了标题的搜索***********************************************搜索处理  
	
		//函数 *******************************************************搜索函数
		function search_article(leftstart,leftend,mytext){
			//得到 所搜框内容
			// let mytext=$("#my-search-text").val();
			// console.log("mytext");
			// console.log(mytext);
			if(mytext==""){
				console.log("no");
				return;
			}
			$("#my-load-more").css({display:"none"});//更多 消失
			$("#my-lodding").css({display:"block"});//加载条出现
			$.post(
				"./admin/search_article.php",
				{"start":leftstart,"end":leftend,"text":mytext},
				function(Data){
						//字符串 转json 对象
						let data=JSON.parse(Data);
						console.log(data);
						    	$("#my-lodding").css({display:"none"});//加载条 消失
								$("#my-load-more").css({display:"block"});//更多 出现
								for(let i=0;i<leftend-leftstart;i++){
						    		//判断是否 没有更多的文章了
						    		if(data[i]==null||data[i]==""){
						    			console.log("没有更多VVIP了");
						    			$("#my-no-more").html("没有更多了");
						    			$("#my-no-more").stop(true).fadeIn("normal",function(){
						    				$("#my-no-more").fadeOut(2000);
						    			});
						    			return;
						    		}
						    		let title=data[i].title;
						    		let title_type=data[i].title_type;
						    		let content=data[i].content;
						    		let time=data[i].time;
						    		let heart=data[i].heart;
						    		//找到 关键词 添加颜色 替换
						    		mytext=decodeURI(mytext); //URL编码！ 变变成中文

						    		title=title.replace(
						    			new RegExp(mytext,"g"),
						    			`<span style="background-color:#bce6a5;border-radius:50%;color:red;">`+mytext+`</span>`
						    			);
						    		
						    		let alldata1=`
										<div class='my-txt panel panel-success'>
										    <a class='my-title'>`+title+`</a>
										    <div class='my-content'>`+content+`...</div>
										    <div class='my-foot'>
										    	<span class='my-foot-box1'>
											    	<span class="glyphicon glyphicon-time"></span>
											    	<b>`+time+`</b>
										    	</span>
										    	<span class='my-foot-box2' >
											    	<span class="glyphicon glyphicon-link"></span>
											    	<i   class='title_type'>`+title_type+`</i>
											    </span>
											    <span class='my-foot-box3'>
											    	<span  class='my-icon-heart glyphicon glyphicon-heart'>(`+heart+`)</span>
											    </span>
										    </div>
										</div>
						    		`;


						    		// console.log(title,title_type,content,time);
						    		// 点击更多 追加节点
						    		$("#article").append(alldata1);//左侧 主显示 文章区域
						    	}
						    	
				}
			);
			
		}
		//搜索框按下时搜索
		$("#my-search-btn").click(function(){
			//当前 input框的 文字
			let mytext1=$("#my-search-text").val();
			// location.hsah="/search";
			let regu = "^[ ]+$";
			let re = new RegExp(regu);
			let TorF=re.test(mytext1);//全部为空 为 true
			if(mytext1!==""&&TorF!==true){
				$.post(
					"./admin/search_article.php",
					{"start":start,"end":end,"text":mytext1},
					function(Data){
						//字符串 转json 对象
						let data=JSON.parse(Data);
						if(data==""){
							$("#my-no-more").html("未找到您所搜索的内容");
							$("#my-no-more").stop(true).fadeIn("normal",function(){
						    	$("#my-no-more").fadeOut(2000);
						    });
						}else{
							location.href="?"+mytext1+"#/search";
						}
					}
				);
			}
		});
		//回车事件
		$("#my-search-text").keyup(function(){
			if(event.keyCode == 13){
				//当前 input框的 文字
				let mytext1=$("#my-search-text").val();
				
				let regu = "^[ ]+$";
				let re = new RegExp(regu);
				let TorF=re.test(mytext1);//全部为空 为 true
				if(mytext1!==""&&TorF!==true){
					$.post(
						"./admin/search_article.php",
						{"start":start,"end":end,"text":mytext1},
						function(Data){
							//字符串 转json 对象
							let data=JSON.parse(Data);
							if(data==""){
								$("#my-no-more").html("未找到您所搜索的内容");
								$("#my-no-more").stop(true).fadeIn("normal",function(){
							    	$("#my-no-more").fadeOut(2000);
							    });
							}else{
								location.href="?"+mytext1+"#/search";
							}
						}
					);
				}
			}
		});

	//返回顶部 显示与否  滚动条检测****************************************返回顶部
	$(document).ready(function(){
		//高度决定高低
		$(window).scroll(function(){
			let top=$(document).scrollTop();
			if(top>150){
				$("#gotop").css({"display":"block"});

			}else{
				$("#gotop").css({"display":"none"});
			}
		});
		//点击 回顶部
		$("#gotop").on('click',function(){
			$('body,html').animate({"scrollTop":"0px"});
		});
	});
	//返回 顶点击事件

	// 前端小路由 开始
		//路由初始化 开始 
	        function Router() {
			    this.routes = {};
			    this.currentUrl = '';
			}
			Router.prototype.route = function(path, callback) {
			    this.routes[path] = callback || function(){};//给不同的hash设置不同的回调函数
			};
			Router.prototype.refresh = function() {
			    // console.log(location.hash.slice(1));//获取到相应的hash值
			    this.currentUrl = location.hash.slice(1) || '/';//如果存在hash值则获取到，否则设置hash值为/
			    // console.log(this.currentUrl);
			    this.routes[this.currentUrl]();//根据当前的hash值来调用相对应的回调函数
			};
			Router.prototype.init = function() {
			    window.addEventListener('load', this.refresh.bind(this), false);
			    window.addEventListener('hashchange', this.refresh.bind(this), false);
			}
			//给window对象挂载属性
			window.Router = new Router();
			window.Router.init();
		// 路由初始化结束
	


			

		//加载10条文章
		////*******显示 左侧 文章 条目 开始  函数***********************************左侧文章 条目 开始

		    function loadArticle_left(leftstart,leftend,timeORtype){
		    		$("#my-load-more").css({display:"none"});//更多 消失
					$("#my-lodding").css({display:"block"});//加载条出现
		    		//读取文章
				    $.post(
				    	"/admin/get_article.php",
				    	{start:leftstart,end:leftend,timeORtype:timeORtype},
				    	function(Data){
				    		//字符串 转json 对象
				    		var data=JSON.parse(Data);
					    		// console.log(data);
					    			$("#my-lodding").css({display:"none"});//加载条 消失
									$("#my-load-more").css({display:"block"});//更多 出现
					    		for(let i=0;i<leftend-leftstart;i++){
						    		//判断是否 没有更多的文章了
						    		if(data[i]==null||data[i]==""){
						    			console.log("没有更多VVIP了");
						    			$("#my-no-more").html("没有更多了");
						    			$("#my-no-more").stop(true).fadeIn("normal",function(){
						    				$("#my-no-more").fadeOut(2000);
						    			});
						    			return;
						    		}
						    		let title=data[i].title;
						    		let title_type=data[i].title_type;
						    		let content=data[i].content;
						    		let time=data[i].time;
						    		let heart=data[i].heart;

						    		let alldata1=`
										<div class='my-txt panel panel-success'>
										    <a class='my-title'>`+title+`</a>
										    <div class='my-content'>`+content.slice(0,50)+`...</div>
										    <div class='my-foot'>
										    	<span class='my-foot-box1'>
											    	<span class="glyphicon glyphicon-time"></span>
											    	<b>`+time+`</b>
										    	</span>
										    	<span class='my-foot-box2' >
											    	<span class="glyphicon glyphicon-link"></span>
											    	<i   class='title_type'>`+title_type+`</i>
											    </span>
											    <span class='my-foot-box3'>
											    	<span  class='my-icon-heart glyphicon glyphicon-heart'>(`+heart+`)</span>
											    
											    </span>
										    </div>
										</div>
						    		`;

						    		// console.log(title,title_type,content,time);
						    		// 点击更多 追加节点
						    		$("#article").append(alldata1);//左侧 主显示 文章区域
						    	}
				    	}
				    );
				    // $("#my-load-more").css({display:"block"});
		    }
		////*******显示 左侧文章 条目 结束*************************************************左侧文章 条目 结束
		
		////*******显示 右侧 文章 条目 开始  函数  **************************最新文章  开始
		    function loadArticle_right(rightstart,rightend,timeORtype){
		    	$("#my-new-Articles").html("");
		    	
		    		//读取文章
				    $.post(
				    	"/admin/get_article.php",
				    	{start:rightstart,end:rightend,timeORtype:timeORtype},
				    	function(Data){
				    		//字符串 转json 对象
				    		var data=JSON.parse(Data);
					    		// console.log(data);
					    		for(let i=0;i<rightend-rightstart;i++){
						    		//判断是否 没有更多的文章了
						    		if(data[i]==null||data[i]==""){
						    			console.log("没有更多VVIP了");
						    			$("#my-no-more").html("没有更多了");
						    			$("#my-no-more").stop(true).fadeIn("normal",function(){
						    				$("#my-no-more").fadeOut(2000);
						    			});
						    			return;
						    		}
						    		let title=data[i].title;
						    		let title_type=data[i].title_type;
						    		let content=data[i].content;
						    		let time=data[i].time;
						    		let heart=data[i].heart;

						    		let alldata1=`
										<div class='my-txt panel panel-success'>
										    <a class='my-title'>`+title.slice(0,50)+`</a>
										    <div class='my-foot' style="margin-top:20px;">
										    	<span class='my-foot-box1'>
											    	<span class="glyphicon glyphicon-time"></span>
											    	<b>`+time+`</b>
										    	</span>
										    	<span class='my-foot-box2' >
											    	<span class="glyphicon glyphicon-link"></span>
											    	<i   class='title_type'>`+title_type+`</i>
											    </span>
											    <span class='my-foot-box3'>
											    	<span  class='my-icon-heart glyphicon glyphicon-heart'>(`+heart+`)</span>
											    	
											    </span>
										    </div>
										</div>
						    		`;


						    		// console.log(title,title_type,content,time);
						    		// 点击更多 追加节点
						    		$("#my-new-Articles").append(alldata1);//右侧 最新文章 
						    	}
				    	}
				    );
		    }

		    //*****************************************************最新文章 加号 + 点击事件
		    $("#my-new-Articles-more").click(function(){
		    	location.href='/#/NewActive';
		    });
		////*******显示 右侧文章 条目 结束  ********************************最新文章 结束

		//具体文章点击事件   开始 #article为左半部分   #my-new-Articles为最新文章
		    $("#article,#my-new-Articles").on('click','a.my-title',function(ev){
		    	$('body,html').scrollTop(0);
		    	$("#article").html("");
		    	$("#my-lodding").css({display:"block"});//加载条出现
		    	let e = ev || window.event; 
		    	let target=e.target||e.srcElement;
		    	
		    	let title=$(target).parents(".my-txt").find(".my-title").html().split(/<.+?>/).join("");
		    	let title_type=$(target).parents(".my-txt").find("i").html();
		    	let time=$(target).parents(".my-txt").find("b").html();
		    	let heart=$(target).parents(".my-txt").find(".my-foot-box3").find("span").eq(0).html();
		    

		    	sessionStorage.setItem("title", title);
		    	sessionStorage.setItem("title_type", title_type);
		    	sessionStorage.setItem("time", time);
		    	sessionStorage.setItem("heart", heart);

		   
		    	
		    	//交给后台找出 文章
		    	$.post(
		    		"./admin/find_article.php",
		    		{"title":title,"title_type":title_type},
		    		function(data){
		    			$("#my-lodding").css({display:"none"});//加载条 消失
		    			sessionStorage.setItem("content", data);
		    			var title = sessionStorage.getItem("title");
						var title_type = sessionStorage.getItem("title_type");
						var time = sessionStorage.getItem("time");
						var heart = sessionStorage.getItem("heart");

		    			let alldata1=`
		    				<div class='my-txt panel panel-success'>
		    					<div class='my-entries'>
		    						<div class='my-title' style="font-size: 34px;font-weight: 700;line-height: 1.3;margin:10px;color:black;">`+title+`</div>
		    						<div class='my-foot' >

										<span class='my-foot-box1'>
											<span class="glyphicon glyphicon-time"></span>
											<b>`+time+`</b>
										</span>

										<span class='my-foot-box2' >
											<span class="glyphicon glyphicon-link"></span>
											<i   class='title_type'>`+title_type+`</i>
										</span>

										<span class='my-foot-box3'>
									    	<span  class='my-icon-heart glyphicon glyphicon-heart'>`+heart+`</span>
									    
									    </span>

								    </div>
		    					</div>
		    					<div class='my-article-content' style="margin:36px 5px 0 36px;">`+data+`</div>

		    					

		    				</div>
		    			`;
		    			

				    	// console.log(title,title_type,content,time);
				    	// 点击更多 追加节点
				 		// $("#my-load-more").css({display:"none"});
				 		$("#article").html(alldata1);
		    		}
		    	);
		    	//跳转到 具体文章 操作
		    	location.href="/#/active";
	        });
		//具体文章点击事件   结束

		//具体文章显示 --具体文章路由 开始  (为了 刷新)
			function article_display(){
				$("#my-lodding").css({display:"block"});//加载条出现
				var title = sessionStorage.getItem("title");
				var title_type = sessionStorage.getItem("title_type");
				var time = sessionStorage.getItem("time");
				var content = sessionStorage.getItem("content");
				var heart = sessionStorage.getItem("heart");

				

			    let alldata1=`
		    				<div class='my-txt panel panel-success'>
		    					<div class='my-entries'>
		    						<div class='my-title' style="font-size: 34px;font-weight: 700;line-height: 1.3;margin:10px;color:black;">`+title+`</div>
		    						<div class='my-foot'>

										<span class='my-foot-box1'>
											<span class="glyphicon glyphicon-time"></span>
											<b>`+time+`</b>
										</span>

										<span class='my-foot-box2' >
											<span class="glyphicon glyphicon-link"></span>
											<i   class='title_type'>`+title_type+`</i>
										</span>

										<span class='my-foot-box3'>
									    	<span  class='my-icon-heart glyphicon glyphicon-heart'>`+heart+`</span>
									    	
									    </span>

								    </div>
		    					</div>
		    					<div class='my-article-content' style="margin:36px 5px 0 36px;">`+content+`</div>
		    					
		    				</div>
		    			`;
				// console.log(title,title_type,content,time);
				// 点击更多 追加节点
				$("#my-lodding").css({display:"none"});//加载条 消失
				$("#article").html(alldata1);
			}
		//具体文章显示 结束

		//右侧 文章分类  处理 开始 *****************************************个人分类 右侧  开始
			function Articles_classification(leftstart,leftend){

				// var title = sessionStorage.getItem("title");
				// var title_type = sessionStorage.getItem("title_type");
				// var time = sessionStorage.getItem("time");

				//得到 个人分类的 类名  及结构
				$.post(
		    		"./admin/Articles_classification.php",
		    		function(data){
		    			let k=leftstart;
		    			//限制 不超过3条数据
		    			while(data.split('*')[k]!=""&&k<leftend){

		    				
		    				
		    				// console.log(k);
		    				//上类型节点
							let alldata1=`
									<div class="panel panel-default" style="background-color:#f5f5f5;border-color:#ccc;">
										<div class="panel-heading" style="position:relative;height:37px;background-color:#f5f5f5;">
											<h3 class="panel-title my-type" style="cursor:pointer;position:absolute;top:0;left:0;width:100%;padding:10px 15px;">`+data.split('*')[k]+`</h3>
										</div>
									</div>
							    `;
							$("#my-Articles-classification").prepend(alldata1);

		    				k++;
		    			}

		    			// console.log(data.split('*'));
		    		}
		    	);
				
				
		    	// $('#my-Articles-classification').find('.panel-body').css({"color":"green"});
		    	// // 给类型节点 添加监听
		    	$("#my-Articles-classification").on('click','.panel-title',function(ev){
		    		$('body,html').scrollTop(0);
					let e = ev || window.event; 
		    		let target=e.target||e.srcElement;
		    		//得到 当前点击的 类型
		    		let title_type=$(target).html();
					//article为左边 显示区域
		    		$("#article").html("");
					location.href="?"+title_type+"#/type";
				});
			}
		//右侧 文章分类 处理 结束********************************************个人分类 结束
		
		//左侧 文章分类  开始 *****************************************个人分类 左侧侧 加号++  开始
		function Articles_classification_all(leftstart,leftend){
				$("#my-load-more").css({display:"none"});//更多 消失
				$("#my-lodding").css({display:"block"});//加载条出现

				//得到 个人分类的 类名  及结构
				$.post(
		    		"./admin/Articles_classification.php",
		    		function(data){
		    			let k=leftstart;
		    			$("#my-lodding").css({display:"none"});//加载条 消失
						$("#my-load-more").css({display:"block"});//更多 出现
		    			//限制 不超过3条数据
		    			while(data.split('*')[k]!=""&&k<leftend){
		    				console.log(k);
		    				console.log(leftend);
		    				console.log(data.split('*')[k]);
		    				if(data.split('*')[k]==null||data.split('*')[k]==""){
						    	console.log("没有更多VVIP了");
						    	$("#my-no-more").html("没有更多了");
						    	$("#my-no-more").stop(true).fadeIn("normal",function(){
						    				$("#my-no-more").fadeOut(2000);
						    			});
						    	return;
						    }
		    				
		    				
		    				// console.log(k);
		    				//上类型节点
							let alldata1=`
									<div class="panel panel-default" style="background-color:#f5f5f5;border-color:#ccc;">
										<div class="panel-heading" style="position:relative;height:37px;background-color:#f5f5f5;">
											<h3 class="panel-title my-type" style="cursor:pointer;position:absolute;top:0;left:0;width:100%;padding:10px 15px;">`+data.split('*')[k]+`</h3>
										</div>
									</div>
							    `;
							$("#article").prepend(alldata1);

		    				k++;
		    			}

		    			// console.log(data.split('*'));
		    		}
		    	);
				
				
		    	// $('#my-Articles-classification').find('.panel-body').css({"color":"green"});
		    	// // 给类型节点 添加监听
		    	$("#article").on('click','.panel-title',function(ev){
					var e = ev || window.event; 
		    		var target=e.target||e.srcElement;
		    		//得到 当前点击的 类型
		    		var title_type=$(target).html();
		  
					//article为左边 显示区域
		    		$("#article").html("");
				    
					location.href="?"+title_type+"#/type";
				});
			}
		//左侧 文章分类 处理 结束********************************************个人分类 结束
		
		//**************************************************个人分类 加号 + 点击事件 开始
			$("#my-new-Articles-classification-more").click(function(){
				location.href='/#/alltype';
				// console.log("s");
			});
		//**************************************************个人分类 加号 + 点击事件 结束
		



		// ***********************************************项目展示操作
		function ShowItem(rightstart,rightend){
			$("#my-load-more").css({display:"none"});//更多 消失
				$("#my-lodding").css({display:"block"});//加载条出现

				//得到 个人分类的 类名  及结构
				$.post(
		    		"./admin/show_item.php",
		    		{"start":rightstart,"end":rightend},
		    		function(Data){
		    			$("#my-lodding").css({display:"none"});//加载条 消失
						$("#my-load-more").css({display:"block"});//更多 出现
		    			//字符串 转json 对象
				    		var data=JSON.parse(Data);
					    		// console.log(data);
					    		for(let i=0;i<rightend-rightstart;i++){
						    		//判断是否 没有更多的文章了
						    		if(data[i]==null||data[i]==""){
						    			console.log("没有更多VVIP了");
						    			$("#my-no-more").html("没有更多了");
						    			$("#my-no-more").stop(true).fadeIn("normal",function(){
						    				$("#my-no-more").fadeOut(2000);
						    			});
						    			return;
						    		}
						    		let project_name=data[i].project_name;
						    		let project_link=data[i].project_link;
						    		let heart=data[i].heart;

						    		let alldata1=`
										<div class="my-item">
											<a href="`+project_link+`">
												<p>`+project_name+`</p>
											</a>
											<span class='my-foot-box3'>
											    <p  class='my-icon-heart glyphicon glyphicon-heart'>(`+heart+`)</p>
											    
											</span>
										</div>
						    		`;


						    		
						    		// 追加节点
						    		$("#article").prepend(alldata1); 
						    	}

		    			console.log(data.split('*'));
		    		}
		    	);

		}
		


		// 所有路由都显示的 开始*************************************************
		
			Articles_classification(rightstart,rightend);//右侧 文章分类 处理******个人分类

			//*****最新文章 3条? 分类 开始   右侧 **********************最新文章
		    // window.rightstart=0;
		    // window.rightend=2;
		    loadArticle_right(rightstart,rightend,"time");
		    //*****最新文章 分类 结束 右侧 *********************最新文章
		
		// 所有路由都显示的 结束*************************************************



		// 路由初始地址  http://localhost/#/***    要有#  
		Router.route('/', function() {
		    //导航条 变色
		    $("#my-homepage").css({"background-color":"#eee"});//设置首页
		    $("#my-show-item").css({"background-color":""});//去除项目色
			// window.location.reload();
		    console.log("主页");
		    $('body,html').scrollTop(0);
		    //初始化  让 节点清空 左侧
		    //article为左边 显示区域
		    $("#article").html("");


		    

		    //****** 左侧 文章显示处理开始 文章条目
		    loadArticle_left(start,end,"time");

		    //阅读更多 点击事件 左侧文章显示********************************阅读更多  主页
		    let timestart=start;//当 左侧文章条目按时间列出时 的 起始下标
			let timeend=end;//当 左侧文章条目按时间列出时 的 结束下标
			//存在 事件累加  需要 解除之前的 绑定
		    $("#my-load-more").off("click").on("click",function(){
				    timestart=timeend;
					timeend=timestart+step;
			    	loadArticle_left(timestart,timeend,"time");
			    	// console.log(timestart,timeend);
		    	// console.log("点击");
		    });

		    //*******左侧 文章显示处理结束********************************阅读更多 
		});

		//最新文章 列表
		Router.route('/NewActive', function() {
			//导航条 变色
		    $("#my-homepage").css({"background-color":""});//去除首页色
		    $("#my-show-item").css({"background-color":""});//去除项目色
			// window.location.reload();
		    console.log("NewActive");
		    $('body,html').scrollTop(0);
		    //初始化  让 节点清空 左侧
		    //article为左边 显示区域
		    $("#article").html("");
		    // window.lefttype="time";
		    // $("#my-load-more").css({display:"block"});

		    

		    //****** 左侧 文章显示处理开始 文章条目
		    loadArticle_left(start,end,"time");

		    //阅读更多 点击事件 左侧文章显示********************************阅读更多  主页
		    let timestart=start;//当 左侧文章条目按时间列出时 的 起始下标
			let timeend=end;//当 左侧文章条目按时间列出时 的 结束下标
			//存在 事件累加  需要 解除之前的 绑定
		    $("#my-load-more").off("click").on("click",function(){
				    timestart=timeend;
					timeend=timestart+step;
			    	loadArticle_left(timestart,timeend,"time");
			    	// console.log(timestart,timeend);
		    	// console.log("点击");
		    });

		    //*******左侧 文章显示处理结束********************************阅读更多 
		});


		// 具体文章路由
		Router.route("/active",function(){
			//导航条 变色
		    $("#my-homepage").css({"background-color":""});//去除首页色
		    $("#my-show-item").css({"background-color":""});//去除项目色
			$('body,html').scrollTop(0);
			$("#article").html("");
			//消失 阅读更多 条
			$("#my-load-more").css({display:"none"});
			//article为左边 显示区域
		    // $("#article").html("");

		
		    
			// $("html,body").animate({scrollTop:"0px"},0);
			
			//具体文章显示 --具体文章路由 开始  
			article_display();
			//具体文章显示 结束
		});

		//个人分类 的
		Router.route("/type", function() {
			//导航条 变色
		    $("#my-homepage").css({"background-color":""});//去除首页色
		    $("#my-show-item").css({"background-color":""});//去除项目色
			$('body,html').scrollTop(0);
			$("#article").html("");
			// let title_type=sessionStorage.getItem("classification_title_type");
			let title_type=location.href.split("/")[3].slice(1,-1);
			// console.log("里边");
			// console.log(mytype);
			//再刷新 该路由时候  记住 类型   左侧继续显示 
				loadArticle_left(start,end,title_type);

				//阅读更多 点击事件 左侧文章显示********************************阅读更多 个人分类页的更多
				let timestart=start;//当 左侧文章条目按时间列出时 的 起始下标
				let timeend=end;//当 左侧文章条目按时间列出时 的 结束下标
				//存在 事件累加  需要 解除之前的 绑定
			    $("#my-load-more").off("click").on("click",function(){
				    timestart=timeend;
					timeend=timestart+step;
			    	loadArticle_left(timestart,timeend,title_type);
			    	// console.log("点击");
				});
		    	// console.log(timestart,timeend);

			//*******左侧 文章显示处理结束********************************阅读更多 
			
		});

		//个人分类 的  所有的 类型 列表
		Router.route("/alltype", function() {
			//导航条 变色
		    $("#my-homepage").css({"background-color":""});//去除首页色
		    $("#my-show-item").css({"background-color":""});//去除项目色

			$('body,html').scrollTop(0);
			$("#article").html("");
			$("#my-load-more").css({display:"block"});
			console.log("alltype页面");
			Articles_classification_all(start,end);

			//类型 页面 更多
				let timestart=start;//当 左侧文章条目按时间列出时 的 起始下标
				let timeend=end;//当 左侧文章条目按时间列出时 的 结束下标
				//存在 事件累加  需要 解除之前的 绑定
			    $("#my-load-more").off("click").on("click",function(){
				    timestart=timeend;
					timeend=timestart+step;
			    	Articles_classification_all(timestart,timeend);
			    	// console.log("点击");
				});
		});

		//添加文章
		Router.route('/admin', function() {
			//导航条 变色
		    $("#my-homepage").css({"background-color":""});//去除首页色
		    $("#my-show-item").css({"background-color":""});//去除项目色

			//弹出登入框 开始
			var a=document.documentElement.scrollTop;
			$("#my-sign-in").css({"top":a});
			// console.log(a);
		    $("#my-sign-in").fadeIn(300);
		      	//禁止滚动条(默认是没有附加这个样式类的）
		      	//当还原时候，只需要把属性重置scroll就可以了
				// document.documentElement.style.overflowY = 'scroll'; 
			//禁止滚动条(默认是没有附加这个样式类的）
			document.documentElement.style.overflowY = 'hidden';

	
	
			//  提交事件 验证 
			$("#my-Submit").click(function(){
				// 获取表单数据
				var exampleInputEmail1=$("#exampleInputEmail1").val();
				var exampleInputPassword1=$("#exampleInputPassword1").val()

				//提交后台验证
				$.post(
					"/txt/password.php",
					{exampleInputEmail1:exampleInputEmail1,exampleInputPassword1:exampleInputPassword1},
					function(result){
						// console.log(result);
						// 成功后 操作
						if(result=="ok"){
							console.log("sdcb");
							setTimeout("window.location.href='/admin/index.html'",300);
						}else{
							console.log("密码或账号错误");
						}
					}
				);
			});
		});

		//搜索结果
		Router.route('/search',function(){
			//导航条 变色
		    $("#my-homepage").css({"background-color":""});//去除首页色
		    $("#my-show-item").css({"background-color":""});//去除项目色

			$('body,html').scrollTop(0);
			$("#article").html("");
			// $("#my-load-more").css({display:"none"});
			console.log("search");
			// let mytext=sessionStorage.getItem("mytext");

			// $("#my-search-btn").off("click").on("click",function(){
			// 	console.log("sd");
			// 	// location.hsah="/search";
			// 	location.hash='/search';
			// 	// location.href="?"+title_type+"#/search";
			// });
			
 
			let mytext=location.href.split("/")[3].slice(1,-1);
			
			search_article(start,end,mytext);

			//类型 页面 更多
				let timestart=start;//当 左侧文章条目按时间列出时 的 起始下标
				let timeend=end;//当 左侧文章条目按时间列出时 的 结束下标
				//存在 事件累加  需要 解除之前的 绑定
			    $("#my-load-more").off("click").on("click",function(){
				    timestart=timeend;
					timeend=timestart+step;
			    	search_article(timestart,timeend,mytext);
			    	// console.log("点击");
				});
		});


		// 项目展示
		Router.route('/project',function(){
			//导航条 变色
		    $("#my-homepage").css({"background-color":""});//去除首页色
		    $("#my-show-item").css({"background-color":"#eee"});//去添加项目色

			console.log("project");
			$('body,html').scrollTop(0);
			$("#article").html("");
			//消失 阅读更多 条
			$("#my-load-more").css({display:"none"});

			//显示项目
			ShowItem(start,end);

			//类型 页面 更多
				let timestart=start;//当 左侧文章条目按时间列出时 的 起始下标
				let timeend=end;//当 左侧文章条目按时间列出时 的 结束下标
				//存在 事件累加  需要 解除之前的 绑定
			    $("#my-load-more").off("click").on("click",function(){
				    timestart=timeend;
					timeend=timestart+step;
			    	ShowItem(timestart,timeend);
			    	// console.log("点击");
				});


			
				
				
		});

	// 前端小路由 结束
	
	// 
		

    </script>

	<!-- 爱心特效 -->
    <script>
		//封装一个 爱心类
		function Heart(xx,yy){
			this.left=xx;
			this.top=yy;
			this.backgroundColor=randomColor();//随机产生颜色
			this.init();
		}

		Heart.prototype.init=function(){
			//创建DOM 添加属性
			this.dom=document.createElement("div");
			this.dom.className="heart";
			//追加DOM元素
			document.body.appendChild(this.dom);

			//设置样式
			this.dom.style.left=this.left+"px";
			this.dom.style.top=this.top+"px";
			this.dom.style.backgroundColor=this.backgroundColor;


			this.fly();//向上飞
		}
		//向上飞
		Heart.prototype.fly=function(){
			let self=this;
			$(this.dom).animate({
                'top': this.top-100,
                '-moz-opacity':0,
                '-khtml-opacity':0,
                'opacity':0
            }, 2000,function(){
            	self.none();
            })

		}

		Heart.prototype.none=function(){
			//移除DOM
			document.body.removeChild(this.dom);
		}

		//随机颜色 函数  ~~保留小数的整数部分
		function randomColor(){
			return "rgb("+(~~(Math.random()*255))+","+(~~(Math.random()*255))+","+(~~(Math.random()*255))+")";
		}


		$(window,document).on("click",function(e){
			let xx=e.clientX;
			let yy=e.clientY;
			// console.log(xx);
			// console.log(yy);
			// console.log("sdf");
			new Heart(xx,yy);
		});
    </script>

	<!-- canvas 背景特效 -->
	<script>
		!function() {
			    function o(w, v, i) {
			        return w.getAttribute(v) || i
			    }
			    function j(i) {
			        return document.getElementsByTagName(i)
			    }
			    function l() {
			        var i = j("script")
			          , w = i.length
			          , v = i[w - 1];
			        return {
			            l: w,
			            z: o(v, "zIndex", -1),
			            o: o(v, "opacity", 0.5),
			            c: o(v, "color", "30,199,104"),
			            n: o(v, "count", 99)
			        }
			    }
			    function k() {
			        r = u.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
			        n = u.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
			    }
			    function b() {
			        e.clearRect(0, 0, r, n);
			        var w = [f].concat(t);
			        var x, v, A, B, z, y;
			        t.forEach(function(i) {
			            i.x += i.xa,
			            i.y += i.ya,
			            i.xa *= i.x > r || i.x < 0 ? -1 : 1,
			            i.ya *= i.y > n || i.y < 0 ? -1 : 1,
			            e.fillRect(i.x - 0.5, i.y - 0.5, 1, 1);
			            for (v = 0; v < w.length; v++) {
			                x = w[v];
			                if (i !== x && null !== x.x && null !== x.y) {
			                    B = i.x - x.x,
			                    z = i.y - x.y,
			                    y = B * B + z * z;
			                    y < x.max && (x === f && y >= x.max / 2 && (i.x -= 0.03 * B,
			                    i.y -= 0.03 * z),
			                    A = (x.max - y) / x.max,
			                    e.beginPath(),
			                    e.lineWidth = A / 2,
			                    e.strokeStyle = "rgba(" + s.c + "," + (A + 0.2) + ")",
			                    e.moveTo(i.x, i.y),
			                    e.lineTo(x.x, x.y),
			                    e.stroke())
			                }
			            }
			            w.splice(w.indexOf(i), 1)
			        }),
			        m(b)
			    }
			    var u = document.createElement("canvas"), s = l(), c = "c_n" + s.l, e = u.getContext("2d"), r, n, m = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(i) {
			        window.setTimeout(i, 1000 / 45)
			    }
			    , a = Math.random, f = {
			        x: null,
			        y: null,
			        max: 20000
			    };
			    u.id = c;
			    u.style.cssText = "position:fixed;top:0;left:0;z-index:" + s.z + ";opacity:" + s.o;
			    j("body")[0].appendChild(u);
			    k(),
			    window.onresize = k;
			    window.onmousemove = function(i) {
			        i = i || window.event,
			        f.x = i.clientX,
			        f.y = i.clientY
			    }
			    ,
			    window.onmouseout = function() {
			        f.x = null,
			        f.y = null
			    }
			    ;
			    for (var t = [], p = 0; s.n > p; p++) {
			        var h = a() * r
			          , g = a() * n
			          , q = 2 * a() - 1
			          , d = 2 * a() - 1;
			        t.push({
			            x: h,
			            y: g,
			            xa: q,
			            ya: d,
			            max: 6000
			        })
			    }
			    setTimeout(function() {
			        b()
			    }, 100)
			}();
	</script>

	<canvas id="c_n4" width="860" height="958" style="position: fixed; top: 0px; left: 0px; z-index: -1; opacity: 0.5;  color:green;"></canvas>


</body>
</html>
