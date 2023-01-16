<?php
// includere il prodotto con (include_once)
// creare la classe come fatto per il prodotto 
// estenderla con l'extends e assegnargli gli oggetti (nome della categoria(giocattolo,cibo ecc..) ed il tipo per assegnare l'animale )
include_once __DIR__ . "./Prodotto.php";

class Categories extends Product{
    protected $category_name;
    protected $type;
    // creare il construtto come prima 
    // usare il parent: :_construct -> per richiamare l'altro costrutto

    function __construct($_name, $_price, $_image, $_category_name,$_type){
        parent::__construct($_name, $_price, $_image);
        $this->setCategory_name($_category_name);
        $this->setType($_type);
    }

    // creare le funzioni di (get and set)

    public function getCategory_name()
    {
        return $this->category_name;
    }

    public function setCategory_name($category_name)
    {
        $this->category_name = $category_name;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }
 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}