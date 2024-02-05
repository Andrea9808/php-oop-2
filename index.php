<?php

    class Product {

        private $image;
        private $title;
        private $price;
        private $icon;
        private $type_article;

        public function __construct($image, $title, $price, $icon, $type_article){


            $this -> image = $image;
            $this -> title = $title;
            $this -> price = $price;
            $this -> icon = $icon;
            $this -> type_article = $type_article;

        }


        //image
        public function getImage(){
            return $this -> image;
        }

        public function setImage($image){
            $this -> image = $image;
        }

        //title
        public function getTitle(){
            return $this -> title;
        }

        public function setTitle($title){
            $this -> title = $title;
        }

        //price
        public function getPrice(){
            return $this -> price;
        }

        public function setPrice($price){
            $this -> price = $price;
        }

        //icon
        public function getIcon(){
            return $this -> icon;
        }

        public function setIcon($icon){
            $this -> icon = $icon;
        }

        //TypeArticle
        public function getTypeArticle(){
            return $this -> type_article;
        }

        public function setTypeArticle($type_article){
            $this -> type_article = $type_article;
        }


    }

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

    //dog biscuit
    
    $dog = new Food("https://tse3.mm.bing.net/th?id=OIP.b4m2DPttp4O_bnbqCFNrFwHaE8&pid=Api&P=0&h=180","Biscuit",4.50,"fa-solid fa-dog","Food", 'Medium');
    
    $cat = new Food("https://tse3.mm.bing.net/th?id=OIP.2sdQ6E-BTpMDCMCagQbDcQHaE7&pid=Api&P=0&h=180","Biscuit",3.50,"fa-solid fa-cat","Food", 'Medium');


    echo "IMG:" . $dog->getImage() . "<br>";
    echo "Title:" . $dog->getTitle() . "<br>" ;
    echo "Price:" . $dog->getPrice() . "<br>" ;
    echo "Icon:" . $dog->getIcon() . "<br>" ;
    echo "Type Article:" . $dog->getTypeArticle() . "<br>" ;
    echo "Size:" . $dog->getSize() . "<br>" ;


    echo "<br><br>";

    
    echo "IMG:" . $cat->getImage() . "<br>";
    echo "Title:" . $cat->getTitle() . "<br>" ;
    echo "Price:" . $cat->getPrice() . "<br>" ;
    echo "Icon:" . $cat->getIcon() . "<br>" ;
    echo "Type Article:" . $cat->getTypeArticle() . "<br>" ;
    echo "Size:" . $cat->getSize() . "<br>" ;