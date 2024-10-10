<?php

class Cats extends Products {

public string $categoryIcon;

function __construct(string $title, string $imageUrl, float $price, string $categoryIcon)
{
    parent::__construct($title,$imageUrl,$price);
    $this->categoryIcon = $categoryIcon;
   
}

}


?>