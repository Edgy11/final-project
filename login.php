<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Login & Registration Form | Codehal</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form action="javascript:void(0);"> <!-- Prevent default form submission -->
        <h2>Login</h2>
        <div class="input-group">
          <input type="text">
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="password">
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <!-- Added onclick handler for navigation -->
        <button type="button" onclick="navigateToHomepage()">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <div class="form-wrapper sign-up">
      <form action="">
        <h2>Sign Up</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div>
        <button type="submit">Sign Up</button>
        <div class="signUp-link">
          <p>Already have an account? <a href="" class="signInBtn-link">Sign In</a></p>
        </div>
      </form>
    </div>
  </div>
  <script>
    function navigateToHomepage() {
      // Replace 'homepage.html' with the actual URL of your homepage
      window.location.href = 'index.php';
    }
  </script>
</body>
</html>