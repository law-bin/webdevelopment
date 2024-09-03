<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $email = $_POST['email'];
    $Mobile = $_POST['Mobile'];
   
    $password = password_hash($_POST['passwordHash'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO user (username, Mobile,email, passwordhash) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $username,$Mobile, $email, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>