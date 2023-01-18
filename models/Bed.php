<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Bed extends Product {
    private $materials;
    private $size;

    
    function __construct($_name, $_price, Category $_category,$_quantity, $_image, $_calories) {
        parent::__construct($_name, $_price,$_category,$_quantity, $_image,);
    }

    /**
     * Get the value of materials
     */ 
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
    }
    

