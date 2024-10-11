<?php
require_once __DIR__.'/../Products.php';
class Toys extends Products {
    
    public string $article;
    public string $material;
    public string $age;

    function __construct(string $title, string $imageUrl, float $price, Category $category, string $material, string $age, string $article)
    {
        parent::__construct($title, $imageUrl,$price, $category);
        $this->article = $article;
        $this->material = $material;
        $this->age = $age;
    }
}

?>