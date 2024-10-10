<?php
class Food extends Products {
    
    public string $type;
    public string $ingredients;

    function __construct(string $title, string $imageUrl, float $price, Category $category, string $type, string $ingredients)
    {
        parent::__construct($title, $imageUrl,$price, $category,);
        $this->type = $type;
        $this->ingredients = $ingredients;
    }
}

?>