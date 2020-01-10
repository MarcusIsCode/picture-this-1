<ul class="navbar-nav">
    <li class="nav-item">
        <a href="/index.php"><img src="/logo.png" alt="logo" class="navbar-logo"></a>
    </li>
    <li class="nav-item">
        <?php if (isset($_SESSION['user'])) : ?>
            <a class="nav-link" href="/app/users/logout.php"><i class="fas fa-sign-out-alt"></i></a>
        <?php endif; ?>
    </li>
</ul>
</nav>