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
            return $this -> type;
        }
    
        public function setType($type){
            $this -> type = $type;
        }

    }