<?php
session_start();
require_once 'dbconnect.php';

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $query = "SELECT * FROM Users WHERE Email = '$email'";

        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
            if (password_verify($password, $data['PasswordHash'])) {
                // Start a session and set session variables
                $_SESSION['uid'] = $data['UserID'];
                $_SESSION['email'] = $data['Email'];
    
                header('location:../user-dashboard.php');
            }
            else{
                $_SESSION['error'] = "Username or password invalid !!";
                header('location:../login.php');
    
            }

           
        }
        else{
            $_SESSION['error'] = "Username or password invalid !!";
            header('location:../login.php');

        }
    }

    if(isset($_POST['register'])){
        $fullname = $conn->real_escape_string($_POST['fullname']);
        $email = $conn->real_escape_string($_POST['email']);
        $mobile = $conn->real_escape_string($_POST['mobile']);
        $password = $_POST['password'];
        $conpassword = $_POST['conpassword'];
        $country = $conn->real_escape_string($_POST['country']);

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $query = "SELECT * FROM users WHERE Email = '$email'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 0){
            $query = "INSERT INTO Users (PasswordHash, Email, Fullname) VALUES ('$passwordHash', '$email', '$fullname')";
            $result = mysqli_query($conn,$query);
            $id = $conn->insert_id;
            
            $sql = "INSERT INTO UserRoles (UserID, RoleID) VALUES ('$id', 2)";
            $res =  mysqli_query($conn,$sql);

            if($res){
                $_SESSION['success'] = "Registered Successfully, please login to continue!!";
                header('location:../login.php');
            }
        }
        else{
            $_SESSION['error'] = "Email already taken, please use another email";
            header('location:../signup.php');
        }

    }

    if(isset($_POST['update'])){
        $fullname = $conn->real_escape_string($_POST['fullname']);
        $email = $conn->real_escape_string($_POST['email']);
        $bio = $conn->real_escape_string($_POST['bio']);
        $image = $_FILES['image']['name'];
        $target = "../images/profile/".basename($image); 
        $userID = $_SESSION['uid'];
        
        // Update user info in Users table
        $sql = "UPDATE Users SET Fullname='$fullname', Email='$email' WHERE UserID='$userID'";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] = "User info updated successfully.";
        } 
        $result = $conn->query("SELECT * FROM UserProfiles WHERE UserID='$userID'");
        if ($result->num_rows > 0) {
            // User profile exists, update it
            if (!empty($image)) {
                // If a new profile picture is uploaded
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $sql = "UPDATE UserProfiles SET Bio='$bio', ProfilePicture='$image' WHERE UserID='$userID'";
                } 
            } else {
                // No new profile picture, update other fields
                $sql = "UPDATE UserProfiles SET Bio='$bio' WHERE UserID='$userID'";
            }
        } else {
            // User profile does not exist, insert it
            if (!empty($image)) {
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $sql = "INSERT INTO UserProfiles (UserID, Bio, ProfilePicture) VALUES ('$userID', '$bio', '$image')";
                } 
            } else {
                $sql = "INSERT INTO UserProfiles (UserID, Bio) VALUES ('$userID', '$bio')";
            }
        }
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success'] =  "Profile updated successfully.";
            header('location:../user-dashboard.php');
        }


    }
?>