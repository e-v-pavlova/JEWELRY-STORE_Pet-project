<?php
  require_once('config.php'); 
  $title = 'Оформить заказ';
?>
<?php include('./templates/_head.php'); ?>

	<!-- header -->
	<?php include('./templates/_header.php'); ?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<?php include('./templates/_aside.php'); ?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9">

					<div class="title-1">Сделать заказ</div>
                    <?php 
					$currentProductId = intval($_GET['id']);
					$sql = "SELECT*FROM products WHERE id = '$currentProductId'";
					$result = $db -> query($sql);
					$product = $result -> fetch(PDO::FETCH_ASSOC);
					?>
					<div class="order-item">
						<div class="order-img">
							<img class="order-img" src="img/products/<?=$product['image']?>">
						</div>
						<div class="order-desc">
							<h4 class="order-title"><?=$product['title']?></h4>
							<div class="order-price"><?=$product['price']?> ₽</div>
						</div>
					</div>

					<form method="POST" action="mail.php" id="order-form">
						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Имя и Фамилия">
						</div>
						<div class="form-group">
							<input name="phone" type="text" class="form-control" placeholder="Телефон">
						</div>
						<div class="form-group">
							<input name="email" type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input name="adress" type="text" class="form-control" placeholder="Адрес">
						</div>
						<input type="hidden" name="productTitle" value="<?=$product['title']?>">
						<input type="hidden" name="productId" value="<?=$product['id']?>">
						<input type="hidden" name="productPrice" value="<?=$product['price']?>">
						<div class="form-group">
							<input type="submit" class="btn" value="Оформить заказ">
						</div>
					</form>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php include('./templates/_footer.php'); ?>
