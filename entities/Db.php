<?php
require_once("Product.php");

class Db {
    public static function getConnection() {
        $params = include_once("./config/db-params.php");
        $db = new PDO("mysql:host={$params['host']};dbname={$params['dbname']};charset=utf8",$params['user'],$params['password']);
        return $db;
    }

    public static function getProductsList() {
        $db = Db::getConnection();
        $result = $db->query('SELECT * FROM products');
        $productsList = array();
        while ($product = $result->fetchObject('Product')) {
            array_push($productsList, $product);
        }
        return $productsList;
    }
    public static function getProductsListByCategory($categoryId) {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM products WHERE category = :category_id';
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $result->execute();
        $productsList = array();
        while ($product = $result->fetchObject('Product')) {
            array_push($productsList, $product);
        }
        return $productsList;
    }
    public static function getProductById($id) {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM products WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetchObject('Product');
    }
    public static function createProduct($product) {
        $db = Db::getConnection();
        $sql = 'INSERT INTO products '
                . '(title, price, category, description, image, new, sale)'
                . 'VALUES '
                . '(:title, :price, :category, :description, :image, :new, :sale)';
        $result = $db->prepare($sql);
        $title = $product->getTitle();
        $price = $product->getPrice();
        $category = $product->getCategory();
        $description = $product->getDescription();
        $image = $product->getImage();
        $new = $product->getNew();
        $sale = $product->getSale();
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':price', $price, PDO::PARAM_INT);
        $result->bindParam(':category', $category, PDO::PARAM_INT);
        $result->bindParam(':description', $description, PDO::PARAM_STR);
        $result->bindParam(':image', $image, PDO::PARAM_STR);
        $result->bindParam(':new', $new, PDO::PARAM_INT);
        $result->bindParam(':sale', $sale, PDO::PARAM_INT);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }
}
?>