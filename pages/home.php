<nav>
    <a href="pages/games.php" class="dynamic button">PLAY</a>
    <?
    require_once('../auth/authenticate.php');
    if (authUser()) {
        ?>
        <a href="pages/favorites.php" class="dynamic button">MY GAMES</a>
        <a href="pages/logout.php" class="button">LOGOUT</a>
    <?
    }
    if(!authUser()) {
        ?>
        <a href="pages/favorites.php" class="button">LOGIN</a>
        <a href="pages/join.php" class="button">JOIN</a>
    <?
    }
    ?>
</nav>