<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Styles/register_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
</head>

<body>
  <div class="container">
    <div class="cover">
      <div class="front">
        <img src="Slike/login.png" alt="login">
      </div>  
    </div>
    <form action="validation.php" method="$_POST">
     <div class="form-content">
      <div class="login-forma">
        <div class="title">Login</div>
        <div class="input-boxes">
          <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="ime" placeholder="Unesite korisničko ime" required>
          </div>
          <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="lozinka" placeholder="Unesite lozinku" required>
          </div>
          <div class="text"><a href="#">Zaboravili ste lozinku?</a></div>
          <div class="button input-box">
            <input type="submit" value="Potvrdi">
          </div>
          <div class="text login-text">Nemam korisnički račun <br><label ><a href="registration.php">Registriraj se</a></label></div>
        </div>
      </div>
     </div>
    </form>
  </div>


</body>

</html> 