<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-50 my-auto mx-auto p-5">
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center text-primary fw-bold display-4">LOGIN <i class="fa-solid fa-arrow-right-from-bracket"></i></h1>
                </div>
                <div class="card-body">
                    <form action="../actions/login.php" method="post">
                        <div class="row mb-2">
                            <div class="col-2">
                                <label for="username" class="form-label text-secondary">Username</label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-2">
                                <label for="password" class="form-label mx-auto text-secondary">Password</label>
                            </div>
                            <div class="col-10">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Log in</button>
                    </form>
                <div class="card-footer text-center bg-white">
                    <button class="btn btn-danger w-50 mt-3 mx-auto"><a href="registration.php" class="text-white text-decoration-none">Create an account</a></button>
                </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>