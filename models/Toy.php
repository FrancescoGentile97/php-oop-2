<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Toy extends Product {
    private $genre;

    function __construct($_name, $_price, Category $_category,$_quantity, $_image,$genre){
    parent::__construct($_name, $_price, $_category, $_quantity, $_image);
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre(){
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre){
        $this->genre = $genre;

        return $this;
    }
}