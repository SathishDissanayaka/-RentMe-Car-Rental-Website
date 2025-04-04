

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>
      <h1 class="title">RentMe Car Rentals</h1>
    </div>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">REGISTER</h1>
      <form method="post" action="register-handler.php">
        <div class="input-group">
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
          <div class="input-group">
              <input type="text" name="contact_no" id="contact_no" placeholder="Contact No" required>
              <label for="contact_no">Contact No</label>
          </div>
          <div class="input-group">
              <input type="text" name="address" id="address" placeholder="Address" required>
              <label for="Address">Address</label>
          </div>
          <div class="input-group">
              <input type="text" name="dob" id="dob" placeholder="Date Of Birth" required>
              <label for="dob">Date Of Birth</label>
          </div>
        <div class="input-group">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">SIGN IN</h1>
        <form method="post" action="login-handler.php">
          <div class="input-group">
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
    </div>
      <script src="script.js"></script>
</body>
</html>
