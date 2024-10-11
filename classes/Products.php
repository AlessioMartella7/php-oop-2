<?php
require_once __DIR__.'/categories/Category.php';
require_once __DIR__.'/articles/Toys.php';
require_once __DIR__.'/articles/Kennels.php';
require_once __DIR__.'/articles/Food.php';
require_once __DIR__.'/../traits/Discountable.php';
class Products {

    public string $title;
    public string $imageUrl;
    public float $price;
    public Category $category;
    
    // use Discountable;

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