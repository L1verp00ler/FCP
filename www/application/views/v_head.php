<?php header('Content-type: text/html; charset=utf-8')?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>ФК Палех</title>
    <link href="/css/bootstrapc.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="/css/parik.jpg">
    <script src="/js/jquery.js"></script>
</head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">ФК Палех</a>
        </div>
        <div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">				
            
			<?$uri = $_SERVER['REQUEST_URI'];?>
			
			<?
				if(isset($session['role'])){
					if($session['role'] == 2){
						
					
						if($uri == "/person") 
							echo "<li class='active'><a href='/person'>&nbsp;&nbsp;Состав команды&nbsp;&nbsp;</a></li>";
						else 
							echo "<li><a href='/person'>&nbsp;&nbsp;Состав команды&nbsp;&nbsp;</a></li>";?>
					
				<?}?>
			<?}?>
				
			</ul>
				
			<? if(!isset($session['login'])){ ?>
				<ul class="nav navbar-nav">	
					<li><a href='/masters'>Наша команда</a></li>
					<li><a href='/foto'>Фотогалерея</a></li>
					<li><a href='/about'>О нас</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<? if(strspn($uri,"/auth") == 5) {?>
						<li class="active"><a href="/auth">Войти&nbsp;&nbsp;&nbsp;</a></li>
					<?}else{?>
						<li><a href="/auth">Войти&nbsp;&nbsp;&nbsp;</a></li>
					<?}?>
				</ul>
			<? }else{ ?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/logout">Выйти</a></li>
				</ul>
			<? } ?>
        </div><!--/.nav-collapse -->
      </div>
    </div>