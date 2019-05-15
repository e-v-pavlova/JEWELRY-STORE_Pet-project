<div class="col-sm-6 col-md-6 col-lg-4">
    <article class="card mb-4">

        <a class="product-img" href="product-page.php?id=<?php echo $product->getId() ?>">
            <img src="img/products-preview/<?php echo $product->getImage() ?>">
        </a>
        
        <?php if($product->getNew()){?>
            <div class="card-top__new">Новинка</div>
        <?php } ?>
        <?php if($product->getSale()){?>    
            <div class="card-top__sale">Sale</div>
        <?php } ?>
        <?php if(!($product->getSale() || $product->getNew())){?>    
            <div class="card-top__noflag"></div>
        <?php } ?>


        <div class="card-body">
            <h4 class="item-title">
                <a href="product-page.php?id=<?php echo $product->getId() ?>">
                    <?php echo $product->getTitle() ?>
                </a>
            </h4>
            <div class="card-btn">
                <a href="product-page.php?id=<?php echo $product->getId() ?>" class="card-btn__btn">
                   Описание
                </a>
            </div>
        </div>
    </article>
</div>