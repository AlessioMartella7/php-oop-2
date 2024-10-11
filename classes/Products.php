<?php
require_once __DIR__.'/../traits/Discountable.php';
require_once __DIR__.'/categories/Category.php';


class Products {
    
    public string $title;
    public string $imageUrl;
    public float $price;
    public Category $category;
    
    use Discountable;


    function __construct(string $title, string $imageUrl, float $price, Category $category)
    {
        $this->title = $title;
        $this->imageUrl = $imageUrl;
        $this->price = $price;
        $this->category = $category;
       
    }

    function getInfo () {
        return $this->title . ' '. $this->price;
    }


    

}

?>