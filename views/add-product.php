<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-75 my-auto mx-auto">
                <p class="text-end mt-3 small"><a href="../views/dashboard.php"><i class="fa-solid fa-x text-secondary"></i></a></p>
                <div class="card-header bg-white border-0 py-3">
                    <h3 class="text-center text-info fw-bold display-4"><i class="fa-solid fa-box-archive"></i> Add Product</h3>
                </div>

                <div class="card-body">
                    <form action="../actions/add-product.php" method="post">
                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" name="product_name" id="product-name" class="form-control" maxlength="15" required autofocus>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    
                                    <label for="price" class="form-label">Price</label>
                                    <div class="input-group">
                                        <div class="input-group-text">$</div>
                                        <input type="number" name="price" id="price" class="form-control" step="0.01" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="number" name="quantity" id="quantity" class="form-control" required>
                                </div>
                            </div> 
                        </div>
                        
                        <button type="submit" class="btn btn-info w-100 mt-3">Add</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>