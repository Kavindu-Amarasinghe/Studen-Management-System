<?php


include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['name'];
  
  $password = $_POST['password'];
  
  $type=$_POST['role'];
  

  $sql = "SELECT * FROM users WHERE name='$username' AND password='$password' AND type='$type'";
  
  

  // Execute the query
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
         "id: " . $row["id"]. " - Name: " . $row["name"]. " - Type: " . $row["type"]. "<br>";
        if ($row["type"]=="student"){
            header('Location:student.php');
        } elseif($row["type"]=="admin"){
            header('Location:admin.php');
        }

        // 
        
    }
} else {
    echo "wrong credentials";
}

//   if (mysqli_query($conn,$sql)) {
      
//     header('Location:student.php');
      
//   } else {
//       echo "No user found with that username.";
//   }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Login vbvbv</h1>
    <form method="POST">
        <label for="name">Username:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <select id="role" name="role" required>
            <option value="student">Student</option>
            <option value="admin">Admin</option>
        </select><br>
        <input type="submit" value="Login"  >
        <!-- <button class="logbtn"><a class="btna" href="adminlog.php">Login for admin</a></button> -->
      
    
        
    </form>

    <p>Don't have an account? <a href="index.php">Register here</a></p>
    
    
</body>
</html>
