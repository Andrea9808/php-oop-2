
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Animal ecommerce</title>

    <?php
        include "Models/product.php";
        include "Models/food.php";
        include "Models/toys.php";
        include "db.php";
    ?>
 </head>
 <body>
        <!-- FOOD -->
        <div class="container">
            <h1>Dog's food:</h1>
            <div class="row">
                <?php foreach ($dogFood as $dog) { ?>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo $dog->getImage(); ?>" alt="Product Image">
                            <h6>Product: <?php echo $dog->getTitle(); ?></h6>
                            <h6>Price: €<?php echo $dog->getPrice(); ?></h6>
                            <h6><i class="<?php echo $dog->getIcon(); ?>"></i></h6>
                            <h6>Type Article: <?php echo $dog->getTypeArticle(); ?></h6>
                            <h6>Size: <?php echo $dog->getSize(); ?></h6>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <h1>Cat's food:</h1>
            <div class="row">
                <?php foreach ($catFood as $cat) { ?>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo $cat->getImage(); ?>" alt="Product Image">
                            <h6>Product: <?php echo $cat->getTitle(); ?></h6>
                            <h6>Price: €<?php echo $cat->getPrice(); ?></h6>
                            <h6><i class="<?php echo $cat->getIcon(); ?>"></i></h6>
                            <h6>Type Article: <?php echo $dog->getTypeArticle(); ?></h6>
                            <h6>Size: <?php echo $cat->getSize(); ?></h6>
                        </div>
                    </div>
                <?php } ?>
            </div>

            
            <!--- TOYS --->
            <h1> Dog's toys:</h1>
            <div class="row">
                <?php foreach ($dogToy as $dog) { ?>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo $dog->getImage(); ?>" alt="Product Image">
                            <h6>Product: <?php echo $dog->getTitle(); ?></h6>
                            <h6>Price: €<?php echo $dog->getPrice(); ?></h6>
                            <h6><i class="<?php echo $dog->getIcon(); ?>"></i></h6>
                            <h6>Type Article: <?php echo $dog->getTypeArticle(); ?></h6>
                            <h6>Size: <?php echo $dog->getSize(); ?></h6>
                            <h6>Recommended: <?php echo $dog->getType(); ?></h6>
                        </div>
                    </div>
                <?php } ?>
            </div>
            
            <h1> Cat's toys:</h1>
            <div class="row">
                <?php foreach ($catToy as $cat) { ?>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo $cat->getImage(); ?>" alt="Product Image">
                            <h6>Product: <?php echo $cat->getTitle(); ?></h6>
                            <h6>Price: €<?php echo $cat->getPrice(); ?></h6>
                            <h6><i class="<?php echo $cat->getIcon(); ?>"></i></h6>
                            <h6>Type Article: <?php echo $cat->getTypeArticle(); ?></h6>
                            <h6>Size: <?php echo $cat->getSize(); ?></h6>
                            <h6>Recommended: <?php echo $cat->getType(); ?></h6>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    
 </body>
 </html>
    
