<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: index2.php');
}
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';;

$user = 'hector';
$pass = '123';

if (($username != '' || $password != '') && $username == $user && $password == $pass) {
    $_SESSION['username']=$username;
    header("Location:index2.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="row container">
    <form action="login.php" method="post">
  <div class="col-md-6 mt-2">
    <label for="username" class="form-label">Escribe tu usuario</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="col-md-6 mt-2">
    <label for="password" class="form-label">escribe tu contrasena</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="col-md-6 mt-2 form-check">
    <button type="submit" class="btn btn-primary">Logguer</button>
  </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>