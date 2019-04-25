<?php
    require_once('config.php'); 
    session_start();
    if( @$_SESSION['login'] != 'on'){
        header('Location: index.php');
    }
    $title = htmlspecialchars($_POST['title']);
    $price = htmlspecialchars($_POST['price']);
    $description = htmlspecialchars($_POST['description']);
    $category = htmlspecialchars($_POST['category']);

    if (@!$_POST['sale']){
        $_POST['sale'] = NULL;
    }
    if (@!$_POST['new']){
        $_POST['new'] = NULL;
    }
    
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name'] != ''){
        move_uploaded_file($_FILES['image']['tmp_name'], './img/products/' . $_FILES['image']['name']);
        $fileName = $_FILES['image']['name'];
    }else{
        $fileName = 'nophoto.jpg';
    }

    $sql = "INSERT INTO products (title, price, description, image, category, sale, new) 
            VALUES (:title, :price, :description, :image, :category, :sale, :new)";
    $result = $db->prepare($sql);
    $result->bindValue(':title', $title);
    $result->bindValue(':price', $price);
    $result->bindValue(':description', $description);
    $result->bindValue(':image',  $fileName);
    $result->bindValue(':category', $category);
    $result->bindValue(':sale', $_POST['sale']);
    $result->bindValue(':new', $_POST['new']);

    $result->execute();
    header("Location: admin-success.php");
?>