<?php
	require_once('entities/Product.php'); 
	require_once('entities/Db.php'); 
  $title = 'Главная страница'
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
				<div class="col-md-9 col-lg-10">
					<div class="row cards">
                    
					<?php
                    if(isset($_GET['category'])) {
						$currentProductCategory= intval($_GET['category']);	
						$products = Db::getProductsListByCategory($currentProductCategory);
					}else{
						$products = Db::getProductsList();
					}
					foreach ($products as $product){
						include('./templates/_product-item.php');
					} 
                    ?>

					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<script src="/js/check-images-sizes.js"></script>

	<?php include('./templates/_footer.php'); ?>