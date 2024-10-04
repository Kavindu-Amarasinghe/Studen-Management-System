<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <!-- Navigation -->

  <nav>
  <label class="logo">Evo Academy</label>

  <ul class="nav">
    <li><a href="" class="active">Home</a></li>
    <li><a href="#register">Register</a></li>
    <!--<li><button href="login.php" src="login.php" class="btn1">Login</button></li>-->
    <li><a href="login.php">Login</a></li>

  </ul>
  </nav>

  <div class="section1">
    <label class="img_text">We Help Student Grow Their <span class="gold_text" style="color:#DAA520">Career</span></label>
    
   <img class="main_img" src="img/main2.jpg" alt="">

  </div>

  <!-- registation -->
  <div class="section2" id="register">

    <form method="POST">
          <label class="labelIN" for="name">Name:</label>
          <input  type="text" id="name" name="name" required><br>

          <label class="labelIN" for="email">Email:</label>
          <input  type="email" id="email" name="email" required><br>

          <label class="labelIN" for="phone">Phone:</label>
          <input  type="text" id="phone" name="phone" required><br>

          <label class="labelIN" for="nic">NIC:</label>
          <input  type="text" id="nic" name="nic" required><br>

          <label class="labelIN" for="Address">Address:</label>
          <input  type="text" id="Address" name="Address" required><br>

          <label class="labelIN" for="password">password:</label>
          <input  type="password" id="password" name="password" required><br>

          <input type="submit" value="Register">
    </form>
    <?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      $email= $_POST['email'];
      $phone = $_POST['phone'];
      $nic = $_POST['nic'];
      $address = $_POST['Address'];
      $password = $_POST['password'];
      $type = "student";
    
        $sql = "INSERT INTO users (name,email,nic,address,password,phone,type) VALUES ('$name','$email','$nic','$address','$password','$phone','$type')";
        $conn->query($sql);
    }
    
    $students = $conn->query("SELECT * FROM students");

   
    

    ?>

  </div>

  <footer>
    <h3 class="footer_text">All @copyright reserved by Evo Academy</h3>
  </footer>
  <script src="script.js" href="script.js"></script>
</body>
</html>