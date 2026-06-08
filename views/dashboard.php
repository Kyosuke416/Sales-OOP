<?php
    session_start();

    require "../classes/Product.php";

    $products = new Product;
    $all_products = $products->getAllProducts();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <?php 
        include "main-nav.php"
    ?>

    <div class="row justify-content-center bx-0">
        <div class="w-75">
            <div class="row mb-3">
                <div class="col-11">
                    <h1 >Product List</h1>
                </div>
                <div class="col-1">
                    <h1><a href="add-product.php" title="Add"><i class="fa-solid fa-plus text-info"></i></a></h1>
                </div>
            </div>
            
            

            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th><!for action buttons></th>
                        <th><!for action buttons></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($product = $all_products->fetch_assoc())
                        {
                    ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><?= $product['product_name'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-warning" title="Edit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    
                                    <a href="../actions/delete-product.php?id=<?= $product['id'] ?>" class="btn btn-danger" title="Delete">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <a href="buy-product.php?id=<?= $product['id'] ?>" class="btn btn-success" title="Buy">
                                <i class="fa-solid fa-cash-register"></i>
                                </a>
                            </td>
                            
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    
</body>
</html>


