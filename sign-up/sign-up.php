<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>crypto website Sign up</title>
    <link rel="stylesheet" href="sign-up.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>

    <form action="register.php" method="post">
        <h1>SIGN UP</h1>

        <label for="fullname">
    <input type="text" name="fullname" id="fullname" required>
    <span>FULL NAME</span>
  </label>

        <label for="email">
    <input type="email" name="email" id="email" required >
    <span>EMAIL</span>
  </label>


        <label for="username">
    <input type="text" name="username" id="username" required >
    <span>USER ID</span>
  </label>

        <label for="password">
    <input type="password" name="password" id="password" required >
    <span>PASSWORD</span>
  </label>

  <input type="submit" value="Submit" class="btn" name="SignUp"/>

    <p class="para-2">
        Already have an account? <a href="../sign-in/sign-in.php">Sign In Here</a>
    </p>

      <div class="home-btn">
        <a href="../index.php"><i class="ri-home-line"></i>Back To Home</a>
     </div>

    </form>



</body>

</html>