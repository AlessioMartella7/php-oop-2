<?php

class Products {

    public string $title;
    public string $imageUrl;
    public float $price;

    function __construct(string $title, string $imageUrl, float $price)
    {
        $this->title = $title;
        $this->imageUrl = $imageUrl;
        $this->price = $price;
    }

    function getInfo () {
        return $this->title . ' '. $this->price;
    }


}

?>