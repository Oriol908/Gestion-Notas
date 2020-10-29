<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
  <div class="pagewrap">
  <form action="model/login.php" method="POST">
        <div class="form">
        <h3 class="form__title">Login</h3>
      <div class="container">
        <input class="container__input" type="text" id="username" name="email" value="" required>
        <label id="userLabel" for="username" class="container__label">Username</label>
      </div>
      <div class="container">
        <input class="container__input" type="password" id="pass" name="passwd" value="" required>
        <label id="passLabel" for="pass" class="container__label">Password</label>
      </div>
      <input class="form__submit" name="submit" type="submit" value="Acceder">
    </form>
  </form>
  </div>

</body>
</html>