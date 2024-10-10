<?php 
require_once __DIR__.'/classes/Products.php';
require_once __DIR__.'/classes/categories/Category.php';



$dog = new Category('Dog','<i class="fa-solid fa-dog"></i>');
$cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');



$rubberMouse = new Toys('Rubber Mouse','...', 12.6 , $cat, 'Rubber', 'Young', 'Toys');
$ball = new Toys('Ball','...', 12.6 , $dog, 'Rubber', 'All','Toys');
$bone = new Food ('Bone','...', 4.90, $dog, 'Dry', 'Beef Bones', 'Food');
$kibble = new Food ('Kibble','...', 7.52, $cat, 'Dry', 'Salmon', 'Food');
$wildDog = new Food('Wild Dog', '...', 5.60, $dog, 'Wet', 'Lamb', 'Food');
$fancyKennel = new Kennels('Royal Cat', 'https://squarepaws.com/wp-content/uploads/2020/08/sq_paws_throne-001.jpg', 59.90 , $cat, 'Medium', 'Cotton-Wool', 'Kennels');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8 OOP 2</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-secondary">
    <main>
        <div class="container">
            <div class="row my-5 bg-dark p-4">

                <div class="col-4">
                    <div class="card border-warning mb-3" style="max-width: 25rem;">
                        <img src="<?= $fancyKennel->imageUrl?>" class="card-img-top image-fluid" alt="...">
                        <div class="card-header card-title text-center">
                            <h3><?= $fancyKennel->title?></h3>
                        </div>
                        <div class="card-body">
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <p class="fs-4">
                                            <?= $fancyKennel->category->categoryIcon?><?= $fancyKennel->category->name?>
                                            Product
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-4"> <strong>Price: </strong><?= $fancyKennel->price?>€</p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-4"><strong>Size: </strong><?= $fancyKennel->size?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-5"><strong>Material: </strong><?= $fancyKennel->fabbric?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class=""><strong>Article: </strong><?= $fancyKennel->article?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo,
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->