<?php
include 'db.php';

$id = $_GET['id'];
$student = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email= $_POST['email'];
  $phone = $_POST['phone'];
  $nic = $_POST['nic'];
  $address = $_POST['Address'];
  $password = $_POST['password'];

    $sql = "UPDATE users SET name='$name', email='$email',nic='$nic',address='$address',password='$password', phone='$phone' WHERE id=$id";
    $conn->query($sql);

    header('Location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Edit Student</h1>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $student['name']; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $student['email']; ?>" required><br>

        <label for="nic">NIC:</label>
        <input type="nic" id="nic" name="nic" value="<?php echo $student['nic']; ?>" required><br>

        <label for="address">Address:</label>
        <input type="address" id="address" name="address" value="<?php echo $student['address']; ?>" required><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo $student['password']; ?>" required><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $student['phone']; ?>" required><br>

        <input type="submit" value="Update Student">
    </form>
</body>
</html>
