    <link href="/css/signin.css" rel="stylesheet">
	<div class="container">
		<?session_start(); 
			if(isset($_SESSION['error'])) { ?>
				<div class="alert alert-danger">
					<?echo $_SESSION['error'];?>
				</div>
				<?unset($_SESSION['error']);
			} 	?>
		
		<form class="form-signin" role="form" method="POST" action="/index.php/auth">
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<h2 class="form-signin-heading">Авторизация</h2>
			<input name="id" type="text" class="form-control" value="<?if(isset($_GET['id'])) echo $_GET['id'];?>" placeholder="email" required autofocus>
			<input name="password" type="password" class="form-control" placeholder="Пароль" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
