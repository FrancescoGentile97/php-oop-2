<?php
require_once "./classes/Prodotto.php";
require_once "./classes/Categoria.php";
// creare l'array con i prodotti per poi stamparli con un ciclo sull html con il css preparare la card su bootstrap

$productList = [
    $newCategory = new Categories("Croccantini", "15,99", "image", "Cibo", "Cane"),
    $newCategory_2 = new Categories("Croccantini", "15,99", "image", "Cibo", "Cane"),
    $newCategory_3 = new Categories("Croccantini", "15,99", "image", "Cibo", "Cane"),
    $newCategory_4 = new Categories("Croccantini", "15,99", "image", "Cibo", "Cane"),
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>E-COMMERCE PET</title>
</head>

<body>

    <div class="container">
        <h1>PET SHOP</h1>
    </div>
      <div class="row">
        <div class="col">
            <div class="card">
                <img src="<?php echo $product->getImage() ?>" class="img-fluid"> 
                <div class="card-body">
                    <h4 class=""><?php echo $product->getName()?></h4>
                    <h5 class="card-text">Category:<?php echo $product->getCategory_name()?></h5>
                    <h5 class="card-text">Animale:<?php echo $product->type()?></h5>
                    <h5 class="card-text">Prezzo:<?php echo $product->getPrice()?></h5>
                </div>
            </div>
        </div>
      </div>
</body>

</html>