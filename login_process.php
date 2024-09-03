<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $password = $_POST['passwordHash'];

    $stmt = $conn->prepare("SELECT Userid, username, passwordhash FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header("Location: landingpage.php");
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found";
    }

    $stmt->close();
}
$conn->close();
?>