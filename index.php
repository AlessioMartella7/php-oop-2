<?php 
require_once __DIR__.'/classes/Products.php';
require_once __DIR__.'/classes/categories/Category.php';

$dog = new Category('Dog','<i class="fa-solid fa-dog"></i>');
$cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');
$bone = new Products('Bone','...', 29.90, $dog);
var_dump($bone);
$rubberMouse = new Toys('Rubber Mouse','...', 12.6 , $cat, 'rubber', 'young');
var_dump($rubberMouse);


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

<!-- <body class="bg-secondary">
    <main>
        <div class="container">
            <div class="row my-5 bg-dark p-4">

                <div class="col-4">
                    <div class="card border-warning mb-3" style="max-width: 25rem;">
                        <div class="card-header card-title">
                            <h3>title</h3>
                        </div>
                        <div class="card-body">
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item">
                                        <p class="fs-4"> <strong></strong></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-4"><strong></strong></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-4"><strong></strong></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-5"><strong></strong></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class=""><strong></strong></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body> -->

</html>

<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo,
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->