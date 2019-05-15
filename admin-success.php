<?php
  session_start();
  if (isset($_SESSION['login']) && $_SESSION['login'] =="on"){

  }else{
	  header('Location:index.php');
  }
  $title = 'Товар добавлен'
?>
<?php include('./templates/_head.php'); ?>

<!-- header -->
<?php include('./templates/_header.php'); ?>

<!-- white-plate -->
<div class="white-plate">
    <div class="container-fluid">

        <!-- content block -->
        <div class="row">
            <div class="col-12">
                <div class="title-1">Товар успешно добавлен</div>
                <a href="admin.php" class="btn-secondary">Добавить ещё один товар</a>
                <a href="index.php" class="btn-secondary">Вернуться на главную</a>    
                
            </div>

        </div>
        <!-- content block -->
    </div>
</div>
<!-- // white-plate -->
<?php include('./templates/_footer.php'); ?>