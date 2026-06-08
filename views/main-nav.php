<nav class="navbar navbar-expand navbar-white bg-white" style="margin-bottom: 80px;">
    <div class="container">
        <a href="dashboard.php" class="navbar-brand">
            <h3><i class="fa-solid fa-house"></i></h3>
        </a>
        <span class="navbar-text mx-auto fw-bold">Welcome, <?= $_SESSION['username'] ?></span>
        <div class="navbar-nav">
            <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                <button type="submit" class="text-danger bg-transparent border-0"><i class="fa-solid fa-user-xmark"></i></button>
            </form>
        </div>

    </div>
</nav>