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