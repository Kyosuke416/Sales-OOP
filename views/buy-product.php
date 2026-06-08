<?php
    session_start();

    require '../classes/Product.php';

    $id = $_GET['id'];

    $product_obj = new Product;
    $product = $product_obj->getProduct($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <?php 
        include "main-nav.php"
    ?>

    <main class="row justify-content-center gx-0">
        <div class="col-4">
            <h3 class="text-center text-success fw-bold display-4 mb-5"><i class="fa-solid fa-cash-register"></i> Buy Product</h3>

            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <h4 class="fw-bold"><?= $product['product_name'] ?></h4>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col">
                        <label for="price" class="form-label">Price</label>
                        <h4 class="fw-bold" >$ <?= $product['price'] ?></h4>
                    </div>
                    <div class="col">
                        <label for="quantity" class="form-label">Stock Left</label>
                        <h4 class="fw-bold" ><?= $product['quantity'] ?></h4>
                    </div>
                </div> 
            </div>
            
            <form action="payment.php" method="post">
    
                <input type="hidden" name="id" value="<?= $product['id'] ?>">

                <div class="mb-3">
                    <label for="buy_quantity" class="form-label">Buy Quantity</label>
                    <input type="number" name="buy_quantity" id="buy-quantity" class="form-control w-75" min="1" max="<?= $product['quantity'] ?>" required autofocus>
                </div>

                <button type="submit" class="btn btn-success w-100 mt-3">Pay</button>
            </form>
        </div>
    </main>
    
</body>
</html>
