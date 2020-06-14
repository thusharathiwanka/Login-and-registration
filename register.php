<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/register.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="navbar">
      <ul>
        <li><a href="#Home">Home</a></li>
        <li><a href="#Contact">Categories</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#Contact">Contact</a></li>
      </ul>
    </div>
    <form class="box" action="register.php" method="POST">
      <h1>Register</h1>
      <input type="text" name="fname" placeholder="First Name" required />
      <input type="text" name="lname" placeholder="Last Name" required />
      <input type="text" name="username" placeholder="Username" required />
      <input type="text" name="email" placeholder="E-Mail" required />
      <input type="text" name="pnumber" placeholder="Phone Number" />
      <input type="password" name="pword" placeholder="Password" required />
      <input type="submit" name="register" value="Register" />
    </form>
    
    <?php
      include_once "additional/dbconfig.php";

      $f_name = $_POST['fname'];
      $l_name = $_POST['lname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $p_number = $_POST['pnumber'];
      $pword = $_POST['pword'];

      $sql = "INSERT INTO user_details(f_name, l_name, username, email, p_number, p_word) VALUES('$f_name', '$l_name', '$username', '$email', '$p_number', '$pword')";
      mysqli_query($conn, $sql);
    ?>
  </body>
</html>
