<?php
	require_once('entities/Db.php'); 
  $title = 'Описание изделия'
?>
<?php include('./templates/_head.php'); ?>

	<!-- header -->
	<?php include('./templates/_header.php'); ?>

	<!-- white-plate -->
	<div class="white-plate product-page">
		<div class="container-fluid">
			<!-- content block -->
			<div class="row">
				<!-- Left aside -->
				<?php include('./templates/_aside.php'); ?>
				<!-- // Left aside -->
				<!-- Center Part -->
				<div class="col-md-9">

					<?php 
					$currentProductId = intval($_GET['id']);
					$product = Db::getProductById($currentProductId);
					?>
					<div class="product-title"><?php echo $product->getTitle() ?></div>

					<div class="row">
						<div class="col-6 ">
						    <div class="product-page-img">
								<img id="zoom-image"src="img/products/<?php echo $product->getImage() ?>" alt="Изображение изделия">
								<div id="zoom-result" class="img-zoom-result"></div>
							</div>
						</div>
						<div class="col-6">
							<div class="product-price"><?php echo $product->getPrice() ?> руб</div>
							<a href="order.php?id=<?php echo $product->getId() ?>" class="product-btn-order">
								Сделать заказ
							</a>
							<div class="product-desc">
								<?php echo $product->getDescription() ?>
							</div>

						</div>
					</div>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->
	<script src="/js/zoom.js"></script>
	
	<?php include('./templates/_footer.php'); ?>
