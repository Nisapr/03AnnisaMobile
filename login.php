<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<form class="box" action="" method="POST">
<div class="wrapper">
  <div class="container">
    <div class="col-left">
      <div class="login-text">
        <h1>Welcome</h1>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2><br>
        <form>
          <p>
            <label>Username</label>
            <input type="text" placeholder="Username" name="username" required>
          </p>
          <p>
            <label>Password</label>
            <input type="password" placeholder="Password" name="password" required>
          </p>
          <p>
            <input type="submit" name="submit" value="Login" />
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    // Mengambil nilai yang diinputkan oleh user
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Membuat session
    $_SESSION['username'] = "Annisa";
    $_SESSION['password'] = "190805";

    // Lakukan pengecekan
    if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
        header('Location:admin.php');
    } else {
        echo "Username atau password salah !";
    }
}
?>