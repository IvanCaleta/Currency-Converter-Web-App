<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="Styles/register_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
</head>

<body>
  <div class="container">
    <div class="cover">
        <div class="back">
          <img class="backimg" src="Slike/register.png" alt="register">
        </div>
    </div>
    <form action="unos.php" method="$_POST">
     <div class="form-content">
      <div class="registracija-forma">
        <div class="title">Registracija</div>
        <div class="input-boxes">
          <div class="input-box">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Unesite korisničko ime" required >
          </div>
          <div class="input-box">
            <i class="fas fa-envelope"></i>
            <input type="text" name="mail" placeholder="Unesite e-mail" required>
          </div>
          <div class="input-box">
            <i class="fas fa-phone"></i>
            <input type="number" name="telefon" placeholder="Unesite broj telefona" required  >
          </div>
          <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Unesite lozinku" required  >
          </div>
          <div class="input-box">
            <i class="fas fa-lock"></i>
            <input type="password" name="repeat" placeholder="Ponovite lozinku" required >
          </div>
          <div class="button input-box">
            <input type="submit" value="Potvrdi">
          </div>
          <div class="text signup-text" style=>Već imam račun<br> <label><a href="login.php">Prijavi se</a></label></div>
        </div>
      </div>
     </div>
    </form>
  </div>


</body>

</html> 