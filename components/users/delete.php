<?php
// Database connection
$dbc = mysqli_connect("localhost", "root", "Red1!@#$", "webpagedb")
    or die("Unable to select database");

session_start();

if (!(isset($_SESSION['Aname']))) {
    echo "Unauthorized Access";
    return;
}

// Handle user deletion
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Prepare and execute the delete query
    $delete_query = "DELETE FROM user WHERE UserID = ?";
    $stmt = mysqli_prepare($dbc, $delete_query);
    mysqli_stmt_bind_param($stmt, "i", $delete_id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Deletion successful, redirect back to the user list page
        header("location: ../../user.php");
        exit();
    } else {
        echo "Failed to delete user: " . mysqli_error($dbc);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($dbc);
?>