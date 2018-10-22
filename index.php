<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans+Condensed:300" rel="stylesheet">
  </head>

  <body>

    <header>
      <h1><a href="index.php"><i class="fas fa-bed"></i> Fare Niente</a></h1>
    </header>

    <section id="login">

      <header><h2>Welcome Back</h2></header>

      <form method="post" action="action_login.php">
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Login">
      </form>
  
      <footer>
        <p>Don't have an account? <a href="signup.php">Signup!</a></p>
      </footer>
  
    </section>
  </body>
</html>