<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>crypto website Sign In</title>
    <link rel="stylesheet" href="sign-in.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <form action="./log-in.php" method="POST">

      <h1>SIGN IN</h1>

      <label for="email">
        <input type="email" name="email" id="email" />
        <span>EMAIL</span>
      </label>

      <label for="password">
        <input type="password" name="password" id="password" />
        <span>PASSWORD</span>
      </label>

      <input type="submit" value="Submit" class="btn" name="SignIn" />

      <p class="para-2">
        Not have an account? <a href="../sign-up/sign-up.php">Sign Up Here</a>
      </p>

      <div class="home-btn">
        <a href="../index.php"><i class="ri-home-line"></i>Back To Home</a>
      </div>
    </form>
  </body>
</html>
