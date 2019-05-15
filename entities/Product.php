<?php
class Product {
	private $id;
	private $title;
	private $price;
	private $description;
	private $image;
	private $category;
	private $sale;
	private $new;

	public static function initFromPost(){
		$product = new Product();
		$product->title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : "";
		$product->price = isset($_POST['price']) ? htmlspecialchars($_POST['price']) : 0;
		$product->description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : "";
		$product->image = isset($_POST['image']) ? htmlspecialchars($_POST['image']) : "";
		$product->category = isset($_POST['category']) ? htmlspecialchars($_POST['category']) : 0;
		$product->sale = isset($_POST['sale']) ? htmlspecialchars($_POST['sale']) : 0;
		$product->new = isset($_POST['new']) ? htmlspecialchars($_POST['new']) : 0;
		return $product;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getTitle(){
		return $this->title;
	}

	public function setTitle($title){
		$this->title = $title;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

	public function getCategory(){
		return $this->category;
	}

	public function setCategory($category){
		$this->category = $category;
	}

	public function getNew(){
		return $this->new;
	}

	public function setNew($new){
		$this->new = $new;
	}

	public function getSale(){
		return $this->sale;
	}

	public function setSale($sale){
		$this->sale = $sale;
	}
}