<?php
class Toys extends Products {
    
    public string $material;
    public string $age;

    function __construct(string $title, string $imageUrl, float $price, Category $category, string $material, string $age)
    {
        parent::__construct($title, $imageUrl,$price, $category,);
        $this->material = $material;
        $this->age = $age;
    }
}

?>