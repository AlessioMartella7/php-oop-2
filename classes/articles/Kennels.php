<?php

require_once __DIR__.'/../Products.php';

class Kennels extends Products {
    
    public string $article;
    public string $size;
    public string $fabbric;

    function __construct(string $title, string $imageUrl, float $price, Category $category, string $size, string $fabbric, string $article)
    {
        parent::__construct($title, $imageUrl,$price, $category,);
        $this->article = $article;
        $this->size = $size;
        $this->fabbric = $fabbric;
    }
}

?>