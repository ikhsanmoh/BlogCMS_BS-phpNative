<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Recovery</title>
  <link rel="stylesheet" href="../../styles/bootstrap.css">
  <link rel="stylesheet" href="../../styles/login.css">
</head>
<body class="text-center">

  <form class="form-signin">

    <h2 class="h2 font-weight-bold">Web Application</h2>
    <img class="mb-4" src="../../assets/img/ex-logo.png" alt="logo" width="72" height="72">
    <h2 class="h4 mb-3 font-weight-normal">Password Recovery</h2>

    <div class="small mb-3 text-muted text-left">
      Enter your email address and we will send you a link to reset your password.
    </div>

    <label for="input_email" class="sr-only">Username</label>
    <input type="email" id="input_email" class="form-control" placeholder="Enter Email Adress..." required autofocus>

    <a href="../../index.php" class="btn btn-lg btn-primary btn-block mt-3" type="submit">Reset Password</a>
    <p class="mt-2"><a href="login.php" class="small">Return to login</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; Ikhsan 2020</p>

  </form>

</body>
</html>