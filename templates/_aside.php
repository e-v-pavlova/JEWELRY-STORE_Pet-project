<div class="col-md-3 col-lg-2"> 
    <ul class="nav">
        <?php if(!isset($_GET['category'])){ 
        ?>
        <li class="nav__element"><a href="index.php" class="nav__link nav__link--active">Все товары</a></li>
        <li class="nav__element"><a href="index.php?category=1" class="nav__link">Кольца</a></li>
        <li class="nav__element"><a href="index.php?category=2" class="nav__link">Брастлеты</a></li>
        <li class="nav__element"><a href="index.php?category=3" class="nav__link">Подвески</a></li>
        <li class="nav__element"><a href="index.php?category=4" class="nav__link">Серьги</a></li>
        <li class="nav__element"><a href="index.php?category=5" class="nav__link">Комплекты</a></li>
        <?php }else {
            $currentProductCategory= intval($_GET['category']);	
        ?>
        <li class="nav__element"><a href="index.php" class="nav__link">Все товары</a></li>
        <li class="nav__element"><a href="index.php?category=1" class="<?php if ($currentProductCategory==1){ echo 'nav__link nav__link--active';}else{echo 'nav__link';}?>">Кольца</a></li>
        <li class="nav__element"><a href="index.php?category=2" class="<?php if ($currentProductCategory==2){ echo 'nav__link nav__link--active';}else{echo 'nav__link';}?>">Брастлеты</a></li>
        <li class="nav__element"><a href="index.php?category=3" class="<?php if ($currentProductCategory==3){ echo 'nav__link nav__link--active';}else{echo 'nav__link';}?>">Подвески</a></li>
        <li class="nav__element"><a href="index.php?category=4" class="<?php if ($currentProductCategory==4){ echo 'nav__link nav__link--active';}else{echo 'nav__link';}?>">Серьги</a></li>
        <li class="nav__element"><a href="index.php?category=5" class="<?php if ($currentProductCategory==5){ echo 'nav__link nav__link--active';}else{echo 'nav__link';}?>">Комплекты</a></li>
        <?php }?>
    </ul>
</div>