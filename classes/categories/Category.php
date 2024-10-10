<?php
class Category {

public string $name;
public string $categoryIcon;

function __construct(string $name, string $categoryIcon)
{
    
    $this->categoryIcon = $categoryIcon;
    $this->name = $name;
}

}


?>