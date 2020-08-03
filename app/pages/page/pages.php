<?php

  // Memanggil Base URL
  require_once "../../../config/base-url.php";

  // Mengecek Status Login Session
  require_once "../../auth/login-session.php";

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ikhsan Mohamad">
  <meta name="generator" content="">
  <title>Pages</title>

  <!-- Bootstrap core CSS -->
  <link href="<? echo $base ?>styles/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this Page -->
  <link href="<? echo $base ?>styles/main-custom.css" rel="stylesheet">
</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <a class="navbar-brand" href="#"><b>PROJECT</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<? echo $base ?>">Dashboard<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<? echo $base ?>app/pages/page/pages.php">Pages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<? echo $base ?>app/pages/post/posts.php">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<? echo $base ?>app/pages/user/users.php">Users</a>
        </li>
      </ul>

      <!-- Navbar Right -->
      <?php include "../../includes/navbar-right.php" ?>

      <!-- <ul class="navbar-nav navbar-right">
        <li class="nav-item dropdown">
          <li class="nav-item">
            <a class="nav-link" href="#">Welcome, Ikhsan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../auth/login.php">Logout</a>
          </li>
        </li>
      </ul> -->

    </div>

  </nav>

  <div id="header" class="bg-secondary">
    <div class="container">
      <div class="row">
        <h1 class="h2 mx-2">
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-post-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M12 1H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM4.5 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-7z"/>
          </svg> 
          Pages
        </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        
        <?php //include "../includes/sidebar.html"; ?>

        <div class="list-group mb-3">
          <a href="<? echo $base ?>" class="list-group-item list-group-item-action">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
            </svg> Dashboard
          </a>
          <a href="<? echo $base ?>app/pages/page/pages.php" class="list-group-item list-group-item-action active">
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
            Pages
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-auto mb-2">
                <a class="btn btn-primary" href="#" role="button">Add Page</a>
              </div>
              <div class="col-md-6">
                <input class="form-control form-control-md" type="text" placeholder="Search Pages...">
              </div>
            </div>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Published</th>
                  <th scope="col">Created</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Home</td>
                  <td>
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                    </svg>
                  </td>
                  <td>12 Jul, 2020</td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="#" role="button">Edit</a>
                    <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>About</td>
                  <td>
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                    </svg>
                  </td>
                  <td>25 Jul, 2020</td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="#" role="button">Edit</a>
                    <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Contact</td>
                  <td>
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                      <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                    </svg>
                  </td>
                  <td></td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="#" role="button">Edit</a>
                    <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include "../../includes/footer.html"; ?>

  <!-- Jquery Core -->
  <script src="<? echo $base ?>scripts/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="<? echo $base ?>scripts/bootstrap.min.js"></script>

</body>
</html>
