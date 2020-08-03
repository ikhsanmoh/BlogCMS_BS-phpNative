<ul class="navbar-nav navbar-right">
  <li class="nav-item dropdown">
    <li class="nav-item">
      <a class="nav-link" href="#"> Welcome, <? echo $_SESSION['user'] ?></a>
    </li>
    <li class="nav-item">
      <form action="<? echo $base; ?>app/auth/logout.php" method="post">
        <input type="submit" class="nav-link btn btn-link" name="logout" value="Logout">
      </form>
    </li>
  </li>
</ul>