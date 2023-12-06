<?php
    session_start();

    // If you are already connected goto Home page
    if (isset($_SESSION["Username"])){
        header("Location: ./Admins.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login page</title>
  <link rel="stylesheet" href="css/login_register.css" type="text/css">
</head>
<body>
<?php
  if(isset($_GET['error'])){
    if($_GET['error'] == "sqlerror"){
      echo "<script>alert('Hay algo mal con la base de datos');</script>";
    }
    else if($_GET['error'] == "wrongcrentetials1" || $_GET['error'] == "wrongcrentetials2"){
      echo "<script>alert('Usuario o contraseña invalida');</script>";
    }
    else{
      echo "<script>alert('Error inesperado');</script>";
    }
  }
  else if (isset($_GET['register'])){
    if($_GET['register'] == "true"){
      echo "<script>alert('Usuario creado!');</script>";
    }
  }
?>
<div class="login_register-page">
  <div class="form">
    <div class='login_register-form-text'><h2>Hola a la administración del sistema</h2></div>
    <form class="login-form" action="includes/login.inc.php" method="post">
      <input type="text" name="login-email" maxlength="100" placeholder="Usuario/Email*" required/>
      <input type="password" name="login-pwd" maxlength="100" placeholder="Contraseña" required/>
      <button type="submit" name="login-submit">ENTRAR</button>
    </form>
  </div>
</div>
</body>
</html>

