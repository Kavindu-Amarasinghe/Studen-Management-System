<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name,email,nic,address,password,phone) VALUES ('$name','$email','$nic','$address','$password','$phone')";
    $conn->query($sql);
}

$students = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Management System</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h2>Student List</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>NIC</th>
            <th>Address</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $students->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['nic']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <center>
    <button><a href="index.php" > logout </a></button>
    </center>
    
</body>
</html>
