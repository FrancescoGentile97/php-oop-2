<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Food extends Product{
    private $calories;

    function __construct($_name, $_price, Category $_category,$_quantity, $_image, $_calories) {
        parent::__construct($_name, $_price, $_category, $_quantity, $_image);

        $this->setCalories($_calories);
    }

    /**
     * Get the value of calories
     */
    public function getCalories(){
        return $this->calories;
    }

    /**
     * Set the value of calories
     *
     * @return  self
     */
    public function setCalories($calories){
        $this->calories = $calories;

        return $this;
    }
}
