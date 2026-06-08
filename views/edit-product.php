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
    <title>Edit Product</title>

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
            <h3 class="text-center text-warning fw-bold display-4 mb-5"><i class="fa-solid fa-pen-to-square"></i> Edit Product</h3>
            
            <form action="../actions/edit-product.php" method="post">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" id="product-name" class="form-control" value="<?= $product['product_name'] ?>" maxlength="15" required autofocus>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <div class="input-group-text">$</div>
                                <input type="number" name="price" id="price" class="form-control" value="<?= $product['price'] ?>" step="0.01" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity'] ?>" required>
                        </div>
                    </div> 
                </div>
                
                <button type="submit" class="btn btn-warning w-100 mt-3">Edit</button>
            </form>
        </div>
    </main>
    
</body>
</html>
