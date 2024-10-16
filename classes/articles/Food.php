<?php

require_once __DIR__.'/../Products.php';
class Food extends Products {
    
    public string $article;
    public string $type;
    public string $ingredients;

    function __construct(string $title, string $imageUrl, float $price, Category $category, string $type, string $ingredients,string $article){
        if ($price < 0) {
            throw new Exception("Il prezzo non può essere negativo "); 
        }
        {
        parent::__construct($title, $imageUrl,$price, $category,);
        $this->article = $article;
        $this->type = $type;
        $this->ingredients = $ingredients;
        }
    }
}
?>