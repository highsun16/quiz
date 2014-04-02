<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>

		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url();?>assets/css/font-awesome.min.css">
		<style>
			body {
				margin-top: 45px;
			}
		</style>
		<script src="<?php echo $this->config->base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo $this->config->base_url();?>assets/js/jquery.redirect.js"></script>
		<script src="<?php echo $this->config->base_url();?>assets/js/jquery.cookie.js"></script>
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="<?php echo $this->config->base_url();?>" class="navbar-brand">QUIZ</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">


					<ul class="nav navbar-nav navbar-right">
					<li id = 'register_li'><a href="<?php echo $this->config->base_url();?>auth/create_user" >注册</a></li>
					<li id = 'user_btn'><a href="<?php echo $this->config->base_url();?>auth/login" >登录</a></li>
					<li id = 'logout' class = 'hidden'><a href="<?php echo $this->config->base_url();?>auth/logout" >登出</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
					<li id = 'add_ques' class = 'hidden'><a href = "<?php echo $this->config->base_url();?>admin/add_question">添加题目</a></li>
					<li id = 'list_ques' class = 'hidden'><a href = "<?php echo $this->config->base_url();?>admin/list_questions">列出题目</a></li>
					<li id = 'search_ques' class = 'hidden'><a href = "<?php echo $this->config->base_url();?>admin/search_question">查找题目</a></li>
					<li id = 'add_quiz' class = 'hidden'><a href = "<?php echo $this->config->base_url();?>admin/add_quiz">生成试题</a></li>
					<li id = 'score' class = 'hidden'><a href = "<?php echo $this->config->base_url();?>user/score">成绩</a></li>
					</ul>
				</div>
			</div>
		</div>
