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