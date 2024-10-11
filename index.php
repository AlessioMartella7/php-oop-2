<?php 
require_once __DIR__.'/classes/Products.php';
require_once __DIR__.'/classes/categories/Category.php';
require_once __DIR__.'/db/db.php';
require_once __DIR__.'/traits/Discountable.php';


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
                <?php foreach($products as $singleProduct) { ?>
                <div class="col-4">
                    <div class="card border-warning mb-3" style="max-width: 25rem;">
                        <img src="<?= $singleProduct->imageUrl?>" class="card-img-top image-fluid" alt="...">
                        <div class="card-header card-title text-center">
                            <h3><?= $singleProduct->title?></h3>
                        </div>
                        <div class="card-body">
                            <div class="card" style="width: 18rem;">

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <p class="fs-4">
                                            <?= $singleProduct->category->categoryIcon?>
                                            <?= $singleProduct->category->name?>
                                            Product
                                        </p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-4">
                                            <strong>Price:</strong><?= number_format($singleProduct->price,2, '.' , '')?>€
                                        </p>
                                    </li>
                                    <?php if ($singleProduct instanceof Kennels){ ?>
                                    <li class="list-group-item">
                                        <p class="fs-4"><strong>Size: </strong><?= $singleProduct->size ?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-5"><strong>Material: </strong><?= $singleProduct->fabbric ?></p>
                                    </li>
                                    <?php } elseif ($singleProduct instanceof Food) {?>
                                    <li class="list-group-item">
                                        <p class="fs-4"><strong>Type: </strong><?= $singleProduct->type ?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-5"><strong>Ingredients: </strong><?= $singleProduct->ingredients ?>
                                        </p>
                                    </li>
                                    <?php } elseif ($singleProduct instanceof Toys) {?>
                                    <li class="list-group-item">
                                        <p class="fs-4"><strong>Material: </strong><?= $singleProduct->material ?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-5"><strong>Age: </strong><?= $singleProduct->age ?></p>
                                    </li>
                                    <?php }; ?>
                                    <li class="list-group-item">
                                        <p class=""><strong>Article: </strong><?= $singleProduct->article?></p>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>