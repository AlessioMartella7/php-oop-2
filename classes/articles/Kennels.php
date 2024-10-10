<?php
class Kennels extends Products {
    
    public string $size;
    public string $fabbric;

    function __construct(string $title, string $imageUrl, float $price, Category $category, string $size, string $fabbric)
    {
        parent::__construct($title, $imageUrl,$price, $category,);
        $this->size = $size;
        $this->fabbric = $fabbric;
    }
}

?>