<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize email input
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    // Database connection
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "Red1!@#$";
    $dbase = "webpagedb";
    $dbc = mysqli_connect($host, $dbuser, $dbpass, $dbase)
        or die("Unable to connect to the database");

    // Convert email to lowercase for case-insensitive comparison
    $email = mysqli_real_escape_string($dbc, strtolower($email));

    // Check if email exists in the database
    $query = "SELECT * FROM user WHERE LOWER(Email) = ?";
    
    if ($stmt = mysqli_prepare($dbc, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            // Generate a unique token
            $token = bin2hex(random_bytes(50));
            
            // Set token expiration time
            $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

            // Update the database with the reset token and expiry
            $updateQuery = "UPDATE user SET reset_token = ?, reset_expiry = ? WHERE LOWER(Email) = ?";
            
            if ($updateStmt = mysqli_prepare($dbc, $updateQuery)) {
                mysqli_stmt_bind_param($updateStmt, "sss", $token, $expiry, $email);
                if (mysqli_stmt_execute($updateStmt)) {
                    // Send reset link to the user's email
                    $resetLink = "https://yourwebsite.com/reset_password_confirm.php?token=$token";
                    $subject = "Password Reset Request";
                    $message = "Click the following link to reset your password: $resetLink";
                    
                    // Using PHP's mail function (consider switching to a more reliable method in production)
                    if (mail($email, $subject, $message)) {
                        echo "If the email exists, a password reset link has been sent.";
                    } else {
                        echo "Failed to send the reset email. Please try again.";
                    }
                } else {
                    echo "Failed to update the database. Please try again.";
                }
                mysqli_stmt_close($updateStmt);
            }
        } else {
            // Do not reveal whether the email exists in the database
            echo "If the email exists, a password reset link has been sent.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Database query failed. Please try again.";
    }

    // Close the database connection
    mysqli_close($dbc);
}
?>
