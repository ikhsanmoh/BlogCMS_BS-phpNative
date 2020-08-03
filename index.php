<?php

  // Memanggil Base URL
  require_once "./config/base-url.php";

  // Mengecek Status Login Session
  require_once "./app/auth/login-session.php";

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ikhsan Mohamad">
  <meta name="generator" content="">
  <title>Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="styles/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this Page -->
  <link href="styles/main-custom.css" rel="stylesheet">
</head>

<body class="bg-light">

  <!-- Main Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <a class="navbar-brand" href="#"><b>PROJECT</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<? echo $base ?>">Dashboard<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<? echo $base ?>app/pages/page/pages.php">Pages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<? echo $base ?>app/pages/post/posts.php">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<? echo $base ?>app/pages/user/users.php">Users</a>
        </li>
      </ul>
      <ul class="navbar-nav navbar-right">
        <li class="nav-item">
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
    </div>

  </nav>
  
  <!-- Conten -->
  <div id="header" class="bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="h2">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
            </svg> Dashboard
          </h1>
        </div>

        <!-- <div class="col-md-2">
         
          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Create Content
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Add Page</a>
              <a class="dropdown-item" href="#">Add Post</a>
              <a class="dropdown-item" href="#">Add User</a>
            </div>
          </div>
          
        </div> -->
        
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-3">
        
        <div class="list-group mb-3">
          <a href="<? echo $base ?>" class="list-group-item list-group-item-action active">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
            </svg> Dashboard
          </a>
          <a href="<? echo $base ?>app/pages/page/pages.php" class="list-group-item list-group-item-action">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-post-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M12 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM4.5 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-7z"/>
            </svg> Pages
          </a>
          <a href="<? echo $base ?>app/pages/post/posts.php" class="list-group-item list-group-item-action">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg> Posts
          </a>
          <a href="<? echo $base ?>app/pages/user/users.php" class="list-group-item list-group-item-action">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
            </svg> Users
          </a>
        </div>

        <div class="card bg-light mb-3">
          <div class="card-body">
            
            <h5 class="card-title">Light card title</h5>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
            <h5 class="card-title">Light card title 2</h5>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">55%</div>
            </div>

          </div>
        </div>

      </div>

      <div class="col-md-9 mb-5">

        <div class="card mb-3">
          
          <div class="card-header">
            Site Overview
          </div>
          <div class="card-body">
            <div class="row">

              <div class="col-md-3">
                <div class="card bg-light">
                  <div class="card-body text-center">
                    <h2>
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                      </svg> <span>7</span>
                   </h2>
                   <h4 class="card-title">Users</h4>     
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card bg-light">
                  <div class="card-body text-center">
                    <h2>
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-post-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M12 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM4.5 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-7z"/>
                      </svg> <span>8</span>
                   </h2>
                   <h4 class="card-title">Pages</h4>     
                  </div>
                </div>
              </div><div class="col-md-3">
                <div class="card bg-light">
                  <div class="card-body text-center">
                    <h2>
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg> <span>16</span>
                   </h2>
                   <h4 class="card-title">Posts</h4>     
                  </div>
                </div>
              </div><div class="col-md-3">
                <div class="card bg-light">
                  <div class="card-body text-center">
                    <h2>
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <rect width="4" height="5" x="1" y="10" rx="1"/>
                        <rect width="4" height="14" x="6" y="1" rx="1"/>
                        <rect width="4" height="9" x="11" y="6" rx="1"/>
                        <path fill-rule="evenodd" d="M0 14.5a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                      </svg> <span>58</span>
                   </h2>
                   <h4 class="card-title">Visitors</h4>     
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            Latest Users
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>The Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /.container -->

  <?php include "./app/includes/footer.html"; ?>

  <!-- Jquery Core -->
  <script src="scripts/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="scripts/bootstrap.min.js"></script>
  
  <!-- <script>
    $('.dropdown-toggle').dropdown()
  </script> -->

  <!-- <script>
    $(".nav .nav-link").on("click", function(){
      $(".nav").find(".active").removeClass("active");
      $(this).addClass("active");
    });
  </script> -->

</body>
</html>
