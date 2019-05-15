<?php
  require_once('entities/Product.php'); 
  require_once('entities/Db.php'); 
  session_start();
  if (isset($_SESSION['login']) && $_SESSION['login'] =="on"){

  }else{
	  header('Location:index.php');
  }
  $title = 'Добавить товар'
?>
<?php include('./templates/_head.php'); ?>

	<!-- header -->
	<div class="header admin-header">
		<div class="row">
			<div class="col-md-10">
				<div class="site-logo">
					Админ панель
				</div>
			</div>
			<div class="col-md-2">
				<div class="admin-link">
					<a href="./logout.php">
						<img width="38" src="../img/icons/logout.svg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- content block -->
			<div class="row">
				<div class="col-12">
					<div class="title-1">Добавить товар</div>

					<form action="add-new.php" method="POST" id="add-form" enctype="multipart/form-data">
						<div class="form-group">
							<input name="title" type="text" class="form-control" placeholder="Название">
						</div>
						<div class="form-group">
							<select class="form-control" name="category">
								<option value="1">Кольца</option>
								<option value="2">Браслеты</option>
								<option value="3">Подвески</option>
								<option value="4">Серьги</option>
								<option value="5">Комплекты</option>
							</select>
						</div>
						<div class="form-group">
							<input name="price" type="text" class="form-control"  placeholder="Цена">
						</div>

						<div class="form-check form-check-inline">
							<input name="sale" class="form-check-input" type="checkbox" id="sale" value="1">
							<label class="form-check-label" for="sale">распродажа</label>
						</div>
						<div class="form-check form-check-inline">
							<input  name="new" class="form-check-input" type="checkbox" id="new" value="1">
							<label class="form-check-label" for="new">новинка</label>
						</div>

						<div class="form-group pt-3">
							<label for="image">Фото:</label>
							<input name="image" type="file" class="form-control-file" id="image">
						</div>

						<div class="form-group pt-3">
							<label for="image_prev">Фото превью (350x350px):</label>
							<input name="image_prev" type="file" class="form-control-file" id="image_prev">
						</div>

						<div class="form-group">
							<div class="form-group">
								<label for="description">Описание:</label>
								<textarea name="description" class="form-control" id="description" rows="3"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" value="Добавить">
						</div>
					</form>

				</div>

			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
