<ul class="navbar-nav">
    <li class="nav-item">
        <a href="/index.php"><img src="" alt="logo"></a>
    </li>
    <li class="nav-item">
        <?php if (isset($_SESSION['user'])) : ?>
            <a class="nav-link" href="/app/users/logout.php">Logout</a>
        <?php endif; ?>
    </li>
</ul>
</nav>