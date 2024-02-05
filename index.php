
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="Style/style.css">
    
    <title>Animal ecommerce</title>

    <?php
        include "Models/product.php";
        include "Models/food.php";
        include "Models/toys.php";
        include "db.php";
    ?>
 </head>
 <body>
        
        <div class="container">

            <!-- FOOD -->
            <h1>Dog's food:</h1>
            <div class="row">
                <?php printFoods($dogFood); ?>
            </div>

            <h1>Cat's food:</h1>
            <div class="row">
                <?php printFoods($catFood); ?>
            </div>

            
            <!--- TOYS --->
            <h1> Dog's toys:</h1>
            <div class="row">
                <?php printToys($dogToy); ?>
            </div>
            
            <h1> Cat's toys:</h1>
            <div class="row">
                <?php printToys($catToy); ?>
            </div>
    
 </body>
 </html>
    
