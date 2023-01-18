<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
require_once "./models/Food.php";
require_once "./models/Toy.php";
require_once "./models/Bed.php";
// creare l'array con i prodotti per poi stamparli con un ciclo sull html con il css preparare la card su bootstrap

$catCategory = new Category;
$dogCategory = new Category;



$croccantini = new Food("Croccantini", 7.99, $dogCategory, 10, "img-placeolder", 500);
$corda = new Toy("Corda per cani", 10.99, $dogCategory, 20, "image-placeolder", "Gioco per cani");
$tiragraffi = new Toy("Tiragraffi", 20.99, $catCategory, 5, "image-placeolder", "Gioco per Gatti");
$guinzaglio = new Product("Guinzaglio", 9.99, $dogCategory, 40, "image-placeolder");
$trasportino = new Product("Trasportino", 20, $dogCategory, 30, "image-placeolder");

var_dump($croccantini);
var_dump($corda);
var_dump($guinzaglio);
var_dump($trasportino);
var_dump($tiragraffi);

$products = [
    $croccantini,
    $corda,
    $tiragraffi,
    $guinzaglio,
    $trasportino,

];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>E-COMMERCE PET</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center">PET SHOP</h1>
    </div>
    <div class="row">

        <?php foreach ($products as $product) { ?>
            <div class="card">
                <div class="card-body">
                    <div class="col-4">
                        <h4 class="card-title"><?php echo $product->getName() ?></h4>
                        <h5 class="card-text">Prezzo: <?php echo $product->getPrice() ?></h5>
                        <h5 class="card-text">Categoria: <?php echo $product->getCategory()->getIcon()?></h5>
                    </div>

                </div>
            </div>
    </div>

<?php } ?>
</body>

</html>