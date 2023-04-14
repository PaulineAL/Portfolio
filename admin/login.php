<?php
$pdo = require '../model/connect.php';
if (isset($_POST['login'])) {
$email = $_POST['email'];
$password = $_POST['password'];
echo "<script>console.log('Tentative de connection avec : ".$email."/".$password."' );</script>";
// execute a query
//$sql = "SELECT * FROM `admin` WHERE email=\"admin@portfolio.com\" && password=\"admin123\"";
$sql = "SELECT * FROM `admin` WHERE email='{$email}' && password='{$password}'";
$user_data = $pdo->query($sql)->fetchAll();
echo "<script>console.log('Le resultat : ".count($user_data)."' );</script>";

if (count($user_data)>0) {
$_SESSION['isUserLoggedIn'] = true;
$_SESSION['emailId'] = $_POST['email'];
echo "<script> window.location.href='index.php'; </script>";
}else{
echo "<script> alert('Email ou mot de passe incorrecte!')</script>";
}
} else {
if (isset($_SESSION['isUserLoggedIn'])){
echo "<script> window.location.href='index.php'; </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Backoffice | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index.php">Mon Portfolio</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Authentifiez vous pour administrer votre portfolio</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name ="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name ="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Se souvenir de moi
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="login" type="submit" class="btn btn-primary btn-block">Se connecter</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
