<?php
require_once __DIR__.'/../traits/Discountable.php';
require_once __DIR__.'/../classes/articles/Food.php';
require_once __DIR__.'/../classes/articles/Toys.php';
require_once __DIR__.'/../classes/articles/Kennels.php';


// categories

$dog = new Category('Dog','<i class="fa-solid fa-dog"></i>');
$cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');

// products
$rubberMouse = new Toys('Rubber Mouse','https://www.petso.com.au/cdn/shop/products/5472_c5185826-652b-41fa-8df0-aca18eec3c0e.jpg?v=1679366434', 12.6 , $cat, 'Rubber', 'Young', 'Toys');
$ball = new Toys('Ball','https://www.aqpet.it/1844-large_default/dental-toys-for-dog-ball-hedgehog-rubber-56-x-65-cm.jpg', 12.6 , $dog, 'Rubber', 'All','Toys');
$bone = new Food ('Bone','https://i0.wp.com/australianpettreatcompany.com.au/wp-content/uploads/2021/03/Beef-Bone.jpg?fit=1080%2C1080&ssl=1', 4.90, $dog, 'Dry', 'Beef Bones', 'Food');
$kibble = new Food ('Kibble','https://www.centinelafeed.com/on/demandware.static/-/Sites-master-centinela-product-catalog/default/dw6c23a311/s/StellaChewy/SNCCDRYGFSLMN_1.png', 7.52, $cat, 'Dry', 'Salmon', 'Food');
$wildDog = new Food('Wild Dog', 'https://www.olisticpet.com/478-thickbox_default/wildfull-dog-lamb-junior-mini-size-500-gr.jpg', 5.60, $dog, 'Wet', 'Lamb', 'Food');
$fancyKennel = new Kennels('Royal Cat', 'https://squarepaws.com/wp-content/uploads/2020/08/sq_paws_throne-001.jpg', 59.90 , $cat, 'Medium', 'Cotton-Wool', 'Kennels');

$products = [
    $rubberMouse,
    $ball,
    $bone,
    $kibble,
    $wildDog,
    $fancyKennel
];

?>