<?php

    trait Discounts{

        private $discount;


        public function getDiscount(){

            return $this -> discount;
        }

        public function setDiscount($discount){

            $this -> discount = $discount;

        }

       
    }
