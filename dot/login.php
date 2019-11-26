<form action="action_page.php" method="post">
    <body style="background-color:#53e3d4;">
  <div class="imgcontainer">
    <!--<img src="img/download.png" alt="KK logo" class="avatar">-->
    <h1>Log In</h1>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
 
  <div class="container" style="background-color:#f1f1f1">
  <h4>Don't have an account?</h4>
  <a href="signup.php">Signup</a>
    <span class="psw">Forgot <a href="resetpassword.php">password?</a></span>
  </div>
</form>

<style>

h1 {
color: black;
}

h4 {
    color: red;
}

/* Bordered form */
form {
  margin: center;

}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.signup {
  width: auto;
  padding: 10px 50;
  background-color: #53e3d4;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 10px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top:10px 50;;
}

/* Change styles for span and cancel button on extra small screens */
/*@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
} */
</style>