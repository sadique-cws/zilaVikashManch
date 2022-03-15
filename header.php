<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow">
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="image/logo.jpg" alt=""></a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <?php
                if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="btn btn-danger"><i class="bi bi-power"></i> Logout
            </a>
               <?php } ?>
        </li>
        </ul>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark py-1 bg-dark">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link"><i class="bi bi-house"></i> Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link"><i class="bi bi-map"></i> About Purnea</a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="bi bi-window-stack"></i> Projects</a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="bi bi-bell"></i> Events</a></li>
            <li class="nav-item"><a href="" class="nav-link"><i class="bi bi-arrow-down"></i> Notification</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link"><i class="bi bi-phone"></i> Contact Us</a></li>
        </ul>

        <ul class="navbar-nav">
        <?php
                if (!isset($_SESSION['user'])) { ?>
        <li class="nav-item"><a href="register.php" class="nav-link"><i class="bi bi-person-plus"></i> Register</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
        <?php } ?>
        </ul>
    </div>
</nav>