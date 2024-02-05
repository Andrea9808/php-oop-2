<?php

    class Toys extends Product{

        private $size;
        private $type;

        public function __construct($image, $title, $price, $icon, $type_article, $size, $type) {
    
            parent::__construct($image, $title, $price, $icon, $type_article);
            
            $this->size = $size;
            $this->type = $type;
    
        }
    
        
        //size
        public function getSize(){
            return $this -> size;
        }
    
        public function setSize($size){
            $this -> size = $size;
        }

        //type
        public function getType(){
            return $this->type;
        }
        
        public function setType($type){
            $this->type = $type;
        }

    }


    function printToys($products)
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
            echo '<h6>Type: ' . $product->getType() . '</h6>';
            echo '</div>';
            echo '</div>';
        }
    }