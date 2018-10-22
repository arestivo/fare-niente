<?php function draw_login() { 
/**
 * Draws the login section.
 */ ?>
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
<?php } ?>

<?php function draw_signup() { 
/**
 * Draws the signup section.
 */ ?>
  <section id="signup">

    <header><h2>New Account</h2></header>

    <form method="post" action="action_signup.php">
      <input type="text" name="username" placeholder="username" required>
      <input type="password" name="password" placeholder="password" required>
      <input type="submit" value="Signup">
    </form>

    <footer>
      <p>Already have an account? <a href="index.php">Login!</a></p>
    </footer>

  </section>
<?php } ?>