<?php
  require_once('entities/Db.php'); 
  require_once('entities/Product.php'); 
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
					$product = Db::getProductById($currentProductId);
					?>
					<div class="order-item">
						<div class="order-img">
							<img class="order-img" src="img/products/<?=$product->getImage()?>">
						</div>
						<div class="order-desc">
							<h4 class="order-title"><?=$product->getTitle()?></h4>
							<div class="order-price"><?=$product->getPrice()?> ₽</div>
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
						<input type="hidden" name="productTitle" value="<?=$product->getTitle()?>">
						<input type="hidden" name="productId" value="<?=$product->getId()?>">
						<input type="hidden" name="productPrice" value="<?=$product->getPrice()?>">
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
