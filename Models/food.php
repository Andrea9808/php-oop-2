<?php

class Food extends Product{

    private $size;

    public function __construct($image, $title, $price, $icon, $type_article, $size) {

        parent::__construct($image, $title, $price, $icon, $type_article);
        
        $this->size = $size;

    }

    
    //size
    public function getSize(){
        return $this -> size;
    }

    public function setSize($size){
        $this -> size = $size;
    }

 

}

function printFoods($products)
{
    foreach ($products as $product) {
        echo '<div class="col-4">';
        echo '<div class="card">';
        echo '<img src="' . $product->getImage() . '" alt="Product Image">';
        echo '<h6>Product: ' . $product->getTitle() . '</h6>';
        echo '<h6>Price: €' . $product->getPrice() . '</h6>';
        echo '<h6><i class="' . $product->getIcon() . '"></i></h6>';
        echo '<h6>Type Article: ' . $product->getTypeArticle() . '</h6>';
        echo '<h6>Size: ' . $product->getSize() . '</h6>';
        echo '</div>';
        echo '</div>';
    }
}