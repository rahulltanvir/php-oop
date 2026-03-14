<?php

    class User {
    
    const ADMIN = 1;
    const USER  = 2;
}
$role=1;
if ($role == User::ADMIN) {
    echo "Admin Panel";

}

echo "<br>";



class Product {
    const Category_Electric="Electric";
    const CATEGORY_FASHION = "Fashion";

    public $name;
    public $category;

    public function __construct($name, $category) {
        $this->name = $name;
        $this->category = $category;
    }

    public function showProduct() {
        echo "Product: $this->name, Category: $this->category";
    }
}

// Usage
$p1 = new Product("Laptop", Product::Category_Electric);

$p2 = new Product("Shirt", Product::CATEGORY_FASHION);

$p1->showProduct(); // Product: Laptop, Category: Electronics
echo "<br>";
$p2->showProduct(); // Product: Shirt, Category: Fashion



?>