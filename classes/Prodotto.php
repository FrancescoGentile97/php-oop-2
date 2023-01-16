<?php
// creare la classe per i prodotti (nome immagine e prezzo )
// richiamare la classe nell'index.php (require_once)
// protected possono essere visualizzati dentro la classe o le derivanti ma non al di fuori
class  Product{
    protected string $name;
    protected $image;
    protected $price;
    
// funzione del costrutto per inizializzare gli oggetti nella classe 
    function __construct($_name, $_price, $_image){
       $this->setName($_name);
       $this->setPrice($_price);
       $this->setImage($_image);
    }

    // preparare le funzioni di (get e set) come nello scorso esercizio
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}



