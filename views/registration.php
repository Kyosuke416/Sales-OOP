<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card w-50 my-auto mx-auto">
                <p class="text-end mt-3 small"><a href="../views/"><i class="fa-solid fa-x text-secondary"></i></a></p>
                <div class="card-header bg-white border-0 py-3">
                    <h1 class="text-center text-danger fw-bold display-4"><i class="fa-solid fa-user-plus"></i> Registration</h1>
                </div>

                <div class="card-body">
                    <form action="../actions/register.php" method="post">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="first-name" class="form-label">First Name</label>
                                    <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                                </div>
                                <div class="col">
                                    <label for="last-name" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" id="last-name" class="form-control" required>
                                </div>
                            </div> 
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" maxlength="15" required>

                        </div>
                        <div class="mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" minlength="8" aria-describedby="password-info" required>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Register</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>