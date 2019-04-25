<div class="col-sm-6 col-md-6 col-lg-4">
    <article class="card mb-4">

        <a class="product-img gorizontal-img" href="product-page.php?id=<?php echo $product['id'] ?>">
            <img src="img/products/<?php echo $product['image'] ?>">
        </a>

        
        <?php if($product['new']){?>
            <div class="card-top__new">Новинка</div>
        <?php } ?>
        <?php if($product['sale']){?>    
            <div class="card-top__sale">Sale</div>
        <?php } ?>
        <?php if(!($product['sale'] || $product['new'])){?>    
            <div class="card-top__noflag"></div>
        <?php } ?>


        <div class="card-body">
            <h4 class="item-title">
                <a href="product-page.php?id=<?php echo $product['id'] ?>">
                    <?php echo $product['title'] ?>
                </a>
            </h4>
            <div class="card-btn">
                <a href="product-page.php?id=<?php echo $product['id'] ?>" class="card-btn__btn">
                   Описание
                </a>
            </div>
        </div>
    </article>
</div>