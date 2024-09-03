<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize the token
    $token = mysqli_real_escape_string($dbc, $_GET['token']);
    $newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    // Database connection
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "Red1!@#$";
    $dbase = "webpagedb";
    $dbc = mysqli_connect($host, $dbuser, $dbpass, $dbase)
        or die("Unable to select database");
    
    // Verify the token using a prepared statement
    $query = "SELECT * FROM user WHERE reset_token = ? AND reset_expiry >= NOW()";
    if ($stmt = mysqli_prepare($dbc, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $token);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($result) === 1) {
            // Update the password using a prepared statement
            $updateQuery = "UPDATE user SET passwordHash = ?, reset_token = NULL, reset_expiry = NULL WHERE reset_token = ?";
            if ($updateStmt = mysqli_prepare($dbc, $updateQuery)) {
                mysqli_stmt_bind_param($updateStmt, "ss", $newPassword, $token);
                if (mysqli_stmt_execute($updateStmt)) {
                    echo "Your password has been successfully reset.";
                } else {
                    echo "Failed to update the password.";
                }
                mysqli_stmt_close($updateStmt);
            }
        } else {
            echo "Invalid or expired token.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Database query failed.";
    }
    
    // Close the database connection
    mysqli_close($dbc);
}
?>
