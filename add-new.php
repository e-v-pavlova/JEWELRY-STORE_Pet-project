<?php
    require_once('entities/Product.php'); 
    require_once('entities/Db.php'); 
    session_start();
    if( @$_SESSION['login'] != 'on'){
        header('Location: index.php');
    }
    $product = Product::initFromPost();
    
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name'] != ''){
        move_uploaded_file($_FILES['image']['tmp_name'], './img/products/' . $_FILES['image']['name']);
        move_uploaded_file($_FILES['image_prev']['tmp_name'], './img/products-preview/' . $_FILES['image']['name']);
        $product->setImage($_FILES['image']['name']);
    }else{
        $product->setImage('nophoto.jpg');
    }

    Db::createProduct($product);
    
    header("Location: admin-success.php");
?>