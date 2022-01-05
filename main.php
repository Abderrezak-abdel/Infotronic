<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Main</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php 
        $products = sipdaih;
        foreach($products as $product) {
          <h5>$product.name</h5>
        <p>8000.00</p>
        }
        ?>
      <div>
        <h5>Produit1</h5>
        <p class="price">8000.00</p>
        <a href="#">modifier</a>
        <a href="#">suprimer</a>
      </div>
      <div>
        <h5>Produit1</h5>
        <p>8000.00</p>
        <a href="#">modifier</a>
        <a href="#">suprimer</a>
      </div>
      <div>
        <h5>Produit1</h5>
        <p>8000.00</p>
        <a href="#">modifier</a>
        <a href="#">suprimer</a>
      </div>
    </body>
</html>