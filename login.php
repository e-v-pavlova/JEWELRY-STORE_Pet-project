<?php
  $title = 'Вход'
?>
<?php include('./templates/_head.php'); ?>


	<!-- header -->
	<div class="header text-center login-header">
		<a href="index.php" class="site-logo">
			<img width="220" src="img/LogoSMIRNOV24-6.png" alt="SMIRNOV - Jewelry studio">
		</a>
	</div>

	<!-- white-plate -->
	<div class="white-plate white-plate--login">
		<div class="container-fluid">


			<form action="check-login.php" method="POST" id="login-form">
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Пароль">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary btn-block" value="Войти">
				</div>
			</form>
			<p class="text-center"><a href="index.php" class="btn-secondary">Вернуться назад</a></p>
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
